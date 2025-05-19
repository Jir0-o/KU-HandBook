<?php

namespace App\Http\Controllers;

use App\Models\GraduateAttribute;
use App\Models\GraduateAttributeTitle;
use Illuminate\Http\Request;

class GraduateAttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validation = $request->validate([
                'attributesName' => 'required|string',
                'attributesSubName' => 'required|string',
                'attributesCode' => 'required|string',
                'degreeProgram' => 'required|exists:degree_programs,id',
                'domain' => 'required|exists:domains,id',
                'attributesDetails' => 'required|string',
                'dynamicValues*' => 'nullable|array',
                'dynamicValues.*.attributeCode' => 'nullable|string',
                'dynamicValues.*.attributeDetails' => 'nullable|string',
                'dynamicValues.*.domains' => 'nullable|exists:domains,id',
            ]);

            $graduateAttributeTitle = new GraduateAttributeTitle();
            $graduateAttributeTitle->name = $validation['attributesName'];
            $graduateAttributeTitle->sub_name = $validation['attributesSubName'];
            $graduateAttributeTitle->version = date('Y');

            $graduateAttributeTitle->save();

            $graduateAttribute = new GraduateAttribute();
            $graduateAttribute->code = $validation['attributesCode'];
            $graduateAttribute->description = $validation['attributesDetails'];
            $graduateAttribute->graduate_attribute_title_id = $graduateAttributeTitle->id;
            $graduateAttribute->degree_program_id = $validation['degreeProgram'];
            $graduateAttribute->domain_ids = implode(',', $validation['domain']);
            $graduateAttribute->version = date('Y');

            $graduateAttribute->save();

            if (isset($validation['dynamicValues'])) {
                foreach ($validation['dynamicValues'] as $dynamicValue) {
                    $dynamicGraduateAttribute = new GraduateAttribute();
                    $dynamicGraduateAttribute->code = $dynamicValue['attributeCode'];
                    $dynamicGraduateAttribute->description = $dynamicValue['attributeDetails'];
                    $dynamicGraduateAttribute->graduate_attribute_title_id = $graduateAttributeTitle->id;
                    $dynamicGraduateAttribute->degree_program_id = $validation['degreeProgram'];
                    $dynamicGraduateAttribute->domain_ids = implode(',', $dynamicValue['domains']);
                    $dynamicGraduateAttribute->version = date('Y');

                    // Save the dynamic graduate attribute
                    $dynamicGraduateAttribute->save();
                }
            }

            return response()->json([
                'status' => true,
                'message' => 'Graduate attribute created successfully',
                'data' => $graduateAttribute
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to create graduate attribute',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(GraduateAttribute $graduateAttribute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GraduateAttribute $graduateAttribute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $validation = $request->validate([
                'attributesName' => 'required|string',
                'attributesSubName' => 'required|string',
                'attributesCode' => 'required|string',
                'degreeProgram' => 'required|exists:degree_programs,id',
                'domain' => 'required|exists:domains,id',
                'attributesDetails' => 'required|string',
                'dynamicValues*' => 'nullable|array',
                'dynamicValues.*.attributeCode' => 'nullable|string',
                'dynamicValues.*.attributeDetails' => 'nullable|string',
                'dynamicValues.*.domains' => 'nullable|exists:domains,id',
            ]);

            if($request->graduateAttributeEditFlag == true){

                $oldGraduateAttributeTitles = GraduateAttribute::where('degree_program_id', $id)->pluck('graduate_attribute_title_id')->toArray();

                if($oldGraduateAttributeTitles) {
                    // First, delete all related GraduateAttribute records
                    GraduateAttribute::where('degree_program_id', $id)->delete();

                    // Then, delete all related GraduateAttributeTitle records
                    GraduateAttributeTitle::whereIn('id', $oldGraduateAttributeTitles)->delete();
                } else {
                    
                }

                $graduateAttributeTitle = new GraduateAttributeTitle();
                $graduateAttributeTitle->name = $validation['attributesName'];
                $graduateAttributeTitle->sub_name = $validation['attributesSubName'];
                $graduateAttributeTitle->version = date('Y');

                $graduateAttributeTitle->save();

                $graduateAttribute = new GraduateAttribute();
                $graduateAttribute->code = $validation['attributesCode'];
                $graduateAttribute->description = $validation['attributesDetails'];
                $graduateAttribute->graduate_attribute_title_id = $graduateAttributeTitle->id;
                $graduateAttribute->degree_program_id = $validation['degreeProgram'];
                $graduateAttribute->domain_ids = implode(',', $validation['domain']);
                $graduateAttribute->version = date('Y');

                $graduateAttribute->save();

                if (isset($validation['dynamicValues'])) {
                    foreach ($validation['dynamicValues'] as $dynamicValue) {
                        $dynamicGraduateAttribute = new GraduateAttribute();
                        $dynamicGraduateAttribute->code = $dynamicValue['attributeCode'];
                        $dynamicGraduateAttribute->description = $dynamicValue['attributeDetails'];
                        $dynamicGraduateAttribute->graduate_attribute_title_id = $graduateAttributeTitle->id;
                        $dynamicGraduateAttribute->degree_program_id = $validation['degreeProgram'];
                        $dynamicGraduateAttribute->domain_ids = implode(',', $dynamicValue['domains']);
                        $dynamicGraduateAttribute->version = date('Y');

                        // Save the dynamic graduate attribute
                        $dynamicGraduateAttribute->save();
                    }
                }

                return response()->json([
                    'status' => true,
                    'message' => 'Graduate attribute updated successfully',
                    'data' => $graduateAttribute
                ], 200);


            } else {
                //delete all graduate attribute for the course
                $oldGraduateAttribute = GraduateAttribute::find($id);

                if($oldGraduateAttribute) {
                    $oldGraduateAttributeTitleId = $oldGraduateAttribute->graduate_attribute_title_id;

                    if ($oldGraduateAttributeTitleId) {
                        GraduateAttribute::where('graduate_attribute_title_id', $oldGraduateAttributeTitleId)->delete();

                        GraduateAttributeTitle::where('id', $oldGraduateAttributeTitleId)->delete();
                    }
                } else {
                    return response()->json([
                        'status' => false,
                        'message' => 'Graduate attribute not found',
                    ], 404);
                }

                $graduateAttributeTitle = new GraduateAttributeTitle();
                $graduateAttributeTitle->name = $validation['attributesName'];
                $graduateAttributeTitle->sub_name = $validation['attributesSubName'];
                $graduateAttributeTitle->version = date('Y');

                $graduateAttributeTitle->save();

                $graduateAttribute = new GraduateAttribute();
                $graduateAttribute->code = $validation['attributesCode'];
                $graduateAttribute->description = $validation['attributesDetails'];
                $graduateAttribute->graduate_attribute_title_id = $graduateAttributeTitle->id;
                $graduateAttribute->degree_program_id = $validation['degreeProgram'];
                $graduateAttribute->domain_ids = implode(',', $validation['domain']);
                $graduateAttribute->version = date('Y');

                $graduateAttribute->save();

                if (isset($validation['dynamicValues'])) {
                    foreach ($validation['dynamicValues'] as $dynamicValue) {
                        $dynamicGraduateAttribute = new GraduateAttribute();
                        $dynamicGraduateAttribute->code = $dynamicValue['attributeCode'];
                        $dynamicGraduateAttribute->description = $dynamicValue['attributeDetails'];
                        $dynamicGraduateAttribute->graduate_attribute_title_id = $graduateAttributeTitle->id;
                        $dynamicGraduateAttribute->degree_program_id = $validation['degreeProgram'];
                        $dynamicGraduateAttribute->domain_ids = implode(',', $dynamicValue['domains']);
                        $dynamicGraduateAttribute->version = date('Y');

                        // Save the dynamic graduate attribute
                        $dynamicGraduateAttribute->save();
                    }
                }

                return response()->json([
                    'status' => true,
                    'message' => 'Graduate attribute updated successfully',
                    'data' => $graduateAttribute
                ], 200);
            }

        } catch (\Exception $e ) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to update graduate attribute',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GraduateAttribute $graduateAttribute)
    {
        //
    }
}
