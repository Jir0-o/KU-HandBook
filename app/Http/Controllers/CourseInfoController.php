<?php

namespace App\Http\Controllers;

use App\Models\CourseArea;
use App\Models\CourseInfo;
use App\Models\DegreeProgram;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CourseClo;
use App\Models\CourseContent;
use App\Models\CourseCoordinator;
use App\Models\CourseLearningMaterial;
use App\Models\CourseStrategy;
use App\Models\CourseTerm;
use App\Models\CourseThesis;
use App\Models\CourseType;
use App\Models\CourseYear;
use App\Models\CurriculumStructure;
use App\Models\MappingCloPlo;
use App\Models\MappingCloStrategy;

class CourseInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {

            $user = User::find(Auth::user()->id);

            if($user->hasRole('Super Admin')){

                $courseInfos = CourseInfo::where('is_active', 1)->get();
                
            } elseif($user->hasRole('School Admin')) {
                
                //get degree program ids of the school
                $degreeProgramIds = DegreeProgram::where('school_id', $user->school_id)->pluck('id')->toArray();

                $courseInfos = CourseInfo::whereIn('degree_program_id', $degreeProgramIds)->with(['degreeProgram'])->get();

            } elseif($user->hasRole('Discipline Admin')) {
                    
                //get degree program ids of the discipline
                $degreeProgramIds = DegreeProgram::where('discipline_id', $user->discipline_id)->pluck('id')->toArray();

                $courseInfos = CourseInfo::whereIn('degree_program_id', $degreeProgramIds)->with(['degreeProgram'])->get();

            } elseif($user->hasRole('Program Admin')) {

            } elseif($user->hasRole('Course Admin')) {

                if($user->course_ids != null){
                    $courseIds = explode(',', $user->course_ids);
                    $courseInfos = CourseInfo::whereIn('id', $courseIds)->with(['degreeProgram'])->get();
                } else {
                    $courseInfos = [];
                }

            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Unauthorized',
                ]);
            }

            if($courseInfos->isEmpty()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Course Infos fetched Failed',
                    'data' => $courseInfos
                ], 500);
            }
            return response()->json([
                'status' => true,
                'message' => 'Course Infos fetched successfully',
                'data' => $courseInfos
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch Course Infos',
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        $user = User::find(Auth::user()->id);

        if($user->hasRole('Super Admin')){

            $courseInfos = CourseInfo::where('is_active', 1)->orderBy('id', 'desc')->get();
            
        } elseif($user->hasRole('School Admin')) {
            
            //get degree program ids of the school
            $degreeProgramIds = DegreeProgram::where('school_id', $user->school_id)->pluck('id')->toArray();

            $courseInfos = CourseInfo::whereIn('degree_program_id', $degreeProgramIds)->with(['degreeProgram'])->orderBy('id', 'desc')->get();

        } elseif($user->hasRole('Discipline Admin')) {
                
            //get degree program ids of the discipline
            $degreeProgramIds = DegreeProgram::where('discipline_id', $user->discipline_id)->pluck('id')->toArray();

            $courseInfos = CourseInfo::whereIn('degree_program_id', $degreeProgramIds)->with(['degreeProgram'])->orderBy('id', 'desc')->get();

        } elseif($user->hasRole('Program Admin')) {

        } elseif($user->hasRole('Course Admin')) {

            if($user->course_ids != null){
                $courseIds = explode(',', $user->course_ids);
                $courseInfos = CourseInfo::whereIn('id', $courseIds)->with(['degreeProgram'])->orderBy('id', 'desc')->get();
            } else {
                $courseInfos = [];
            }

        } else {
            
        }

        return view('backend.courses.course-list', compact('courseInfos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $validation = $request->validate([
                'offeredYear' => 'required|exists:course_years,id',
                'term' => 'required|exists:course_terms,id',
                'rationale' => 'required|string',
                'credit' => 'required|numeric',
                'contactHours' => 'required|numeric',
                'degreeProgram' => 'required|exists:degree_programs,id',
                'courseCode' => 'required|string',
                'courseTitle' => 'required|string',
                'courseStatus' => 'required|string',
                'courseArea' => 'required|exists:course_areas,id',
                'courseType' => 'required|exists:course_types,id',
                'preRequisite*' => 'nullable|array',
                'preRequisite.*' => 'exists:course_infos,id'
            ]);

            $courseInfo = new CourseInfo();
            $courseInfo->name = $validation['courseTitle'];
            $courseInfo->code = $validation['courseCode'];
            $courseInfo->description = $validation['rationale'];
            $courseInfo->status = $validation['courseStatus'];
            $courseInfo->credit = $validation['credit'];
            $courseInfo->total_hours = $validation['contactHours'];
            $courseInfo->degree_program_id = $validation['degreeProgram'];
            $courseInfo->course_area_id = $validation['courseArea'];
            $courseInfo->course_type_id = $validation['courseType'];
            $courseInfo->year_id = $validation['offeredYear'];
            $courseInfo->term_id = $validation['term'];
            $courseInfo->version = date('Y');

            if(isset($validation['preRequisite'])) {
                $courseInfo->pre_requisite = implode(',', $validation['preRequisite']);
            }

            $courseInfo->save();

            if($courseInfo->save()){
                $user = User::find(Auth::user()->id);

                if($user->hasRole('Super Admin')){

                    
                } elseif($user->hasRole('School Admin')) {
                    
                } elseif($user->hasRole('Discipline Admin')) {
                    
                } elseif($user->hasRole('Program Admin')) {

                } elseif($user->hasRole('Course Admin')) {
                    $updateUser = new User();
                    
                    $updateUser->course_ids = implode(',', $courseInfo->id);
                    
                } else {
                    return response()->json([
                        'status' => false,
                        'message' => 'Unauthorized',
                    ]);
                }
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Failed to create Course Info',
                ]);
            }

            return response()->json([
                'status' => true,
                'message' => 'Course Info created successfully',
                'data' => $courseInfo
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create Course Info',
                'error' => $e->getMessage()
            ]);
        }
    }
    
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try{
            $course = CourseInfo::with(
                [
                    'courseClo',
                    'courseContent',
                    'courseLearningMaterials',
                    'courseCoordinator',
                    'courseThesis',
                ])->findOrFail($id);
    
                if(!$course) {
                    return response()->json([
                        'status' => false,
                        'message' => 'Course Info fetched Failed',
                        'data' => $course
                    ], 500);
                }
    
                //mapping clo plo
                $cloIds = CourseClo::where('course_id', $id)->pluck('id')->toArray();

                $mappingCloPlo = MappingCloPlo::whereIn('clo_id', $cloIds)->get();
    
                if($mappingCloPlo->isEmpty()) {
                    return response()->json([
                        'status' => false,
                        'message' => 'Mapping Clo Plo fetched Failed',
                        'data' => $mappingCloPlo
                    ], 500);
                }
    
                //mapping clo strategy
                $mappingCloStrategy = MappingCloStrategy::whereIn('clo_id', $cloIds)->get();
    
                if($mappingCloStrategy->isEmpty()) {
                    return response()->json([
                        'status' => false,
                        'message' => 'Mapping Clo Strategy fetched Failed',
                        'data' => $mappingCloStrategy
                    ], 500);
                }
            
                return response()->json([
                    'status' => true,
                    'message' => 'Course Info fetched successfully',
                    'data' => $course,
                    'mappingCloPlo' => $mappingCloPlo,
                    'mappingCloStrategy' => $mappingCloStrategy
                ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch Course Info',
                'error' => $e->getMessage()
            ]);
        }

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('backend.courseEdit.course');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $validation = $request->validate([
                'offeredYear' => 'required|exists:course_years,id',
                'term' => 'required|exists:course_terms,id',
                'rationale' => 'required|string',
                'credit' => 'required|numeric',
                'contactHours' => 'required|numeric',
                'degreeProgram' => 'required|exists:degree_programs,id',
                'courseCode' => 'required|string',
                'courseTitle' => 'required|string',
                'courseStatus' => 'required|string',
                'courseArea' => 'required|exists:course_areas,id',
                'courseType' => 'required|exists:course_types,id',
                'preRequisite*' => 'nullable|array',
                'preRequisite.*' => 'exists:course_infos,id'
            ]);

            $courseInfo = CourseInfo::findOrFail($id);
            
            $courseInfo->name = $validation['courseTitle'];
            $courseInfo->code = $validation['courseCode'];
            $courseInfo->description = $validation['rationale'];
            $courseInfo->status = $validation['courseStatus'];
            $courseInfo->credit = $validation['credit'];
            $courseInfo->total_hours = $validation['contactHours'];
            $courseInfo->degree_program_id = $validation['degreeProgram'];
            $courseInfo->course_area_id = $validation['courseArea'];
            $courseInfo->course_type_id = $validation['courseType'];
            $courseInfo->year_id = $validation['offeredYear'];
            $courseInfo->term_id = $validation['term'];
            $courseInfo->version = date('Y');

            if(isset($validation['preRequisite'])) {
                $courseInfo->pre_requisite = implode(',', $validation['preRequisite']);
            }

            $courseInfo->update();

            return response()->json([
                'status' => true,
                'message' => 'Course Info updated successfully',
                'data' => $courseInfo
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to update Course Info',
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $course = CourseInfo::findOrFail($id);
            
            if($course){
                CourseCoordinator::where('course_id', $course->id)->delete();
                CourseLearningMaterial::where('course_id', $course->id)->delete();

                $courseClo = CourseClo::where('course_id', $course->id)->pluck('id');

                if($courseClo) {
                    MappingCloStrategy::whereIn('clo_id', $courseClo)->delete();
                    MappingCloPlo::whereIn('clo_id', $courseClo)->delete();
                }
                $getContansId = CourseContent::where('course_id', $course->id)->pluck('id');

                CourseContent::whereIn('id', $getContansId)->delete();
                CourseClo::where('course_id', $course->id)->delete();

                $thesis = CourseThesis::where('course_id', $course->id)->pluck('id');

                if($thesis) {
                    CourseThesis::whereIn('id', $thesis)->delete();
                }
                $course->delete();
            }

            return response()->json([
                'status' => true,
                'message' => 'Course Info deleted successfully',
                'data' => $course
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete Course Info',
                'error' => $e->getMessage()
            ]);
        }
    }
}
