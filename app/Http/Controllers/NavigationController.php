<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\School;
use App\Models\PloTitle;
use App\Models\BnqfLevel;
use App\Models\CourseClo;
use App\Models\PeoDetail;
use App\Models\PloDetail;
use App\Models\CourseInfo;
use App\Models\CourseTerm;
use App\Models\CourseYear;
use App\Models\Discipline;
use App\Models\University;
use Illuminate\Http\Request;
use App\Models\CourseContent;
use App\Models\DegreeProgram;
use App\Models\MappingCloPlo;
use App\Models\DisciplineVision;
use App\Models\GraduateAttribute;
use App\Models\UniversityMission;
use App\Models\MappingCloStrategy;
use App\Models\CurriculumStructure;
use App\Models\DisciplineObjective;
use App\Models\CourseLearningMaterial;
use App\Models\DisciplineObjectiveTitle;
use App\Models\MappingDegreeTermDuration;

class NavigationController extends Controller
{
    public function showDropdown()
    {
        $schools = School::with('disciplines.degreePrograms')->get();
        return view('welcome', compact('schools'));
    }

    // public function discipline($id)
    // {
    //     $degreeProgram = DegreeProgram::find($id);

    //     if (!$degreeProgram) {
    //         abort(404);
    //     }

    //     $discipline = $degreeProgram->discipline;
    //     $schools = School::with('disciplines.degreePrograms')->get();
    //     $bnqfLevel = $degreeProgram->bnqfLevel;
    //     $iscedCode = $degreeProgram->iscedCode;
    //     $studymode = $degreeProgram->StudyMode;
    //     $languageofStudy = $degreeProgram->LanguageOfStudy;
    //     $ApplicableSession = $degreeProgram->ApplicableSession;
    //     $university = $degreeProgram->University;
    //     $missions = UniversityMission::where('university_id', $university->id)->get();
    //     $visions = $discipline->disciplineVisions;
    //     $disciplineMissions = $discipline->disciplineMissions;
    //     $objectives = DisciplineObjective::where('discipline_id', $discipline->id)->get();

    //     $objectivesTitles = collect();
    //     foreach ($objectives as $objective) {
    //         $titles = DisciplineObjectiveTitle::where('id', $objective->id)->get();
    //         $objectivesTitles->push($titles);
    //     }

    //     $graduateAttributes = GraduateAttribute::where('degree_program_id', $degreeProgram->id)->get();

    //     $domains = [];
    //     foreach ($graduateAttributes as $attribute) {
    //         $domainIds = explode(',', $attribute->domain_ids);
    //         $attributeDomains = Domain::whereIn('id', $domainIds)->get();
    //         $domains[$attribute->id] = $attributeDomains;
    //     }

    //     $plo = $degreeProgram->ploDetails;
    //     $peos = $degreeProgram->peoDetails;
    //     $courseInfos = $degreeProgram->courseInfos()->with('courseYear', 'courseTerm')->get();
    //     $courseYears = CourseYear::where('university_id', $degreeProgram->University->id)->get();
    //     $courseTerms = CourseTerm::where('university_id', $degreeProgram->University->id)->get();

    //     // dd($courseYears->toArray());
    //     $skillTypes = $plo->groupBy('skill_type');
    //     $uniqueSkillTypes = $skillTypes->keys();


    //     $courseInfos = $degreeProgram->courseInfos()->with('courseYear', 'courseTerm')->get();
    //     $courseClos = CourseClo::whereIn('course_id', $courseInfos->pluck('id'))
    //                             ->with(['mappingCloPlos.ploDetail'])
    //                             ->get();


    //     foreach ($courseClos as $clo) {
    //         $ploIds = collect(explode(',', $clo->mappingCloPlos->pluck('plo_ids')->implode(',')))
    //                     ->map(function ($id) {
    //                         return intval($id);
    //                     })
    //                     ->toArray();

    //         $clo->plos = PloDetail::whereIn('id', $ploIds)->get();
    //     }
    //     // dd($clo->plos->toArray());
    //     $peos2 = PeoDetail::where('degree_program_id', $degreeProgram->id)->with('ums')->get();
    //     // dd($peos2);
    //     $missions2 = UniversityMission::where('university_id', $university->id)->get();
    //     $ploTitles = PloDetail::where('degree_program_id', $degreeProgram->id)->get();
    //     $comparePlos= PloTitle::all();
    //     // dd($ploTitles);
    //     // dd($courseInfos);
    //     // $courseContents = CourseContent::where('course_id', $courseInfos->id)->get();
    //     $courseContents = CourseContent::all();
    //     $courseClos2 = CourseClo::all();
    //     $cloStrategies=MappingCloStrategy::all();
    //     // dd($courseClos2);
    //     $courseLearningMaterials=CourseLearningMaterial::all();
    //     $courseInfos2 = CourseInfo::all();


    //     return view('discipline', compact(
    //         'degreeProgram', 'discipline', 'schools', 'bnqfLevel', 'iscedCode', 'studymode',
    //         'languageofStudy', 'ApplicableSession', 'university', 'missions', 'visions', 'disciplineMissions',
    //         'objectives', 'titles', 'graduateAttributes', 'domains', 'plo', 'peos', 'courseInfos',
    //         'courseYears', 'courseTerms', 'skillTypes', 'uniqueSkillTypes', 'courseClos','peos2','missions2','ploTitles',
    //         'courseContents','comparePlos','courseClos2','cloStrategies','courseLearningMaterials','courseInfos2'
    //     ));
    // }

    public function discipline($id)
{
    $degreeProgram = DegreeProgram::find($id);

    if (!$degreeProgram) {
        abort(404);
    }

    $discipline = $degreeProgram->discipline;
    $schools = School::with('disciplines.degreePrograms')->get();
    $bnqfLevel = $degreeProgram->bnqfLevel;
    $iscedCode = $degreeProgram->iscedCode;
    $studymode = $degreeProgram->StudyMode;
    $languageofStudy = $degreeProgram->LanguageOfStudy;
    $ApplicableSession = $degreeProgram->ApplicableSession;
    $university = $degreeProgram->University;
    $missions = UniversityMission::where('university_id', $university->id)->get();
    $visions = $discipline->disciplineVisions;
    $disciplineMissions = $discipline->disciplineMissions;
    $objectives = DisciplineObjective::where('discipline_id', $discipline->id)->get();
    $curriculumStructure = CurriculumStructure::where('degree_program_id', $degreeProgram->id)->first();

    $objectivesTitles = collect();
    foreach ($objectives as $objective) {
        $titles = DisciplineObjectiveTitle::where('id', $objective->id)->get();
        $objectivesTitles->push($titles);
    }

    $graduateAttributes = GraduateAttribute::where('degree_program_id', $degreeProgram->id)->get();

    $domains = [];
    foreach ($graduateAttributes as $attribute) {
        $domainIds = explode(',', $attribute->domain_ids);
        $attributeDomains = Domain::whereIn('id', $domainIds)->get();
        $domains[$attribute->id] = $attributeDomains;
    }

    $plo = $degreeProgram->ploDetails;
    $peos = $degreeProgram->peoDetails;
    $courseInfos = $degreeProgram->courseInfos()->with('courseYear', 'courseTerm')->get();
    $courseYears = CourseYear::where('university_id', $degreeProgram->University->id)->get();
    $courseTerms = CourseTerm::where('university_id', $degreeProgram->University->id)->get();

    $skillTypes = $plo->groupBy('skill_type');
    $uniqueSkillTypes = $skillTypes->keys();

    $courseClos = CourseClo::whereIn('course_id', $courseInfos->pluck('id'))
                            ->with(['mappingCloPlos.ploDetail'])
                            ->get();

    foreach ($courseClos as $clo) {
        $ploIds = collect(explode(',', $clo->mappingCloPlos->pluck('plo_ids')->implode(',')))
                    ->map(function ($id) {
                        return intval($id);
                    })
                    ->toArray();

        $clo->plos = PloDetail::whereIn('id', $ploIds)->get();
    }

    $peos2 = PeoDetail::where('degree_program_id', $degreeProgram->id)->with('ums')->get();
    $missions2 = UniversityMission::where('university_id', $university->id)->get();
    $ploTitles = PloDetail::where('degree_program_id', $degreeProgram->id)->get();
    $comparePlos= PloTitle::all();

    $courseContents = CourseContent::all();
    $courseClos2 = CourseClo::all();
    $cloStrategies=MappingCloStrategy::all();
    $courseLearningMaterials=CourseLearningMaterial::all();
    $courseInfos2 = CourseInfo::all();

    $degreeProgramID = $id;
    $mappingDegreeTerms = MappingDegreeTermDuration::where('degree_program_id', $degreeProgramID)
        ->orderBy('term_duration_id')
        ->get(['value', 'unit', 'term_duration_id']);

    $AreaWiseCreditDistributions = CourseInfo::with('courseArea', 'courseType')
        ->where('degree_program_id', $degreeProgramID)
        ->get()
        ->groupBy('courseArea.name')
        ->map(function ($courses) {
            $area = $courses->first()->courseArea->name;
            $theoryCount = 0;
            $theoryCredits = 0;
            $sessionalCount = 0;
            $sessionalCredits = 0;

            foreach ($courses as $course) {
                if ($course->courseType->name == 'Theory') {
                    $theoryCount++;
                    $theoryCredits += $course->credit;
                } elseif ($course->courseType->name == 'Sessional') {
                    $sessionalCount++;
                    $sessionalCredits += $course->credit;
                }
            }

            $totalCredits = $theoryCredits + $sessionalCredits;

            return (object)[
                'area' => $area,
                'theoryCount' => $theoryCount,
                'theoryCredits' => $theoryCredits,
                'sessionalCount' => $sessionalCount,
                'sessionalCredits' => $sessionalCredits,
                'totalCredits' => $totalCredits,
            ];
        });

    $CategoryOfCourses = CourseInfo::with('courseArea', 'courseType')
        ->where('degree_program_id', $degreeProgramID)
        ->orderBy('course_area_id')
        ->get()
        ->groupBy('course_area_id');

    return view('discipline', compact(
        'degreeProgram', 'discipline', 'schools', 'bnqfLevel', 'iscedCode', 'studymode',
        'languageofStudy', 'ApplicableSession', 'university', 'missions', 'visions', 'disciplineMissions',
        'objectives', 'objectivesTitles', 'graduateAttributes', 'domains', 'plo', 'peos', 'courseInfos',
        'courseYears', 'courseTerms', 'skillTypes', 'uniqueSkillTypes', 'courseClos','peos2','missions2','ploTitles',
        'courseContents','comparePlos','courseClos2','cloStrategies','courseLearningMaterials','courseInfos2',
        'mappingDegreeTerms','AreaWiseCreditDistributions', 'CategoryOfCourses','curriculumStructure',
    ));
}



}
