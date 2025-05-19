<?php

namespace App\Http\Controllers;

use App\Models\CourseLearningMaterial;
use App\Models\LearningMaterialType;
use Illuminate\Http\Request;

class CourseLearningMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $courseLearningMaterials = CourseLearningMaterial::all();
            
            if($courseLearningMaterials->isEmpty()) {
                return response()->json([
                    'status' => true,
                    'message' => 'No course learning material found.'
                ]);
            }

            return response()->json([
                'status' => true,
                'message' => 'Course learning materials fetched successfully.',
                'data' => $courseLearningMaterials
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to fetch course learning materials.',
                'error' => $e->getMessage()
            ]);
        }

    }

    function LearningMaterialTypeIndex()
    {
        try {
            $LearningMaterialType = LearningMaterialType::all();
            
            if($LearningMaterialType->isEmpty()) {
                return response()->json([
                    'status' => true,
                    'message' => 'No course learning material found.'
                ]);
            }

            return response()->json([
                'status' => true,
                'message' => 'Course learning materials fetched successfully.',
                'data' => $LearningMaterialType
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch course learning materials.',
                'error' => $e->getMessage()
            ]);
        }
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
                'course' => 'required|exists:course_infos,id',
                'type' => 'required|exists:learning_material_types,id',
                'outcome_details' => 'required|string',
                'dynamicValues*' => 'nullable|array',
                'dynamicValues.*.attributeDetails' => 'nullable|string',
                'dynamicValues.*.typeId' => 'nullable|exists:learning_material_types,id',
            ]);

            $courseLearningMaterial = new CourseLearningMaterial();
            $courseLearningMaterial->course_id = $validation['course'];
            $courseLearningMaterial->learning_material_type_id = $validation['type'];
            $courseLearningMaterial->name = $validation['outcome_details'];
            $courseLearningMaterial->version = date('Y');

            $courseLearningMaterial->save();

            if (isset($validation['dynamicValues'])) {
                foreach ($validation['dynamicValues'] as $dynamicValue) {
                    $dynamicCourseLearningMaterial = new CourseLearningMaterial();
                    $dynamicCourseLearningMaterial->course_id = $validation['course'];
                    $dynamicCourseLearningMaterial->learning_material_type_id = $dynamicValue['typeId'];
                    $dynamicCourseLearningMaterial->name = $dynamicValue['attributeDetails'];
                    $dynamicCourseLearningMaterial->version = date('Y');

                    // Save the dynamic course learning material
                    $dynamicCourseLearningMaterial->save();
                }
            }

            return response()->json([
                'status' => true,
                'message' => 'Course learning material created successfully',
                'data' => $courseLearningMaterial,
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to create course learning material',
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(CourseLearningMaterial $courseLearningMaterial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CourseLearningMaterial $courseLearningMaterial)
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
                'course' => 'required|exists:course_infos,id',
                'type' => 'required|exists:learning_material_types,id',
                'outcome_details' => 'required|string',
                'dynamicValues*' => 'nullable|array',
                'dynamicValues.*.id' => 'nullable|exists:course_learning_materials,id',
                'dynamicValues.*.attributeDetails' => 'nullable|string',
                'dynamicValues.*.typeId' => 'nullable|exists:learning_material_types,id',
            ]);

            if($request->learningMaterialEditFlag == true){

                $LearningMaterial = CourseLearningMaterial::find($id);

                $LearningMaterial->update([
                    'learning_material_type_id' => $validation['type'],
                    'name' => $validation['outcome_details'],
                ]);

                $storeLearningMaterial = [];

                $storeLearningMaterial[] = $LearningMaterial->id;

                if(isset($validation['dynamicValues']) && count($validation['dynamicValues']) > 0) {

                    foreach ($validation['dynamicValues'] as $dynamicValue) {

                        $LearningMaterialsId = $dynamicValue['id'] ?? null;

                        $updateLearningMaterials = CourseLearningMaterial::updateOrCreate(
                            [
                                'id' => $LearningMaterialsId
                            ],
                            [
                                'course_id' => $validation['course'],
                                'learning_material_type_id' => $dynamicValue['typeId'],
                                'name' => $dynamicValue['attributeDetails'],
                                'version' => date('Y')
                            ]
                        );

                        $storeLearningMaterial[] = $updateLearningMaterials->id;
                    }
                }

                 // Delete the course learning material that are not in the storeLearningMaterial
                 $existingCourseLearningMaterial = CourseLearningMaterial::where('course_id', $validation['course'])->pluck('id')->toArray();

                 $deleteCourseLearningMaterial = array_diff($existingCourseLearningMaterial, $storeLearningMaterial);

                 foreach ($deleteCourseLearningMaterial as $id) {

                     $material = CourseLearningMaterial::find($id);

                     if($material) {
                         $material->delete();
                     }
                 }

                return response()->json([
                    'status' => true,
                    'message' => 'Course learning material updated successfully',
                    'data' => $LearningMaterial,
                ], 200);

            } else {
                // Delete all the existing course learning materials
                CourseLearningMaterial::where('course_id', $validation['course'])->delete();

                $courseLearningMaterial = new CourseLearningMaterial();
                $courseLearningMaterial->course_id = $validation['course'];
                $courseLearningMaterial->learning_material_type_id = $validation['type'];
                $courseLearningMaterial->name = $validation['outcome_details'];
                $courseLearningMaterial->version = date('Y');

                $courseLearningMaterial->save();

                if (isset($validation['dynamicValues'])) {
                    foreach ($validation['dynamicValues'] as $dynamicValue) {
                        $dynamicCourseLearningMaterial = new CourseLearningMaterial();
                        $dynamicCourseLearningMaterial->course_id = $validation['course'];
                        $dynamicCourseLearningMaterial->learning_material_type_id = $dynamicValue['typeId'];
                        $dynamicCourseLearningMaterial->name = $dynamicValue['attributeDetails'];
                        $dynamicCourseLearningMaterial->version = date('Y');

                        // Save the dynamic course learning material
                        $dynamicCourseLearningMaterial->save();
                    }
                }

                return response()->json([
                    'status' => true,
                    'message' => 'Course learning material updated successfully',
                ], 200);
            }

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to update course learning material',
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseLearningMaterial $courseLearningMaterial)
    {
        //
    }
}
