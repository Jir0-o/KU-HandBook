<?php

namespace App\Http\Controllers;

use App\Models\CourseClo;
use App\Models\CourseContent;
use App\Models\CourseInfo;
use App\Models\CourseStrategy;
use App\Models\MappingCloPlo;
use App\Models\MappingCloStrategy;
use Illuminate\Http\Request;

class CourseCLOController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $courseCLOs = CourseClo::all();

            if ($courseCLOs->isEmpty()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Course CLOs fetched Failed',
                    'data' => $courseCLOs
                ], 500);
            }
            return response()->json([
                'status' => true,
                'message' => 'Course CLOs fetched successfully',
                'data' => $courseCLOs
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch Course CLOs',
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
                'courseId' => 'required|exists:course_infos,id',
                'code' => 'required|string',
                'details' => 'required|string',
                'dynamicValues*' => 'nullable|array',
                'dynamicValues.*.attributeCode' => 'nullable|string',
                'dynamicValues.*.attributeDetails' => 'nullable|string',
            ]);

            // Create CourseClo record
            $courseClo = new CourseClo();
            $courseClo->course_id = $validation['courseId'];
            $courseClo->code = $validation['code'];
            $courseClo->description = $validation['details'];
            $courseClo->version = date('Y');
            $courseClo->save();


            // Create or update multiple CourseClo records if dynamicValues are present
            if (isset($validation['dynamicValues'])) {
                foreach ($validation['dynamicValues'] as $dynamicValue) {
                    $dynamicCourseClo = new CourseClo();
                    $dynamicCourseClo->code = $dynamicValue['attributeCode'];
                    $dynamicCourseClo->description = $dynamicValue['attributeDetails'];
                    $dynamicCourseClo->course_id = $validation['courseId'];
                    $dynamicCourseClo->version = date('Y');

                    // Save the dynamic Course CLO
                    $dynamicCourseClo->save();
                }
            }

            return response()->json([
                'status' => true,
                'message' => 'Course CLO created successfully',
                'data' => $courseClo
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to create course CLO',
                'error' => $e->getMessage()
            ]);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $courseCLO = CourseClo::where('course_id', $id)->get();

            if ($courseCLO->isEmpty()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Course CLO not found',
                    'data' => $courseCLO
                ], 404);
            }

            $cloIds = CourseClo::where('course_id', $id)->pluck('id')->toArray();

            $mappingStrategy = MappingCloStrategy::whereIn('clo_id', $cloIds)->get();

            $mappingCloPlo = MappingCloPlo::whereIn('clo_id', $cloIds)->get();

            return response()->json([
                'status' => true,
                'message' => 'Course CLO fetched successfully',
                'data' => $courseCLO,
                'mappingStrategy' => $mappingStrategy,
                'mappingCloPlo' => $mappingCloPlo
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch Course CLO',
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CourseClo $courseCLO)
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
                'courseId' => 'required|exists:course_infos,id',
                'code' => 'required|string',
                'details' => 'required|string',
                'dynamicValues*' => 'nullable|array',
                'dynamicValues.*.id' => 'nullable|exists:course_clos,id',
                'dynamicValues.*.attributeCode' => 'nullable|string',
                'dynamicValues.*.attributeDetails' => 'nullable|string',
            ]);

            if($request->cloEditFlag == true){
                // Retrieve all Course CLOs by course_id
                $courseClos = CourseClo::findOrFail($id);

                if(!$courseClos) {
                    return response()->json([
                        'status' => false,
                        'message' => 'Course CLO not found',
                        'data' => null
                    ], 404);
                }

                // Update the Course CLO
                $courseClos->updateOrCreate(
                    [
                        'id' => $id
                    ],
                    [
                        'course_id' => $validation['courseId'],
                        'code' => $validation['code'],
                        'description' => $validation['details'],
                        'version' => date('Y'),
                    ]
                );

                $storedCloIds = [];

                $storedCloIds[] = $courseClos->id;

                if(isset($request->dynamicValues) && count($request->dynamicValues) > 0) {
                    // Iterate through the provided dynamic values
                    foreach ($request->dynamicValues as $dynamicValue) {
                        
                        $cloId = $dynamicValue['id'] ?? null;
                        $attributeCode = $dynamicValue['attributeCode'] ?? null;
                        $attributeDetails = $dynamicValue['attributeDetails'] ?? null;

                         // Use updateOrCreate to update if exists or create if not
                        $updatedClo = CourseClo::updateOrCreate(
                            [
                                'id' => $cloId
                            ],
                            [
                                'course_id' => $validation['courseId'],
                                'code' => $attributeCode,
                                'description' => $attributeDetails,
                                'version' => date('Y'),
                            ]
                        );

                        // Store CLO ids including newly created ones
                        $storedCloIds[] = $updatedClo->id;
                        }
                }

                // Delete any Course CLOs that were not updated
                $existingCloIds = CourseClo::where('course_id', $validation['courseId'])->pluck('id')->toArray();
                $cloIdsToDelete = array_diff($existingCloIds, $storedCloIds);

                foreach ($cloIdsToDelete as $id) {
                    $courseCLO = CourseClo::find($id);

                    if ($courseCLO) {
                        // Fetch the course contents that need to be updated
                        $courseContents = CourseContent::where('course_id', $courseCLO->course_id)->get();

                        foreach ($courseContents as $content) {
                            // Split the clo_ids into an array
                            $cloIds = explode(',', $content->clo_ids);

                            // Remove the clo_id to delete
                            $updatedCloIds = array_diff($cloIds, [$courseCLO->id]);

                            // Update the clo_ids field with the remaining clo_ids
                            $content->clo_ids = implode(',', $updatedCloIds);

                            // Save the updated course content
                            $content->save();
                        }
                        MappingCloPlo::where('clo_id', $courseCLO->id)->delete();
                        MappingCloStrategy::where('clo_id', $courseCLO->id)->delete();
                        
                        $courseCLO->delete();
                    }
                }


                return response()->json([
                    'status' => true,
                    'message' => 'Course CLO updated successfully',
                    'data' => $courseClos
                ], 200);

            }else {
                //delete all existing course clo
                $courseCLO = CourseClo::where('course_id', $validation['courseId'])->pluck('id')->toArray();

                CourseContent::where('course_id', $validation['courseId'])->delete();
                MappingCloPlo::whereIn('clo_id', $courseCLO)->delete();
                MappingCloStrategy::whereIn('clo_id', $courseCLO)->delete();

                CourseClo::where('course_id', $validation['courseId'])->delete();

                // Find the Course CLO
                $courseClo = new CourseClo();

                $courseClo->course_id = $validation['courseId'];
                $courseClo->code = $validation['code'];
                $courseClo->description = $validation['details'];
                $courseClo->version = date('Y');
                
                $courseClo->save();

                // Create or update multiple CourseClo records if dynamicValues are present
                if (isset($validation['dynamicValues'])) {
                    foreach ($validation['dynamicValues'] as $dynamicValue) {
                        $dynamicCourseClo = new CourseClo();
                        $dynamicCourseClo->code = $dynamicValue['attributeCode'];
                        $dynamicCourseClo->description = $dynamicValue['attributeDetails'];
                        $dynamicCourseClo->course_id = $validation['courseId'];
                        $dynamicCourseClo->version = date('Y');

                        // Save the dynamic Course CLO
                        $dynamicCourseClo->save();
                    }
                }

                return response()->json([
                    'status' => true,
                    'message' => 'Course CLO updated successfully',
                    'data' => $courseClo
                ], 200);
            }

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to update course CLO',
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseClo $courseCLO)
    {
        //
    }
}
