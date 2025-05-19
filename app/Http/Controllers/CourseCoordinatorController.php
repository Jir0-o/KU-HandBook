<?php

namespace App\Http\Controllers;

use App\Models\CourseCoordinator;
use Illuminate\Http\Request;

class CourseCoordinatorController extends Controller
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
                'courseId' => 'required|exists:course_infos,id',
                'coordinator_name' => 'required|string',
                'coordinator_profile' => 'required|string',
                'dynamicValues*' => 'nullable|array',
                'dynamicValues.*.attributeDetails' => 'nullable|string',
                'dynamicValues.*.attributeName' => 'nullable|string',
            ]);

            $courseCoordinator = new CourseCoordinator();
            $courseCoordinator->course_id = $validation['courseId'];
            $courseCoordinator->name = $validation['coordinator_name'];
            $courseCoordinator->details = $validation['coordinator_profile'];
            $courseCoordinator->version = date('Y');

            $courseCoordinator->save();

            if (isset($validation['dynamicValues'])) {
                foreach ($validation['dynamicValues'] as $dynamicValue) {
                    $dynamicCourseCoordinator = new CourseCoordinator();
                    $dynamicCourseCoordinator->course_id = $validation['courseId'];
                    $dynamicCourseCoordinator->name = $dynamicValue['attributeName'];
                    $dynamicCourseCoordinator->details = $dynamicValue['attributeDetails'];
                    $dynamicCourseCoordinator->version = date('Y');

                    // Save the dynamic course coordinator
                    $dynamicCourseCoordinator->save();
                }
            }

            return response()->json([
                'status' => true,
                'message' => 'Course coordinator created successfully',
                'data' => $courseCoordinator,
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to create course coordinator',
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(CourseCoordinator $courseCoordinator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CourseCoordinator $courseCoordinator)
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
                'coordinator_name' => 'required|string',
                'coordinator_profile' => 'required|string',
                'dynamicValues*' => 'nullable|array',
                'dynamicValues.*.id' => 'nullable|exists:course_coordinators,id',
                'dynamicValues.*.attributeName' => 'nullable|string',
                'dynamicValues.*.attributeDetails' => 'nullable|string',
            ]);

            if($request->coordinatorEditFlag == true) {

                $courseCoordinator = CourseCoordinator::find($id);

                $courseCoordinator->update([
                    'name' => $validation['coordinator_name'],
                    'details' => $validation['coordinator_profile'],
                ]);

                $storeCourseCoordinator = [];

                $storeCourseCoordinator[] = $courseCoordinator->id;

                if (isset($validation['dynamicValues']) && count($validation['dynamicValues']) > 0) {
                    foreach ($validation['dynamicValues'] as $dynamicValue) {

                        $dynamicCourseCoordinatorId = $dynamicValue['id'] ?? null;

                        $updateDynamicCourseCoordinator = CourseCoordinator::updateOrCreate(
                            [
                                'id' => $dynamicCourseCoordinatorId,
                            ],
                            [
                                'course_id' => $validation['courseId'],
                                'name' => $dynamicValue['attributeName'],
                                'details' => $dynamicValue['attributeDetails'],
                                'version' => date('Y'),
                            ]
                        );

                        $storeCourseCoordinator[] = $updateDynamicCourseCoordinator->id;
                    }
                }

                // Delete the course learning material that are not in the courseCoordinator
                $existingcourseCoordinator = CourseCoordinator::where('course_id', $validation['courseId'])->pluck('id')->toArray();

                $deletecourseCoordinator = array_diff($existingcourseCoordinator, $storeCourseCoordinator);

                foreach ($deletecourseCoordinator as $id) {

                    $Coordinator = CourseCoordinator::find($id);

                    if($Coordinator) {
                        $Coordinator->delete();
                    }
                }

                return response()->json([
                    'status' => true,
                    'message' => 'Course coordinator updated successfully',
                    'data' => $courseCoordinator,
                ], 200);
            } else {
                //delete all existing course coordinators
                CourseCoordinator::where('course_id', $validation['courseId'])->delete();

                $courseCoordinator = new CourseCoordinator();
                $courseCoordinator->course_id = $validation['courseId'];
                $courseCoordinator->name = $validation['coordinator_name'];
                $courseCoordinator->details = $validation['coordinator_profile'];
                $courseCoordinator->version = date('Y');

                $courseCoordinator->save();

                if (isset($validation['dynamicValues'])) {
                    foreach ($validation['dynamicValues'] as $dynamicValue) {
                        $dynamicCourseCoordinator = new CourseCoordinator();
                        $dynamicCourseCoordinator->course_id = $validation['courseId'];
                        $dynamicCourseCoordinator->name = $dynamicValue['attributeName'];
                        $dynamicCourseCoordinator->details = $dynamicValue['attributeDetails'];
                        $dynamicCourseCoordinator->version = date('Y');

                        // Save the dynamic course coordinator
                        $dynamicCourseCoordinator->save();
                    }
                }

                return response()->json([
                    'status' => true,
                    'message' => 'Course coordinator updated successfully',
                ], 200);
            }

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to update course coordinator',
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseCoordinator $courseCoordinator)
    {
        //
    }
}
