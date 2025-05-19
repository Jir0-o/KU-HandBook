<?php

namespace App\Http\Controllers;

use App\Models\CourseClo;
use App\Models\CourseContent;
use App\Models\CourseCoordinator;
use App\Models\CourseInfo;
use App\Models\CourseLearningMaterial;
use App\Models\CourseStrategy;
use App\Models\CourseThesis;
use App\Models\CurriculumStructure;
use App\Models\DegreeProgram;
use App\Models\Domain;

use App\Models\Discipline;
use App\Models\DisciplineMission;
use App\Models\DisciplineMissionTitle;
use App\Models\DisciplineObjective;
use App\Models\DisciplineObjectiveTitle;
use App\Models\DisciplineVision;
use App\Models\GraduateAttribute;
use App\Models\MappingCloPlo;
use App\Models\MappingCloStrategy;
use App\Models\MappingPeoPlo;
use App\Models\MappingPeoUm;
use App\Models\PeoDetail;
use App\Models\PloDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DegreeProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {

            $user = User::find(Auth::user()->id);

            if($user->hasRole('Super Admin')){

                $degreePrograms = DegreeProgram::where('is_active', 1)->with(['discipline', 'school'])->get();

                if($degreePrograms->isEmpty())
                    return response()->json([
                        'status' => false,
                        'message' => 'No Degree Programs found',
                    ]
                );
            } elseif($user->hasRole('School Admin')) {
                $degreePrograms = DegreeProgram::where('school_id', $user->school_id)->with(['discipline', 'school'])->get();

                if($degreePrograms->isEmpty())
                    return response()->json([
                        'status' => false,
                        'message' => 'No Degree Programs found',
                    ]
                );
            } elseif($user->hasRole('Discipline Admin')) {
                $degreePrograms = DegreeProgram::where('discipline_id', $user->discipline_id)->with(['discipline', 'school'])->get();

                if($degreePrograms->isEmpty())
                    return response()->json([
                        'status' => false,
                        'message' => 'No Degree Programs found',
                    ]
                );
            } elseif($user->hasRole('Program Admin')) {

                if($user->program_ids != null){
                    $programIds = explode(',', $user->program_ids);

                    $degreePrograms = DegreeProgram::whereIn('id', $programIds)->with(['discipline', 'school'])->get();

                } else {
                    $degreePrograms = [];
                }

                if($degreePrograms->isEmpty())
                    return response()->json([
                        'status' => false,
                        'message' => 'No Degree Programs found',
                    ]
                );
            } elseif($user->hasRole('Course Admin')) {
                $degreePrograms = DegreeProgram::where('school_id', $user->school_id)->with(['discipline', 'school'])->get();

                if($degreePrograms->isEmpty())
                    return response()->json([
                        'status' => false,
                        'message' => 'No Degree Programs found',
                    ]
                );

            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Unauthorized',
                ]);
            }

            return response()->json([
                'status' => true,
                'message' => 'Degree Programs fetched successfully',
                'data' => $degreePrograms
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch Degree Programs',
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Display a listing of the resource for domain.
     */
    public function domain()
    {
        try {
            $domain = Domain::where('is_active', 1)->get();

            if($domain->isEmpty()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Domain fetched Failed',
                    'data' => $domain
                ], 500);
            }

            return response()->json([
                'status' => true,
                'message' => 'Domain fetched successfully',
                'data' => $domain
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch Domain',
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::find(Auth::user()->id);

        if($user->hasRole('Super Admin')){

            $degreePrograms = DegreeProgram::where('is_active', 1)->with(['discipline', 'school'])->orderBy('id', 'desc')->get();

        } elseif($user->hasRole('School Admin')) {
            $degreePrograms = DegreeProgram::where('school_id', $user->school_id)->with(['discipline', 'school'])->orderBy('id', 'desc')->get();

            
        } elseif($user->hasRole('Discipline Admin')) {
            $degreePrograms = DegreeProgram::where('discipline_id', $user->discipline_id)->with(['discipline', 'school'])->orderBy('id', 'desc')->get();

            
        } elseif($user->hasRole('Program Admin')) {

            if($user->program_ids != null){
                $programIds = explode(',', $user->program_ids);

                $degreePrograms = DegreeProgram::whereIn('id', $programIds)->with(['discipline', 'school'])->orderBy('id', 'desc')->get();

            } else {
                $degreePrograms = [];
            }

        } elseif($user->hasRole('Course Admin')) {
            
        } else {
           
        }
            
        return view('backend.programs.program-list', compact('degreePrograms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validation = $request->validate([
                'institution' => 'required|exists:universities,id',
                'name' => 'required|string',
                'code' => 'required',
                'school' => 'required|exists:schools,id',
                'discipline_name' => 'required|exists:disciplines,id',
                'location' => 'required|exists:locations,id',
                'bnqf' => 'required',
                'isced' => 'required',
                'mos' => 'required',
                'los' => 'required',
                'as' => 'required',
                'description_program' => 'required',
                'major_rogram' => 'nullable',

                'mission_title' => 'required|string',
                'mission_code' => 'required|string',
                'discipline_Mission' => 'required|string',

                'objective_title' => 'required|string',
                'objective_code' => 'required|string',
                'discipline_objective' => 'required|string',

                'discipline_title' => 'required|string',
                'discipline_code' => 'required|string',
                'discipline_vision' => 'required|string',

                'dynamicValuesForMission*' => 'nullable|array',
                'dynamicValuesForMission.*.attributeCode' => 'nullable|string',
                'dynamicValuesForMission.*.attributeDetails' => 'nullable|string',

                'dynamicValuesForObjective*' => 'nullable|array',
                'dynamicValuesForObjective.*.attributeCode' => 'nullable|string',
                'dynamicValuesForObjective.*.attributeDetails' => 'nullable|string',
            ]);

            $degreeProgram = new DegreeProgram();
            $degreeProgram->university_id = $validation['institution'];
            $degreeProgram->degree = $validation['name'];
            $degreeProgram->degree_code = $validation['code'];
            $degreeProgram->school_id = $validation['school'];
            $degreeProgram->discipline_id = $validation['discipline_name'];
            $degreeProgram->location_id = $validation['location'];
            $degreeProgram->bnqf_level_id = $validation['bnqf'];
            $degreeProgram->isced_id = $validation['isced'];
            $degreeProgram->study_mode_id = $validation['mos'];
            $degreeProgram->language_id = $validation['los'];
            $degreeProgram->applicable_session_id = $validation['as'];
            $degreeProgram->program_description = $validation['description_program'];
            $degreeProgram->major = $validation['major_rogram'];
            $degreeProgram->version = date('Y');

            $degreeProgram->save();

            $disciplineVision = new DisciplineVision();
            $disciplineVision->title = $validation['discipline_title'];
            $disciplineVision->code = $validation['discipline_code'];
            $disciplineVision->description = $validation['discipline_vision'];
            $disciplineVision->discipline_id = $validation['discipline_name'];
            $disciplineVision->version = date('Y');

            $disciplineVision->save();

            $missionTitle = new DisciplineMissionTitle();
            $missionTitle->name = $validation['mission_title'];
            $missionTitle->version = date('Y');

            $missionTitle->save();

            $mission = new DisciplineMission();
            $mission->code = $validation['mission_code'];
            $mission->description = $validation['discipline_Mission'];
            $mission->discipline_mission_title_id = $missionTitle->id;
            $mission->discipline_id = $validation['discipline_name'];
            $mission->version = date('Y');

            $mission->save();

            if (isset($validation['dynamicValuesForMission'])) {
                foreach ($validation['dynamicValuesForMission'] as $dynamicValue) {
                    $dynamicMission = new DisciplineMission();
                    $dynamicMission->code = $dynamicValue['attributeCode'];
                    $dynamicMission->description = $dynamicValue['attributeDetails'];
                    $dynamicMission->discipline_mission_title_id = $missionTitle->id;
                    $dynamicMission->discipline_id = $validation['discipline_name'];
                    $dynamicMission->version = date('Y');

                    $dynamicMission->save();
                }
            }

            $objectiveTitle = new DisciplineObjectiveTitle();
            $objectiveTitle->name = $validation['objective_title'];
            $objectiveTitle->version = date('Y');

            $objectiveTitle->save();

            $objective = new DisciplineObjective();
            $objective->code = $validation['objective_code'];
            $objective->description = $validation['discipline_objective'];
            $objective->discipline_objective_title_id = $objectiveTitle->id;
            $objective->discipline_id = $validation['discipline_name'];
            $objective->version = date('Y');

            $objective->save();

            if (isset($validation['dynamicValuesForObjective'])) {
                foreach ($validation['dynamicValuesForObjective'] as $dynamicValue) {
                    $dynamicObjective = new DisciplineObjective();
                    $dynamicObjective->code = $dynamicValue['attributeCode'];
                    $dynamicObjective->description = $dynamicValue['attributeDetails'];
                    $dynamicObjective->discipline_objective_title_id = $objectiveTitle->id;
                    $dynamicObjective->discipline_id = $validation['discipline_name'];
                    $dynamicObjective->version = date('Y');

                    $dynamicObjective->save();
                }
            }

            if($degreeProgram->save()){
                $user = User::find(Auth::user()->id);

                if($user->hasRole('Super Admin')){

                    
                } elseif($user->hasRole('School Admin')) {
                    
                } elseif($user->hasRole('Discipline Admin')) {
                    
                } elseif($user->hasRole('Program Admin')) {
                    $updateUser = new User();
                    
                    $updateUser->program_ids = implode(',', $degreeProgram->id);

                } elseif($user->hasRole('Course Admin')) {
                    
                } else {
                    return response()->json([
                        'status' => false,
                        'message' => 'Unauthorized',
                    ]);
                }
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Failed to create Degree Program',
                ]);
            }

            return response()->json([
                'status' => true,
                'message' => 'Degree Program created successfully',
                'data' => $degreeProgram
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to create Degree Program',
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
            $degreeProgram = DegreeProgram::with(
                [
                    'discipline.disciplineMissions.DisciplineMissionTitle',
                    'discipline.disciplineVisions',
                    'discipline.disciplineObjectives.disciplineObjectiveTitle',
                    'graduateAttributes.graduateAttributeTitle',
                    'peoDetails.peoTitle',
                    'ploDetails.plotitle',
                    'curriculumStructures',
                    'mappingDegreeTermDurations.termDuration',
                ])->find($id);

                $poeIds = PeoDetail::where('degree_program_id', $id)->pluck('id');
                $PloIds = PloDetail::where('degree_program_id', $id)->pluck('id');

                $mappingPeoPlo = MappingPeoPlo::whereIn('plo_id', $PloIds)->get();

                $mappingPeoUm = MappingPeoUm::whereIn('peo_id', $poeIds)->get();

            if (!$degreeProgram) {
                return response()->json([
                    'status' => false,
                    'message' => 'Degree Program not found',
                ], 404);
            }

            return response()->json([
                'status' => true,
                'message' => 'Degree Program fetched successfully',
                'data' => $degreeProgram,
                'mappingPeoPlo' => $mappingPeoPlo,
                'mappingPeoUm' => $mappingPeoUm,
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to fetch Degree Program',
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('backend.programEdit.program-add');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $validation = $request->validate([
                'institution' => 'required|exists:universities,id',
                'name' => 'required|string',
                'code' => 'required',
                'school' => 'required|exists:schools,id',
                'discipline_name' => 'required|exists:disciplines,id',
                'location' => 'required|exists:locations,id',
                'bnqf' => 'required',
                'isced' => 'required',
                'mos' => 'required',
                'los' => 'required',
                'as' => 'required',
                'description_program' => 'required',
                'major_rogram' => 'nullable',

                'mission_title' => 'required|string',
                'mission_code' => 'required|string',
                'discipline_Mission' => 'required|string',

                'objective_title' => 'required|string',
                'objective_code' => 'required|string',
                'discipline_objective' => 'required|string',

                'discipline_title' => 'required|string',
                'discipline_code' => 'required|string',
                'discipline_vision' => 'required|string',

                'dynamicValuesForMission*' => 'nullable|array',
                'dynamicValuesForMission.*.attributeCode' => 'nullable|string',
                'dynamicValuesForMission.*.attributeDetails' => 'nullable|string',

                'dynamicValuesForObjective*' => 'nullable|array',
                'dynamicValuesForObjective.*.attributeCode' => 'nullable|string',
                'dynamicValuesForObjective.*.attributeDetails' => 'nullable|string',
            ]);

            $oldDiscipline = DegreeProgram::find($id);

            if ($oldDiscipline) {
                //delete all existing discipline vision
                DisciplineVision::where('discipline_id', $oldDiscipline->discipline_id)->delete();

                $oldDisciplineId = $oldDiscipline->discipline_id;

                // Check if a DisciplineMission record exists for the given discipline_id
                $oldDisciplineMission = DisciplineMission::where('discipline_id', $oldDisciplineId)->first();

                if ($oldDisciplineMission) {
                    $DisciplineMissionTitleTId = $oldDisciplineMission->discipline_mission_title_id;

                    // Check if a DisciplineMissionTitle record exists for the given discipline_mission_title_id
                    $oldDisciplineMissionTitle = DisciplineMissionTitle::find($DisciplineMissionTitleTId);

                    if ($oldDisciplineMissionTitle) {
                        // Delete all existing DisciplineMission records for the given discipline_id
                        DisciplineMission::where('discipline_id', $oldDisciplineId)->delete();
                    }
                    // Delete the existing DisciplineMissionTitle record
                    $oldDisciplineMissionTitle->delete();
                }

                // Check if a DisciplineObjective record exists for the given discipline_id
                $oldDisciplineObjective = DisciplineObjective::where('discipline_id', $oldDisciplineId)->first();

                if ($oldDisciplineObjective) {
                    $DisciplineObjectiveTitleId = $oldDisciplineObjective->discipline_objective_title_id;

                    // Check if a DisciplineObjectiveTitle record exists for the given discipline_objective_title_id
                    $oldDisciplineObjectiveTitle = DisciplineObjectiveTitle::find($DisciplineObjectiveTitleId);

                    if ($oldDisciplineObjectiveTitle) {
                        // Delete all existing DisciplineObjective records for the given discipline_id
                        DisciplineObjective::where('discipline_id', $oldDisciplineId)->delete();
                    }
                    // Delete the existing DisciplineObjectiveTitle record
                    $oldDisciplineObjectiveTitle->delete();
                }
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Degree Program not found',
                ], 404);
            }

            // Update the degree program with new data
            $oldDiscipline->university_id = $validation['institution'];
            $oldDiscipline->degree = $validation['name'];
            $oldDiscipline->degree_code = $validation['code'];
            $oldDiscipline->school_id = $validation['school'];
            $oldDiscipline->discipline_id = $validation['discipline_name'];
            $oldDiscipline->location_id = $validation['location'];
            $oldDiscipline->bnqf_level_id = $validation['bnqf'];
            $oldDiscipline->isced_id = $validation['isced'];
            $oldDiscipline->study_mode_id = $validation['mos'];
            $oldDiscipline->language_id = $validation['los'];
            $oldDiscipline->applicable_session_id = $validation['as'];
            $oldDiscipline->program_description = $validation['description_program'];
            $oldDiscipline->major = $validation['major_rogram'];
            $oldDiscipline->version = date('Y');

            $oldDiscipline->save();

            $disciplineVision = new DisciplineVision();
            $disciplineVision->title = $validation['discipline_title'];
            $disciplineVision->code = $validation['discipline_code'];
            $disciplineVision->description = $validation['discipline_vision'];
            $disciplineVision->discipline_id = $validation['discipline_name'];
            $disciplineVision->version = date('Y');

            $disciplineVision->save();

            $missionTitle = new DisciplineMissionTitle();
            $missionTitle->name = $validation['mission_title'];
            $missionTitle->version = date('Y');

            $missionTitle->save();

            $mission = new DisciplineMission();
            $mission->code = $validation['mission_code'];
            $mission->description = $validation['discipline_Mission'];
            $mission->discipline_mission_title_id = $missionTitle->id;
            $mission->discipline_id = $validation['discipline_name'];
            $mission->version = date('Y');

            $mission->save();

            if (isset($validation['dynamicValuesForMission'])) {
                foreach ($validation['dynamicValuesForMission'] as $dynamicValue) {
                    $dynamicMission = new DisciplineMission();
                    $dynamicMission->code = $dynamicValue['attributeCode'];
                    $dynamicMission->description = $dynamicValue['attributeDetails'];
                    $dynamicMission->discipline_mission_title_id = $missionTitle->id;
                    $dynamicMission->discipline_id = $validation['discipline_name'];
                    $dynamicMission->version = date('Y');

                    $dynamicMission->save();
                }
            }

            $objectiveTitle = new DisciplineObjectiveTitle();
            $objectiveTitle->name = $validation['objective_title'];
            $objectiveTitle->version = date('Y');

            $objectiveTitle->save();

            $objective = new DisciplineObjective();
            $objective->code = $validation['objective_code'];
            $objective->description = $validation['discipline_objective'];
            $objective->discipline_objective_title_id = $objectiveTitle->id;
            $objective->discipline_id = $validation['discipline_name'];
            $objective->version = date('Y');

            $objective->save();

            if (isset($validation['dynamicValuesForObjective'])) {
                foreach ($validation['dynamicValuesForObjective'] as $dynamicValue) {
                    $dynamicObjective = new DisciplineObjective();
                    $dynamicObjective->code = $dynamicValue['attributeCode'];
                    $dynamicObjective->description = $dynamicValue['attributeDetails'];
                    $dynamicObjective->discipline_objective_title_id = $objectiveTitle->id;
                    $dynamicObjective->discipline_id = $validation['discipline_name'];
                    $dynamicObjective->version = date('Y');

                    $dynamicObjective->save();
                }
            }

            return response()->json([
                'status' => true,
                'message' => 'Degree Program updated successfully',
                'data' => $oldDiscipline
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to update Degree Program',
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
            $degreeProgram = DegreeProgram::find($id);

            if ($degreeProgram) {

                $course = CourseInfo::where('degree_program_id', $degreeProgram->id)->pluck('id');

                if($course) {
                    CourseCoordinator::whereIn('course_id', $course)->delete();
                    CourseLearningMaterial::whereIn('course_id', $course)->delete();

                    $courseClo = CourseClo::whereIn('course_id', $course)->pluck('id');

                    if($courseClo) {
                        MappingCloStrategy::whereIn('clo_id', $courseClo)->delete();
                        MappingCloPlo::whereIn('clo_id', $courseClo)->delete();
                    }
                    $getContansId = CourseContent::where('course_id', $course->id)->pluck('id');

                    CourseContent::whereIn('id', $getContansId)->delete();
                    
                    CourseClo::whereIn('course_id', $course)->delete();

                    $thesis = CourseThesis::whereIn('course_id', $course)->pluck('id');

                    if($thesis) {
                        CourseThesis::whereIn('id', $thesis)->delete();
                    }
                    CourseInfo::whereIn('id', $course)->delete();
                }
                CurriculumStructure::where('degree_program_id', $degreeProgram->id)->delete();

                $PeoDetail = PeoDetail::where('degree_program_id', $degreeProgram->id)->pluck('id');
                MappingPeoPlo::whereIn('peo_id', $PeoDetail)->delete();

                $PloDetail = PloDetail::where('degree_program_id', $degreeProgram->id)->pluck('id');
                MappingPeoUm::whereIn('peo_id', $PeoDetail)->delete();

                PloDetail::where('degree_program_id', $degreeProgram->id)->delete();
                PeoDetail::where('degree_program_id', $degreeProgram->id)->delete();
                GraduateAttribute::where('degree_program_id', $degreeProgram->id)->delete();

                $degreeProgram->delete();

                return response()->json([
                    'status' => true,
                    'message' => 'Degree Program deleted successfully',
                ], 200);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Degree Program not found',
                ], 404);
            }

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to delete Degree Program',
                'error' => $e->getMessage()
            ]);
        }
    }
}