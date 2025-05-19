<?php

namespace App\Http\Controllers;

use App\Models\CourseContent;
use App\Models\CourseThesis;
use Illuminate\Http\Request;

class CourseContentController extends Controller
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
        try{
            $validation = $request->validate([
                'courseId' => 'required|exists:course_infos,id',
                'details' => 'required|string',
                'cloIds*' => 'required|array',
                'cloIds.*' => 'exists:course_clos,id',
                'dynamicValues*' => 'nullable|array',
                'dynamicValues.*.attributeDetails' => 'nullable|string',
                'dynamicValues.*.dynamicCLOIds*' => 'nullable|array',
                'dynamicValues.*.dynamicCLOIds.*' => 'nullable|exists:course_clos,id',
            ]);

            $courseContent = new CourseContent();
            $courseContent->course_id = $validation['courseId'];
            $courseContent->description = $validation['details'];
            $courseContent->clo_ids = implode(',', $validation['cloIds']);
            $courseContent->version = date('Y');

            $courseContent->save();

            if(isset($validation['dynamicValues']) && count($validation['dynamicValues']) > 0){
                foreach($validation['dynamicValues'] as $dynamicValue){
                    $dynamicCourseContent = new CourseContent();
                    $dynamicCourseContent->course_id = $validation['courseId'];
                    $dynamicCourseContent->description = $dynamicValue['attributeDetails'];
                    $dynamicCourseContent->clo_ids = implode(',', $dynamicValue['dynamicCLOIds']);
                    $dynamicCourseContent->version = date('Y');

                    // Save the dynamic course content
                    $dynamicCourseContent->save();
                }        
            }

            return response()->json([
                'status' => true,
                'message' => 'Course Content saved successfully',
                'data' => $courseContent
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'error' => $e->getMessage()
            ]);
        }
    }

    /** 
     * Display the specified resource.
     */
    public function show(CourseContent $courseContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CourseContent $courseContent)
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
                'details' => 'required|string',
                'cloIds' => 'required|array', // Correct the key here
                'cloIds.*' => 'required|integer|exists:course_clos,id', // Validate each element
                'dynamicValues' => 'nullable|array',
                'dynamicValues.*.id' => 'nullable|exists:course_contents,id',
                'dynamicValues.*.attributeDetails' => 'nullable|string',
                'dynamicValues.*.dynamicCLOIds' => 'nullable|array',
                'dynamicValues.*.dynamicCLOIds.*' => 'nullable|exists:course_clos,id',
            ]);
        
            // Debugging output
            logger()->info('Validation Data:', $validation);
        
            $containFlag = $request->contentEditFlag ?? false;
        
            if ($containFlag) {
                $courseContent = CourseContent::find($id);
        
                $courseContent->update([
                    'description' => $validation['details'],
                    'clo_ids' => implode(',', $validation['cloIds']),
                ]);

                $storeContentIds = [];

                $storeContentIds[] = $courseContent->id;
        
                if (isset($validation['dynamicValues']) && count($validation['dynamicValues']) > 0) {
                    foreach ($validation['dynamicValues'] as $dynamicValue) {
                        $courseContentId = $dynamicValue['id'] ?? null;

                        $storeContentIds[] = $courseContentId;
        
                        $updateContent = CourseContent::updateOrCreate(
                            [
                                'id' => $courseContentId
                            ],
                            [
                                'course_id' => $validation['courseId'],
                                'description' => $dynamicValue['attributeDetails'],
                                'clo_ids' => isset($dynamicValue['dynamicCLOIds']) ? implode(',', $dynamicValue['dynamicCLOIds']) : null,
                                'version' => date('Y')
                            ]
                        );

                        $storeContentIds[] = $updateContent->id;
                    }
                }

                // Delete any Course Content that were not updated

                $existingcourseContent = CourseContent::where('course_id', $validation['courseId'])->pluck('id')->toArray();
                $contentIdDelete = array_diff($existingcourseContent, $storeContentIds);

                foreach ($contentIdDelete as $id) {
                    $courseContent = CourseContent::find($id);

                    if ($courseContent) {
                        $courseContent->delete();
                    }
                }
        
                return response()->json([
                    'status' => true,
                    'message' => 'Course Content updated successfully',
                    'data' => $courseContent
                ], 200);
        
            } else {
                // Delete all course content for the course
                CourseContent::where('course_id', $validation['courseId'])->delete();
        
                $courseContent = new CourseContent();
        
                $courseContent->course_id = $validation['courseId'];
                $courseContent->description = $validation['details'];
                $courseContent->clo_ids = implode(',', $validation['cloIds']);
                $courseContent->version = date('Y');
        
                $courseContent->save();
        
                if (isset($validation['dynamicValues']) && count($validation['dynamicValues']) > 0) {
                    foreach ($validation['dynamicValues'] as $dynamicValue) {
                        $dynamicCourseContent = new CourseContent();
                        $dynamicCourseContent->course_id = $validation['courseId'];
                        $dynamicCourseContent->description = $dynamicValue['attributeDetails'];
                        $dynamicCourseContent->clo_ids = isset($dynamicValue['dynamicCLOIds']) ? implode(',', $dynamicValue['dynamicCLOIds']) : null;
                        $dynamicCourseContent->version = date('Y');
        
                        // Save the dynamic course content
                        $dynamicCourseContent->save();
                    }
                }
        
                return response()->json([
                    'status' => true,
                    'message' => 'Course Content updated successfully',
                    'data' => $courseContent
                ], 200);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'error' => $e->getMessage()
            ]);
        }        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseContent $courseContent)
    {
        //
    }

    /**
     * Upload file
     */
    public function uploadFile(Request $request)
    {
        try {
            $validation = $request->validate([
                'file' => 'required|file',
                'courseId' => 'required|exists:course_infos,id'
            ]);

            if(!$validation['file']){
                return response()->json([
                    'status' => 'error',
                    'message' => 'No file uploaded'
                ]);
            }

            $file = $request->file('file');
            $fileName = date('ymd') . '.' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(base_path('public/global_assets/thesis_files'), $fileName);

            $courseThesis = CourseThesis::updateOrCreate(
                [
                    'course_id' => $validation['courseId']
                ],
                [
                    'course_id' => $validation['courseId'],
                    'linked_resource' => $fileName,
                    'version' => date('Y')
                ]
            );

            if(!$courseThesis){
                return response()->json([
                    'status' => 'error',
                    'message' => 'An error occurred while uploading the file. Please try again.'
                ]);
            }
            
            return response()->json([
                'status' => true,
                'message' => 'File uploaded successfully',
                'data' => $courseThesis
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred while uploading the file. Please try again.',
                'error' => $e->getMessage()
            ]);
        }
    }
}
