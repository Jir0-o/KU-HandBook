@php
    use App\Models\CourseClo;
    use App\Models\MappingCloPlo;
@endphp


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outcome-Based Curriculum - Part-A</title>
    <style>
        body {
            padding: 10%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        .section-title {
            font-weight: bold;
            margin-top: 20px;
        }

        .mission-table {
            width: 100%;
            border-collapse: collapse;
        }

        .mission-table,
        .mission-table th,
        .mission-table td {
            border: 1px solid black;
        }

        .mission-table th,
        .mission-table td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>

<body>
    <center>
        <div class="container mt-2">
            <h1>OUTCOME-BASED CURRICULUM</h1>
            <h1>for</h1>
            <h1>{{ $degreeProgram->degree }}</h1>
            <h1>{{ $degreeProgram->version }}</h1>
        </div>
        <div style="background-color: #FBD502; padding:5%; margin-top:5%;" class="container">
            <img src="{{ asset('global_assets/images/logo.webp') }}" alt="IGSK Logo">
            <h1>{{ $discipline->name }}</h1>
            <h1>Khulna University, Khulna 9208<br>Bangladesh</h1>
        </div>
        <div class="container mt-2">
            <h1>OUTCOME-BASED CURRICULUM</h1>
            <h1>for</h1>
            <h1>{{ $degreeProgram->degree }}</h1>
            <h1>{{ $degreeProgram->version }}</h1>
            <img style="margin-top: 7%;" src="{{ asset('global_assets/images/logo.webp') }}" alt="IGSK Logo">
            <h1>{{ $discipline->name }}</h1>
            <h1>Khulna University</h1>
            <h1>Date: July 2022</h1>
        </div>
        <div
            style="background-color: #FFF176; height: 40vh; display: flex; justify-content: center; align-items: center; text-align: center; position: relative;">
            <div>
                <h1 style="color: #8A8A8A; font-size: 3em; margin: 0;">OUTCOME-BASED</h1>
                <h1 style="color: #8A8A8A; font-size: 3em; margin: 0;">CURRICULUM</h1>
            </div>
            <div style="position: absolute; bottom: 20px; right: 20px;">
                <h1 style="color: #FFFFFF; font-size: 5em; margin: 0;">PART-A</h1>
            </div>
        </div>
    </center>
    <!-- New Section with Table -->
    <div class="container mt-2">
        <p class="section-title">01. Title of the Academic Program: Master of Science in Forestry</p>
        <table>
            <tr>
                <td>Degree</td>
                <td>{{ $degreeProgram->degree }}</td>
            </tr>
            <tr>
                <td>Abbreviated form of the Degree</td>
                <td>{{ $degreeProgram->degree_code }}</td>
            </tr>
            <tr>
                <td>Majors</td>
                <td>{!! $degreeProgram->major !!}</td>
            </tr>
            <tr>
                <td>Discipline/Program Offering Entity (POE)</td>
                <td>{{ $discipline->name }}</td>
            </tr>
            <tr>
                <td>School</td>
                <td>{{ $discipline->school->name ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td>Awarding Institution</td>
                <td>Khulna University</td> 
            </tr>
            <tr>
                <td>Location</td>
                <td>Khulna, Bangladesh</td>
            </tr>
            <tr>
                <td>Bangladesh National Qualifications Framework (BNQF) Level</td>
                <td>{{ $bnqfLevel->name }}</td>
            </tr>
            <tr>
                <td>International Standard Classification of Education (ISCED) Code</td>
                <td>{{ $iscedCode->name }}</td>
            </tr>
            <tr>
                <td>Mode of Study</td>
                <td>{{ $studymode->name }}</td>
            </tr>
            <tr>
                <td>Language of Study</td>
                <td>{{ $languageofStudy->name }}</td>
            </tr>
            <tr>
                <td>Applicable Session</td>
                <td>{{ $ApplicableSession->name }}</td>
            </tr>
        </table>
    </div>

    <p class="section-title">02. Name of the University: Khulna University</p>
    <p class="section-title">03. Vision of the University</p>
    <p>{{ $university->vision }}</p>

    <!-- New Section with University Mission -->
    <div class="container mt-2">
        <p class="section-title">04. Mission of the University</p>
        <table class="mission-table">
            @foreach ($missions as $mission)
                <tr>
                    <td>{{ $mission->um_number }}</td>
                    <td>{{ $mission->description }}</td>
                </tr>
            @endforeach

        </table>
        <h3>UM = University Mission</h3>
        <p class="section-title">05. Name of the Discipline/Program Offering Entity (POE): {{ $discipline->name }}</p>
        <p class="section-title">06. Vision of the Discipline/POE:</p>
        @foreach ($visions as $vision)
            {!! $vision->description !!}
        @endforeach



        <p class="section-title">07. Mission of the Discipline/POE</p>
        <table class="mission-table">
            @foreach ($disciplineMissions as $disciplineMission)
                <tr>
                    <td>{!! $disciplineMission->code !!}</td>
                    <td>{!! $disciplineMission->description !!}</td>
                </tr>
            @endforeach

        </table>
        <h3>M = Mission of the Discipline/POE</h3>


        <p class="section-title">08. Objectives of the Discipline/POE</p>
        @foreach ($objectivesTitles as $titleGroup)
            @foreach ($titleGroup as $title)
                <p>{{ $title->name }}</p>
            @endforeach
        @endforeach


        <table class="mission-table">
            @foreach ($objectives as $objective)
                <tr>
                    <td>{!! $objective->code !!}</td>
                    <td>{!! $objective->description !!}</td>
                </tr>
            @endforeach

        </table>
        <h3>O = Objective of the Discipline/POE</h3>

        <p class="section-title">09. Name of the Degree: {{ $degreeProgram->degree }}</p>

        <p class="section-title">10. Description of the Program</p>
        <p>{!! $degreeProgram->program_description !!}</p>


        <div class="section">
            <p class="section-title">11. Graduate Attributes</p>
            <table>
                <tr>
                    <th></th>
                    <th>Attributes</th>
                    <th>Domains</th>
                </tr>
                @foreach ($graduateAttributes as $attribute)
                    <tr>
                        <td>{{ $attribute->code }}</td>
                        <td>{!! $attribute->description !!}</td>
                        <td>
                            @foreach ($domains[$attribute->id] as $domain)
                                {{ $domain->name }} Domain<br>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </table>
            <p>GA = Graduate Attributes</p>
        </div>

        <div class="section">
            <p class="section-title">12. Program Educational Objectives (PEOs)</p>
            <table>
                <tr>
                    <th>PEO</th>
                    <th>Program Educational Objectives</th>
                </tr>

                @foreach ($peos as $peo)
                    <tr>
                        <td>{!! $peo->code !!}</td>
                        <td>{!! $peo->description !!}</td>

                    </tr>
                @endforeach

            </table>
            <p>PEO = Program Educational Objective</p>
        </div>

        <div class="section">
            <p class="section-title" style="font-weight: bold; margin-top: 20px;">13. Program Learning Outcomes (PLOs):
            </p>
            <p>After successful completion of the degree program graduates will be able to:</p>
            <table>
                <tbody>
                    @foreach ($plo->groupBy('skill_type') as $skillType => $ploGroup)
                        <tr>
                            <th colspan="2"
                                style="border: 1px solid black; padding: 8px; text-align: left; background-color: #D9D9D9;">
                                {{ $skillType }}</th>
                        </tr>
                        @foreach ($ploGroup as $ploDetail)
                            <tr>
                                <td style="border: 1px solid black; padding: 8px; text-align: left;">
                                    {{ $ploDetail->code }}</td>
                                <td style="border: 1px solid black; padding: 8px; text-align: left;">
                                    {!! $ploDetail->description !!}</td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
            <p>PLO = Program Learning Outcome</p>
        </div>

        {{-- <div class="section">
            <p class="section-title" style="font-weight: bold; margin-top: 20px;">14. Mapping Mission of the University
                with PEOs</p>
            <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                <tr>
                    <th>PEOs\Missions</th>
                    <th>UM1</th>
                    <th>UM2</th>
                    <th>UM3</th>
                </tr>
                <tr>
                    <td style="border: 1px solid black; padding: 8px; text-align: left;">PEO1</td>
                    <td style="border: 1px solid black; padding: 8px; text-align: left;">1</td>
                    <td style="border: 1px solid black; padding: 8px; text-align: left;">2</td>
                    <td style="border: 1px solid black; padding: 8px; text-align: left;">3</td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; padding: 8px; text-align: left;">PEO2</td>
                    <td style="border: 1px solid black; padding: 8px; text-align: left;">3</td>
                    <td style="border: 1px solid black; padding: 8px; text-align: left;">2</td>
                    <td style="border: 1px solid black; padding: 8px; text-align: left;">2</td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; padding: 8px; text-align: left;">PEO3</td>
                    <td style="border: 1px solid black; padding: 8px; text-align: left;">1</td>
                    <td style="border: 1px solid black; padding: 8px; text-align: left;">2</td>
                    <td style="border: 1px solid black; padding: 8px; text-align: left;">2</td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; padding: 8px; text-align: left;">PEO4</td>
                    <td style="border: 1px solid black; padding: 8px; text-align: left;">2</td>
                    <td style="border: 1px solid black; padding: 8px; text-align: left;">1</td>
                    <td style="border: 1px solid black; padding: 8px; text-align: left;">2</td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; padding: 8px; text-align: left;">PEO5</td>
                    <td style="border: 1px solid black; padding: 8px; text-align: left;">2</td>
                    <td style="border: 1px solid black; padding: 8px; text-align: left;">1</td>
                    <td style="border: 1px solid black; padding: 8px; text-align: left;">3</td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; padding: 8px; text-align: left;">PEO6</td>
                    <td style="border: 1px solid black; padding: 8px; text-align: left;">1</td>
                    <td style="border: 1px solid black; padding: 8px; text-align: left;">3</td>
                    <td style="border: 1px solid black; padding: 8px; text-align: left;">1</td>
                </tr>
            </table>
            <p>Level of Association: 3=High, 2=Medium, 1=Low</p>
        </div> --}}

        <div class="section">
            <p class="section-title" style="font-weight: bold; margin-top: 20px;">
                14. Mapping Mission of the University with PEOs
            </p>
            <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                <tr>
                    <th>PEOs\Missions</th>
                    @foreach ($missions2 as $mission)
                        <th>{{ $mission->um_number }}</th>
                    @endforeach
                </tr>
                @foreach ($peos2 as $peo)
                    <tr>
                        <td style="border: 1px solid black; padding: 8px; text-align: left;">
                            {{ $peo->code }}
                        </td>
                        @foreach ($missions as $mission)
                            <td style="border: 1px solid black; padding: 8px; text-align: left;">
                                {{ $peo->ums->contains($mission->id) ? 'Yes' : 'No' }}
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </table>
            <p>Level of Association: 3=High, 2=Medium, 1=Low</p>

        </div>

        <p class="section-title" style="font-weight: bold; margin-top: 20px;">
            15. Mapping PLOs with PEO
        </p>
        <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
            <tr>
                <th>PEOs\PLOs</th>
                @foreach ($ploTitles as $ploTitle)
                    <th>{{ $ploTitle->code }}</th>
                @endforeach
            </tr>
            @foreach ($peos2 as $peo)
                <tr>
                    <td style="border: 1px solid black; padding: 8px; text-align: left;">
                        {{ $peo->code }}
                    </td>
                    @foreach ($ploTitles as $ploTitle)
                        <td style="border: 1px solid black; padding: 8px; text-align: left;">
                            {{ $peo->plos->contains('id', $ploTitle->id) ? 'Yes' : 'No' }}
                        </td>
                    @endforeach
                </tr>
            @endforeach
        </table>
        <p>Level of Association: 3=High, 2=Medium, 1=Low</p>


        <p style="font-weight: bold; margin-top: 20px;">16. Mapping Courses with PLOs</p>

        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <th rowspan="2" style="border: 1px solid black; padding: 5px; text-align: center;">
                    Course Code and Course Title
                </th>
                @foreach ($uniqueSkillTypes as $skillType)
                    @php
                        $ploCodes = $skillTypes[$skillType]->pluck('code');
                        $colSpan = $ploCodes->count();
                    @endphp
                    <th colspan="{{ $colSpan }}"
                        style="border: 1px solid black; padding: 5px; text-align: center;">
                        {{ $skillType }}
                    </th>
                @endforeach
            </tr>
            <tr>
                @foreach ($uniqueSkillTypes as $skillType)
                    @foreach ($skillTypes[$skillType] as $ploDetail)
                        <th style="border: 1px solid black; padding: 5px; text-align: center;">
                            {{ $ploDetail->code }}
                        </th>
                    @endforeach
                @endforeach
            </tr>

            @foreach ($courseYears as $year)
                @foreach ($courseTerms as $term)
                    @php
                        $filteredCourseInfos = $courseInfos->where('year_id', $year->id)->where('term_id', $term->id);
                    @endphp

                    @if ($filteredCourseInfos->count() > 0)
                        <tr style="background-color: #D9D9D9; font-weight: bold; text-align: center;">
                            <td colspan="{{ $uniqueSkillTypes->sum(fn($type) => $skillTypes[$type]->count()) + 1 }}"
                                style="border: 1px solid black; padding: 5px; text-align: center;">
                                {{ $year->name }} Year {{ $term->name }} Term
                            </td>
                        </tr>

                        @foreach ($filteredCourseInfos as $courseInfo)
                            <tr>
                                <td style="border: 1px solid black; padding: 5px; text-align: left;">
                                    {{ $courseInfo->code }}: {{ $courseInfo->name }}
                                </td>
                                @php
                                    $courseCloDatas = CourseClo::where('course_id', $courseInfo->id)->get();
                                @endphp

                                {{-- Initialize an array to track displayed cells --}}
                                @php
                                    $displayedCells = [];
                                @endphp

                                @foreach ($uniqueSkillTypes as $skillType)
                                    @foreach ($skillTypes[$skillType] as $ploDetail)
                                        @php
                                            $found = false;
                                        @endphp

                                        @foreach ($courseCloDatas as $courseCloData)
                                            @php
                                                $mapPlos = MappingCloPlo::where('clo_id', $courseCloData->id)->first(
                                                    'plo_ids',
                                                );

                                                if ($mapPlos !== null) {
                                                    $plo_ids_string = $mapPlos->plo_ids;
                                                    $plo_ids_array = explode(',', $plo_ids_string);
                                                    if (in_array($ploDetail->id, $plo_ids_array)) {
                                                        $found = true;
                                                        break;
                                                    }
                                                }
                                            @endphp
                                        @endforeach

                                        {{-- Display '*' or '-' based on whether PLO is found --}}
                                        @if ($found && !in_array($ploDetail->id, $displayedCells))
                                            <td style="border: 1px solid black; padding: 5px; text-align: center;">*
                                            </td>
                                            {{-- Add to displayed cells array --}}
                                            @php
                                                $displayedCells[] = $ploDetail->id;
                                            @endphp
                                        @else
                                            <td style="border: 1px solid black; padding: 5px; text-align: center;">-
                                            </td>
                                        @endif
                                    @endforeach
                                @endforeach
                            </tr>
                        @endforeach
                    @endif
                @endforeach
            @endforeach
        </table>




    {{-- ==============================================================================
                                    PART B START
        ============================================================================== --}}

        <section class="partB ">
            <center>
                <div style="background-color: #FFF176; height: 40vh; display: flex; justify-content: center; align-items: center; text-align: center; position: relative; margin-top:30px">
                    <div>
                        <h1 style="color: #8A8A8A; font-size: 3em; margin: 0;">OUTCOME-BASED</h1>
                        <h1 style="color: #8A8A8A; font-size: 3em; margin: 0;">CURRICULUM</h1>
                    </div>
                    <div style="position: absolute; bottom: 20px; right: 20px;">
                        <h1 style="color: #FFFFFF; font-size: 5em; margin: 0;">PART-B</h1>
                    </div>
                </div>
            </center>

            <div class="container">
                <p style="font-weight: bold; margin-top: 20px;">17. Structure of the Curriculum</p>

                <table class="table">
                    <tr>
                        <th colspan="2">a) Duration of the Program</th>
                        <td>{{ $curriculumStructure->year ?? 'N/A' }} years</td>
                        <td>{{ $curriculumStructure->term ?? 'N/A' }} terms</td>
                    </tr>
                    <tr>
                        <th colspan="2" rowspan="2">b) Admission Requirements</th>
                        <td colspan="2" class="text-start">{!! $curriculumStructure->admission_requirement ?? 'N/A' !!}</td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <th colspan="3">c-1) Total Minimum Credit Requirement to Complete the Program / Graduating
                            Credit</th>
                        <td colspan="3">{{ $curriculumStructure->total_min_credit_required ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th colspan="3">c-2) Available Credits (major wise)</th>
                        <td colspan="3">{{ $curriculumStructure->available_credit ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th colspan="3">d) Total Class Weeks in a Term*</th>
                        <td colspan="3">{{ $curriculumStructure->total_class_per_term ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th colspan="3">e) Minimum CGPA Requirements for Graduation</th>
                        <td colspan="3">{{ $curriculumStructure->min_cgpa_to_graduate ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th colspan="3">f) Maximum Academic Years of Completion</th>
                        <td colspan="3">{{ $curriculumStructure->max_academic_years_to_complete ?? 'N/A' }}</td>
                    </tr>
                </table>
                <div class="px-5">
                    <table class="table term-duration ">
                        <tr>
                            <th colspan="5" class="text-center bg-secondary text-white">* Term Duration</th>
                        </tr>
                        <tr>
                            <th>Teaching and Learning</th>
                            <th>Preparatory Leave</th>
                            <th>Term Final Examination</th>
                            <th>Term Break</th>
                            <th>Total</th>
                        </tr>
                        <tr>
                            @php
                                $total = 0;
                            @endphp
                            @foreach ($mappingDegreeTerms as $mappingDegree)
                                @php
                                    if ($mappingDegree->unit == 'Days') {
                                        $mappingDegree->value = round($mappingDegree->value / 7, 2);
                                        $mappingDegree->unit = 'Weeks';
                                    }
                                    $total += $mappingDegree->value;
                                @endphp
                                <td>{{ $mappingDegree->value ?? '0' }} {{ $mappingDegree->unit ?? 'N/A'  }} </td>
                            @endforeach

                            @if ($mappingDegreeTerms->isEmpty())
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            @endif
                            <td>{{$total}} {{ $mappingDegree->unit ?? 'Weeks'}}</td>
                        </tr>
                    </table>
                </div>

                <p>As per the Khulna University ordinance for Master’s Program 2022, there are three types of programs namely:</p>

                <p>(i)	Master’s by Course work</p>
                <p>(ii)	Master’s by Mixed-mode:</p>
                    <ul>
                        <li style="list-style: none">
                           (a) Dissertation Group (course work + dissertation)
                        </li>
                        <li style="list-style: none">
                           (b) Project Group (course work + project)
                        </li>
                        <li style="list-style: none">
                            (c) Internship Group (course work + internship)
                        </li>
                    </ul>
                <p>(iii) Master’s by Research</p>
                <p>Forestry and Wood Technology Discipline adopts Master’s by Mixed-mode. The name of the program is Master of Science in Forestry. It will be offered in four major areas:</p>
                <ul>
                    <li style="list-style: none">
                       I. Forest Management
                    </li>
                    <li style="list-style: none">
                      II. Participatory Forestry
                    </li>
                    <li style="list-style: none">
                        III. Wood Science
                    </li>
                    <li style="list-style: none">
                        IV. Forest Genetics and Tree Improvement
                    </li>
                </ul>
                <p>There are some compulsory courses for all student irrespective of their major fields of study and major wise obligatory and optional courses. There are three groups/types of programs under the curriculum namely dissertation group, project group and by internship group. Detail has been given in the table below regarding the groups, courses and credits requirements.</p>



                <table style="width: 100%; border-collapse: collapse; text-align:center;" >
                    <tr>
                        <th style="border: 1px solid black; padding: 5px; text-align: center;">Term</th>
                        <th style="border: 1px solid black; padding: 5px; text-align: center;">Course Category
                        </th>
                        <th style="border: 1px solid black; padding: 5px; text-align: center;">Dissertation
                        </th>
                        <th style="border: 1px solid black; padding: 5px; text-align: center;">Project
                        <th style="border: 1px solid black; padding: 5px; text-align: center;">Internship
                        </th>
                    </tr>

                    <tr>
                        <th rowspan="2">First Year <br> First Term</th>
                        <td>Compulsory for all majors</td>
                        <td>Three courses <br>(7 credits)</td>
                        <td>Three courses <br>(7 credits)</td>
                        <td>Three courses <br>(7 credits)</td>
                    </tr>
                    <tr>
                        <td>Major wise obligatory</td>
                        <td>Six courses <br>(12 credits)</td>
                        <td>Six courses <br>(12 credits)</td>
                        <td>Six courses <br>(12 credits)</td>
                    </tr>

                    <tr>
                        <th rowspan="3">First Year <br> Second Term</th>
                        <td>Major wise obligatory</td>
                        <td>One course <br> (3 credits)</td>
                        <td>One course <br> (3 credits)</td>
                        <td>One course <br> (3 credits)</td>
                    </tr>
                    <tr>
                        <td>Major wise optional</td>
                        <td>One course<br>(3 credits)</td>
                        <td>Four courses <br>(12 credits)</td>
                        <td>Four courses <br>(12 credits)</td>
                    </tr>
                    <tr>
                        <td>Dissertation Proposal Development</td>
                        <td>One course<br>(3 credits)</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>

                    <tr>
                        <th>Second Year <br> First Term</th>
                        <td>Dissertation/Project / Internship</td>
                        <td>One course <br> (12 credits)</td>
                        <td>One course <br> (6 credits)</td>
                        <td>One course <br> (6 credits)</td>
                    </tr>

                    <tr>
                        <th>Total</th>
                        <td></td>
                        <th>40 credits</th>
                        <th>40 credits</th>
                        <th>40 credits</th>
                    </tr>
                </table>



                <h5 class="mt-5">First Year Second Term:</h5>

                <table style="width: 100%; border-collapse: collapse; text-align:center;" >
                    <tr>
                        <th style="border: 1px solid black; padding: 5px; text-align: center;">Course Number</th>
                        <th style="border: 1px solid black; padding: 5px; text-align: center;">Course Title
                        </th>
                        <th style="border: 1px solid black; padding: 5px; text-align: center;">Credit Hours
                        </th>
                        </th>
                    </tr>

                    <tr>
                        <td>0821 05 FWT 5202</td>
                        <td>Dissertation Proposal Development *</td>
                        <td>03</td>
                    </tr>
                    <tr>
                        <td>0821 05 FWT 5202</td>
                        <td>Dissertation Proposal Development *</td>
                        <td>03</td>
                    </tr>
                    <tr>
                        <td>0821 05 FWT 5202</td>
                        <td>Dissertation Proposal Development *</td>
                        <td>03</td>
                    </tr>
                    <tr>
                        <td>0821 05 FWT 5202</td>
                        <td>Dissertation Proposal Development *</td>
                        <td>03</td>
                    </tr>
                </table>

                <h5 class="mt-4">g1) Area-wise Credit Distribution</h5>
                <table style="width: 100%; border-collapse: collapse; text-align:center;" >
                    <tr>
                        <th style="border: 1px solid black; padding: 5px; text-align: center;">Area</th>
                        <th style="border: 1px solid black; padding: 5px; text-align: center;">Course Type
                        </th>
                        <th style="border: 1px solid black; padding: 5px; text-align: center;">Number of Courses
                        </th>
                        <th style="border: 1px solid black; padding: 5px; text-align: center;">Credits
                        <th style="border: 1px solid black; padding: 5px; text-align: center;">Total Credits
                        </th>
                    </tr>
                    @php
                        $totalCourse = 0;
                        $totalCreditFinal = 0;
                    @endphp
                    @foreach ($AreaWiseCreditDistributions as $AreaWhiseCredit)
                        <tr>
                            <th rowspan="2" class="text-start">
                                {{ $AreaWhiseCredit->area }}
                                @if ($loop->index == 0)
                                    **
                                @elseif ($loop->index == 3)
                                    ***
                                @endif
                            </th>
                            <td>Theory</td>
                            <td>{{ $AreaWhiseCredit->theoryCount }}</td>
                            <td>{{ $AreaWhiseCredit->theoryCredits }}</td>
                            <td rowspan="2">{{ $AreaWhiseCredit->totalCredits }}</td>
                        </tr>
                        <tr>
                            <td>Sessional</td>
                            <td>{{ $AreaWhiseCredit->sessionalCount }}</td>
                            <td>{{ $AreaWhiseCredit->sessionalCredits }}</td>
                        </tr>

                        @php
                            $totalCourse += ($AreaWhiseCredit->theoryCount + $AreaWhiseCredit->sessionalCount);

                            $totalCreditFinal +=$AreaWhiseCredit->totalCredits ;
                        @endphp
                    @endforeach
                    <tr>
                        <th colspan="2" class="text-start">Total</th>
                        <td>{{$totalCourse}}</td>
                        <td>{{ $totalCreditFinal}}</td>
                        <td>{{ $totalCreditFinal}}</td>
                    </tr>


                </table>
                <p>**21% from GED courses [Please note that GED courses should be at least 10%]</p>
                <p>*** Thesis, project, internship etc. courses</p>
            </div>

            {{-- g2) Category of Courses start  --}}

            <h5 class="mt-5"> g2) Category of Courses</h2>
                <table style=" border-collapse: collapse;">
                    <tr>
                        <th style="border: 1px solid black; padding: 10px; background-color: #f2f2f2;">Area</th>
                        <th style="border: 1px solid black; padding: 10px; background-color: #f2f2f2;">Course Type</th>
                        <th style="border: 1px solid black; padding: 10px; background-color: #f2f2f2;">Course Title</th>
                        <th style="border: 1px solid black; padding: 10px; background-color: #f2f2f2; text-align: center;">Credits</th>
                    </tr>
                    @php
                        $totalCredits = 0;
                    @endphp
                    @foreach ($CategoryOfCourses as $courses)
                        @php
                            $courseAreaName = $courses->first()->courseArea->name;
                            $theoryCourses = $courses->where('course_type_id', 1);
                            $sessionalCourses = $courses->where('course_type_id', 2);
                            $theoryCredits = $theoryCourses->sum('credit');
                            $sessionalCredits = $sessionalCourses->sum('credit');
                            $totalCredits += ($theoryCredits + $sessionalCredits);
                        @endphp
                        <tr>
                            <td style="border: 1px solid black; padding: 10px;" rowspan="2">{{ $courseAreaName }}</td>
                            <td style="border: 1px solid black; padding: 10px;" class="text-center">Theory</td>
                            <td style="border: 1px solid black; padding: 10px;">
                                @foreach ($theoryCourses as $course)
                                    {{ $loop->index + 1 }}. {{ $course->name }} <br>
                                @endforeach
                            </td>
                            <td style="border: 1px solid black; padding: 10px; text-align: center;" >{{ floor($theoryCredits)}}</td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black; padding: 10px;" class="text-center">Sessional</td>
                            <td style="border: 1px solid black; padding: 10px;">
                                @foreach ($sessionalCourses as $course)
                                    {{ $loop->index + 1 }}. {{ $course->name }} <br>
                                @endforeach
                            </td>
                            <td style="border: 1px solid black; padding: 10px; text-align: center;" >{{floor($sessionalCredits)}}</td>
                        </tr>
                    @endforeach

                    <tr>
                        <th colspan="3">Total</th>
                        <th class="text-center">{{floor($totalCredits)}}</th>
                    </tr>
                </table>




            <div>
                <h5 class="mt-5">18. Year/Term-wise Distribution of Courses</h5>
            </div>
            @php
                // Group courses by year and term
                $yearTermCourseDistributions = $courseInfos->groupBy(function($course) {
                    return $course->year_id . '-' . $course->term_id;
                });
            @endphp

        @foreach ($courseYears as $year)
            @foreach ($courseTerms as $term)
                @php
                    $totalTheoryHours = 0;
                    $totalSessionalHours = 0;
                    $finalCreditsTotal = 0;
                    $totalTheoryCount = 0;
                    $totalSessionalCount = 0;
                    $totalOptionalCount = 0;
                    $totalCoreCount = 0;

                    $courses = $yearTermCourseDistributions->get($year->id . '-' . $term->id, collect());
                @endphp

                @if ($courses->isNotEmpty())
                    <table style=" border-collapse: collapse;">
                        <tr class="text-center" style="background-color: #f2f2f2">
                            <th colspan="7">{{ $year->name }} Year {{ $term->name }} Term</th>
                        </tr>
                        <tr>
                            <th style="border: 1px solid black; padding: 8px;" rowspan="2" class="text-center">Course Code</th>
                            <th style="border: 1px solid black; padding: 8px;" rowspan="2" class="text-center">Course Title</th>
                            <th style="border: 1px solid black; padding: 8px;" rowspan="2" class="text-center">Course Status</th>
                            <th style="border: 1px solid black; padding: 8px;" colspan="2" class="text-center">Contact Hours/Week</th>
                            <th style="border: 1px solid black; padding: 8px;" rowspan="2" class="text-center">Credits</th>
                            <th style="border: 1px solid black; padding: 8px;" rowspan="2" class="text-center">Prerequisites</th>
                        </tr>
                        <tr>
                            <th style="border: 1px solid black; padding: 8px;" class="text-center">Theory</th>
                            <th style="border: 1px solid black; padding: 8px;" class="text-center">Sessional</th>
                        </tr>
                        @foreach ($courses as $course)
                            @php
                                if ($course->course_type_id == 1) {
                                    $totalTheoryHours += $course->total_hours;
                                    $totalTheoryCount++;
                                } else {
                                    $totalSessionalHours += $course->total_hours;
                                    $totalSessionalCount++;
                                }

                                if ($course->status == 'Core') {
                                    $totalCoreCount++;
                                } elseif ($course->status == 'Optional') {
                                    $totalOptionalCount++;
                                }

                                $finalCreditsTotal += floor($course->credit);

                                // Fetch pre-requisite course codes
                                $preRequisites = $course->pre_requisite
                                    ? App\Models\CourseInfo::whereIn('id', explode(',', $course->pre_requisite))->pluck('code')->toArray()
                                    : ['None'];
                            @endphp
                            <tr>
                                <td style="border: 1px solid black; padding: 8px;">{{ $course->code }}</td>
                                <td style="border: 1px solid black; padding: 8px;">{!! $course->name !!}</td>
                                <td style="border: 1px solid black; padding: 8px;" class="text-center">{{ $course->status }}</td>
                                <td style="border: 1px solid black; padding: 8px;" class="text-center">{{ $course->course_type_id == 1 ? $course->total_hours : '-' }}</td>
                                <td style="border: 1px solid black; padding: 8px;" class="text-center">{{ $course->course_type_id == 2 ? $course->total_hours : '-' }}</td>
                                <td style="border: 1px solid black; padding: 8px;" class="text-center">{{ floor($course->credit) }}</td>
                                <td style="border: 1px solid black; padding: 8px;" class="text-center">{{ implode(', ', $preRequisites) }}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <th style="border: 1px solid black; padding: 8px;" rowspan="2">Total</th>
                            <td style="border: 1px solid black; padding: 8px;" colspan="2" rowspan="2" >
                                Core Courses: {{ $totalCoreCount }},
                                Optional Courses: {{ $totalOptionalCount }},
                                Theory Courses: {{ $totalTheoryCount }},
                                Sessional Courses: {{ $totalSessionalCount }}
                            </td>
                            <th style="border: 1px solid black; padding: 8px;" class="text-center">{{ $totalTheoryHours }}</th>
                            <th style="border: 1px solid black; padding: 8px;" class="text-center">{{ $totalSessionalHours }}</th>
                            <th style="border: 1px solid black; padding: 8px;" rowspan="2" class="text-center">{{ $finalCreditsTotal }}</th>
                            <td style="border: 1px solid black; padding: 8px;" rowspan="2" class="text-center">....</td>
                        </tr>
                        <tr>
                            <th style="border: 1px solid black; padding: 8px;" colspan="2" class="text-center">{{ $totalTheoryHours + $totalSessionalHours }}</th>
                        </tr>
                    </table>

                @endif

            @endforeach
        @endforeach


        </section>





        {{-- =============================================================================================================================

                                                                        PART-C

        ============================================================================================================================= --}}



        <div
            style="background-color: #FFF176; height: 40vh; display: flex; justify-content: center; align-items: center; text-align: center; position: relative; margin-top:2%">
            <div>
                <h1 style="color: #8A8A8A; font-size: 3em; margin: 0;">OUTCOME-BASED</h1>
                <h1 style="color: #8A8A8A; font-size: 3em; margin: 0;">CURRICULUM</h1>
            </div>
            <div style="position: absolute; bottom: 20px; right: 20px;">
                <h1 style="color: #FFFFFF; font-size: 5em; margin: 0;">PART-C</h1>
            </div>
        </div>




        <h3 style="text-align: center; margin-bottom: 20px;">Course Details</h3>

        @foreach ($courseInfos as $course)
            <div style="margin-bottom: 40px;">
                <h2 style="text-align: center; margin-bottom: 20px;">
                    {{ $course->courseYear->name }} Year {{ $course->courseTerm->name }} Term
                </h2>

                <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                    <tr>
                        <td
                            style="border: 1px solid black; text-align: left; padding: 8px; font-weight: bold; width: 20%;">
                            Course Code:</td>
                        <td style="border: 1px solid black; text-align: left; padding: 8px; width: 30%;">
                            {{ $course->code }}</td>
                        <td
                            style="border: 1px solid black; text-align: left; padding: 8px; font-weight: bold; width: 10%;">
                            Year:</td>
                        <td style="border: 1px solid black; text-align: left; padding: 8px; width: 10%;">
                            {{ $course->courseYear->name }}</td>
                        <td
                            style="border: 1px solid black; text-align: left; padding: 8px; font-weight: bold; width: 10%;">
                            Term:</td>
                        <td style="border: 1px solid black; text-align: left; padding: 8px; width: 20%;">
                            {{ $course->courseTerm->name }}</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black; text-align: left; padding: 8px; font-weight: bold;">
                            Course Title:</td>
                        <td colspan="5" style="border: 1px solid black; text-align: left; padding: 8px;">
                            {{ $course->name }}</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black; text-align: left; padding: 8px; font-weight: bold;">
                            Course Status:</td>
                        <td style="border: 1px solid black; text-align: left; padding: 8px;">{{ $course->status }}
                        </td>
                        <td style="border: 1px solid black; text-align: left; padding: 8px; font-weight: bold;">
                            Credit:</td>
                        <td colspan="3" style="border: 1px solid black; text-align: left; padding: 8px;">
                            {{ $course->credit }}</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black; text-align: left; padding: 8px; font-weight: bold;">
                            Prerequisite(s):</td>
                        {{-- <td colspan="5" style="border: 1px solid black; text-align: left; padding: 8px;">
                            {{ $course->pre_requisite }}</td> --}}
                            <td colspan="5" style="border: 1px solid black; text-align: left; padding: 8px;">
                                @php
                                    $prerequisiteIds = explode(',', $course->pre_requisite);
                                    $prerequisiteCourses = $courseInfos2->whereIn('id', $prerequisiteIds);
                                    // dd($prerequisiteCourses)
                                @endphp
                                @if ($prerequisiteCourses->isNotEmpty())
                                    @foreach ($prerequisiteCourses as $prerequisiteCourse)
                                        {{ $prerequisiteCourse->code }}@if(!$loop->last), @endif
                                    @endforeach
                                @else
                                    No Prerequisite
                                @endif
                            </td>
                    </tr>
                </table>




                <!-- Additional Course Details -->
                <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                    <tr>
                        <th style="border: 1px solid black; text-align: center; padding: 8px; font-weight: bold;"
                            colspan="2">Additional Details</th>
                    </tr>
                    <tr>
                        <td
                            style="border: 1px solid black; text-align: left; padding: 8px; font-weight: bold; width: 30%;">
                            Rationale</td>
                        <td style="border: 1px solid black; text-align: left; padding: 8px;">
                            {!! $courseInfo->description !!}</td>
                    </tr>
                </table>


                <p style="font-weight: bold; margin-bottom: 10px;">Course Contents</p>
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">Section A</th>
                        <th style="border: 1px solid black; padding: 8px; text-align: center;">CLOs</th>
                    </tr>
                    @php
                        $courses = $courseContents->where('course_id', $course->id);
                        // dd($test);
                    @endphp

                    @foreach ($courses as $content)
                        <tr>
                            <td style="border: 1px solid black; padding: 8px;">{!! $content->description !!}</td>
                            <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                {{ $content->clo_ids }}</td>
                        </tr>
                    @endforeach
                </table>

                <p style="font-weight: bold; margin-top: 20px;">Level of Association: 3=High, 2=Medium, 1=Low</p>


                <!-- Course Learning Outcomes (CLOs) -->
                <div style="width: 100%; margin: auto; margin-top: 20px;">
                    <h3 style="text-align: left; margin-bottom: 20px;">Course Learning Outcomes (CLOs)</h3>

                    <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                        <tr>
                            <td style="border: 1px solid black; text-align: left; padding: 8px; font-weight: bold; width: 30%;"
                                rowspan="{{ count($courseClos) + 1 }}">Course Learning Outcomes (CLOs)</td>
                            <td style="border: 1px solid black; text-align: left; padding: 8px;"></td>
                            <td
                                style="border: 1px solid black; text-align: center; padding: 8px; font-weight: bold; width: 20%;">
                                Mapping with PLOs</td>
                        </tr>
                        @foreach ($courseClos as $clo)
                            <tr>
                                <td style="border: 1px solid black; text-align: left; padding: 8px;">
                                    {!! $clo->description !!}</td>
                                <td style="border: 1px solid black; text-align: center; padding: 8px;">
                                    @php
                                    $mapping = $clo->mapping_clo_plos()->first();
                                    if ($mapping) {
                                        $ploIds = explode(',', $mapping->plo_ids);
                                        $ploCodes = \App\Models\PloDetail::whereIn('id', $ploIds)->pluck('code')->toArray();
                                        echo implode(', ', $ploCodes);
                                    } else {
                                        echo 'N/A';
                                    }
                                @endphp
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>


                <p style="font-weight: bold; margin-bottom: 10px;">Mapping CLOs with the Teaching-Learning and
                    Assessment Strategy</p>
                <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">CLOs</th>
                        <th style="border: 1px solid black; padding: 8px;">Teaching-Learning Strategy</th>
                        <th style="border: 1px solid black; padding: 8px;">Assessment Strategy</th>
                    </tr>
                    @php
                        $clocourses = $courseClos2->where('course_id', $course->id);
                    @endphp
                    @foreach ($clocourses as $clocourse)
                        @php
                            $strategies = $cloStrategies->where('clo_id', $clocourse->id);
                            $strategy1 = 'N/A';
                            $strategy2 = 'N/A';
                            foreach ($strategies as $strategy) {
                                if ($strategy->strategy_id == 1) {
                                    $strategy1 = $strategy->description;
                                }
                                if ($strategy->strategy_id == 2) {
                                    $strategy2 = $strategy->description;
                                }
                            }
                        @endphp
                        <tr>
                            <td style="border: 1px solid black; padding: 8px;">{{ $clocourse->code }}</td>
                            <td style="border: 1px solid black; padding: 8px;">{{ $strategy1 }}</td>
                            <td style="border: 1px solid black; padding: 8px;">{{ $strategy2 }}</td>
                        </tr>
                    @endforeach
                </table>




                <p style="font-weight: bold; margin-bottom: 10px;">Learning Materials</p>
                @php
                    $courses = $courseLearningMaterials->where('course_id', $course->id);
                    // dd($course->id);
                    $recommendedReadings = $courses->where('learning_material_type_id', 1);
                    $supplementaryReadings = $courses->where('learning_material_type_id', 2);
                @endphp

                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td
                            style="border: 1px solid black; text-align: left; padding: 8px; font-weight: bold; width: 30%;">
                            Recommended Readings</td>
                        <td style="border: 1px solid black; text-align: left; padding: 8px;">
                            @if ($recommendedReadings->isNotEmpty())
                                @foreach ($recommendedReadings as $reading)
                                     {!! $reading->name !!}
                                @endforeach
                            @else
                                No Recommended Readings available.
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black; text-align: left; padding: 8px; font-weight: bold;">
                            Supplementary Readings</td>
                        <td style="border: 1px solid black; text-align: left; padding: 8px;">
                            @if ($supplementaryReadings->isNotEmpty())
                                @foreach ($supplementaryReadings as $reading)
                                {!! $reading->name !!}
                                @endforeach
                            @else
                                No Supplementary Readings available.
                            @endif
                        </td>
                    </tr>
                </table>

            </div>
        @endforeach




             {{-- ==============================================================================
                                    PART D START
        ============================================================================== --}}

        <section class="mt-5">
            <center>
                <div
                    style="background-color: #FFF176; height: 40vh; display: flex; justify-content: center; align-items: center; text-align: center; position: relative;">
                    <div>
                        <h1 style="color: #8A8A8A; font-size: 3em; margin: 0;">OUTCOME-BASED</h1>
                        <h1 style="color: #8A8A8A; font-size: 3em; margin: 0;">CURRICULUM</h1>
                    </div>
                    <div style="position: absolute; bottom: 20px; right: 20px;">
                        <h1 style="color: #FFFFFF; font-size: 5em; margin: 0;">PART-D</h1>
                    </div>
                </div>
            </center>

            <div class="container">
                <div class="col-md-12">
                    <h5>20. Admission to the Program</h5>
                    <h5>20.1 Admission committee</h5>
                </div>
                <p class="py-3">There will be an 'Admission Committee' for each intake under the Discipline/POE</p>


                <div class="container mt-4">
                    <p>Admission Committee will be formed according to the following table:</p>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Chairman</td>
                                <td>The Discipline Head</td>
                            </tr>
                            <tr>
                                <td>Internal Member</td>
                                <td>Three teachers of the Discipline not below the rank of Associate Professor in order of
                                    seniority by rotation</td>
                            </tr>
                            <tr>
                                <td>External Member</td>
                                <td>One teacher nominated by the Dean of School, not below the rank of a Professor</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div>
                    One of the internal members will act as the member-secretary of the committee. If the Head is unable to
                    be the Chairman of the Admission Committee, the senior most member of the Admission Committee will act
                    as the Chairman and an additional member will be included as a member of the Admission Committee.
                </div>

                <div>
                    <h5 class="mt-4">20.2 Admission process</h5>
                    <p>There must be an open circulation for the admission. Selection of candidates shall be made through
                        written and, /or oral tests as deemed suitable to the Admission Committee. Lists of selected
                        candidates should be published on the Notice Board of the Discipline/POE and on the
                        website of the Discipline, and/or University. Candidates in service must produce
                        clearance/permission from his/her authority. No candidate will be admitted after 15 working days
                        from the beginning of classes. The concerned Discipline will set the requirements for enrolling in
                        the Dissertation group. The office of the Registrar will serve as the Admission Office and will deal
                        with the students' admission.
                    </p>

                    <h5 class="mt-4">20.3 Course pattern and structure</h5>
                    <p>The Master's program shall consist of a set of theoretical courses, sessional (laboratory/fieldwork,
                        etc.) courses, dissertation/ project/ internship, and viva voce.
                    </p>


                    <h5 class="mt-4">20.4 Offering courses</h5>
                    <p>The courses to be offered (decided by the concerned Discipline/POE) in a particular term will be
                        announced before the commencement of the Term. One teacher will usually conduct a course. However,
                        the Discipline Head may assign more than one teacher to teach a specific course in special
                        circumstances. The course teacher(s) will be responsible for maintaining the expected standard and
                        assessing the students' performance.
                    </p>

                    <h5 class="mt-4">20.5 Course registration</h5>
                    <h5> <i>20.5.1 Registration procedure</i></h5>

                    <p>
                        Each student will get oneself registered with the University. S/he will fi11 in the course
                        registration form in consultation with the Program Coordinator under the guidance of the Discipline
                        Head. The Program Coordinator will verify the form and submit it to the Discipline Head for
                        forwarding it to the Registrar's office. Such submission might be made online, when and where
                        applicable. The Registrar's office will be responsible for its distribution to relevant authorities
                        (Disciplines and the Controller of Examinations). Course registration will be permitted within five
                        working days at the beginning of each Term. Late registration will be permitted up to the next five
                        working days on payment of a late fee. Student(s) having outstanding dues to the University shall
                        not be permitted to register. <br><br>

                        A student has to register for the backlog/retake/re-retake core courses first followed by the fresh
                        courses offered by the Discipline for the term s/he is going to enroll subject to the compliance
                        with: (i) completion of prerequisite courses (if any) and (ii) maximum credit registration limit per
                        Term. However, s/He may not choose to register the optional backlog/retake/re-retake courses first.
                        <br><br>

                        ln addition, a student may be allowed to register for advance course(s) in a term subject to: (i)
                        his/her all backlog/retake/re-retake and offered core courses are either clear or registered, (ii)
                        his/her current terms' offered all core courses are registered, (iii) completion of corresponding
                        prerequisite courses (if any), (iv) compliance with maximum credit registration limit per Term, and
                        (v) the desired advance courses are offered by the Discipline/POE in the current Term. However, such
                        an advance course registration option will not be applicable for capstone courses like Thesis/
                        Project/Internship/ and so on. <br><br>

                        A student retaking/re-retaking the course will be awarded the immediate lower grade he/she obtains,
                        and this grade will be shown and maintained on the Transcript. <br><br>

                        A Discipline/POE will not continue an optional course if less than 30 percent of students of
                        respective major areas register for that course within ten working days from the beginning of
                        classes. The situation will be solved by dropping that optional course through applying article 10.3
                        of Khulna University’s Ordinance for Master’s Program- 2022 by the next five working days. The
                        coordinator will maintain such records and act accordingly. However, the Discipline/POE might relax
                        this clause for only final term/year optional courses if it is deemed necessary (for example, the
                        studentship will be toward termination, or the student will have to wait for additional term/year if
                        the considered optional course(s) are not offered).
                    </p>

                    <h5 class="mt-4"><i>20.5.2 Limit on the credits to be taken in a Term</i></h5>
                    <p>Discipline Head may allow a student to register up to a maximum of 25 credits if recommended by the
                        Program Coordinator. However, there is no minimum credit limit per Term in master’s level study.</p>

                    <h5 class="mt-4"><i>20.5.3 Course adjustment procedure</i></h5>
                    <p>A student will have the option to add or drop course(s) from his/her registration list within fifteen
                        working days from the beginning of classes. This can be done with the advice of the concerned
                        Program Coordinator and consent of the Discipline Head. Adjustment of initially registered courses
                        in any Term can be made by duly filling in the Adjustment Form. The Registrar's office will do the
                        needful.</p>


                    <h5 class="mt-4"><i>20.5.4 Withdrawal from a term</i></h5>
                    <p>If any student cannot complete the Term Final Examination due to severe illness or serious accident,
                        he/she may apply to the Dean through the Head for total withdrawal from the Term within eight
                        working days after the end of the Term Final Examination. However, she may choose not to withdraw
                        from any sessional courses if the grade obtained in such a course is “C” or better. A medical
                        certificate endorsed by the chief medical officer of the University must support the application.
                        The Dean of the concerned school will decide on such an application and inform the Registrar. If a
                        student is allowed to withdraw from a Term, he/she will have to register as fresh for the Term
                        he/she has withdrawn. However, he/she may be allowed to register for backlog courses, if offered.
                    </p>


                    <h5 class="mt-4"><i>20.5.5 Absence in a term</i></h5>
                    <p>A student may be absent from continuous assessments (quizzes/class test/field works, etc.) during the
                        Term. Such absences will naturally reduce points/marks, which count towards the final grade. Absence
                        in the Mid Term (if any) and the Term Final Examination will result in 'F' grade.
                        A student who has been absent for short periods, up to a maximum of three weeks due to illness,
                        should request the Course Teacher or Program Coordinator to makeup continuous assessments
                        immediately on returning to the class. A medical certificate should support such request from the
                        Chief Medical Officer of Khulna University. The medical certificate issued by registered medical
                        practitioners (with the registration number shown explicitly on the certificates) and endorsed by
                        the Chief Medical officer of the University will also be acceptable only in those cases where the
                        student has valid reasons for his absence from the University.
                    </p>


                    <h5 class="mt-4"><i>20.5.6 Special term</i></h5>
                    <p>
                        Students having any retake/re-retake course(s) may apply for a special Term to complete the total
                        required course (maximum 09 credits) in that Term. The special Term will be offered for the final
                        term students who have retake/retake courses. The examination will start four (04) weeks after
                        publication of the result and will continue not more than 2 (two) weeks. The marks of both
                        attendance and continuous assessments will be carried over from the previous record.

                    </p>


                    <h5 class="mt-4"><i>20.5.7 Registration for improvement</i></h5>
                    <p>
                        If any student gets a 'D' to 'C+' grade in any course, s/he may be allowed to repeat that course to
                        improve the grade. The previous grade will be replaced from the grade sheet in such a case.
                    </p>


                    <h5 class="mt-4"><i>20.5.8 Backlog</i></h5>
                    <p>
                        20.5.8 Backlog
                    </p>


                    <h5 class="mt-4"><i>20.5.9 Credit transfer/credit waiver</i></h5>
                    <p>
                        This curriculum permits credit transfer to facilitate educational mobility. That transfer of
                        credit(s) may be inward or outward. <br>
                        In the case of outward credit transfer, a student of Khulna University shall apply to the Registrar
                        through the Head of the Discipline/POE for getting a credit transfer certificate. The application
                        must be supported by necessary documents, including a copy of the grade sheet(s). Accordingly, the
                        Registrar will issue a credit transfer certificate mentioning the number of credits already
                        completed at Khulna University. <br>
                        In case of inward credit transfer, students from other Universities/ Institutions may apply to the
                        Registrar of Khulna University for credit transfer. The application must be supported by necessary
                        documents, including a copy of grade sheet(s) and curriculum. The Registrar's office will forward
                        the application to the concerned Discipline/POE. A three-member committee headed by the Discipline
                        Head and two senior most teachers will assess the application and recommend for approval to the
                        Registrar. The maximum limit of credit transfer from other Universities/ Institutions will be less
                        than or equal to 50 percent of the total credits required to complete the concerned Degree. The
                        final transcript of such students will show only the number of credits transferred. <br>
                        The same process may be applied for handling the credit waiver related applications. However, the
                        maximum limit of inward credit waiver from other Universities/ Institutions should be less than or
                        equal to 20 percent of the total credits required to complete the concerned Degree.
                    </p>


                    <h5 class="mt-4">21. Program Coordinator</h5>
                    <p>
                        The Discipline Head will appoint a Program Coordinator for each batch of the master’s program. The
                        Program Coordinator will be rotated in order of seniority from among the teachers of the Discipline
                        who are eligible for conducting courses in the master’s program. The Program Coordinator will help
                        the Discipline Head in matters related to student’ orientation, course registration, course
                        offering, and preparing class routine.
                    </p>

                    <div>
                        <h5 class="mt-4"><i>22. Examination Procedures of Theory and Sessional Courses </i></h5>
                        <p>(i) All theory and sessional courses will be evaluated out of 100 distributed as follows:</p>

                        <div class="row">
                            <div class="col-md-2">
                                <h6>Theory Course:</h6>
                            </div>
                            <div class="col-md-6 pt-3">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Attendance</th>
                                            <th>10 Marks</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Continuous Assessment</td>
                                            <td>30 Marks</td>
                                        </tr>
                                        <tr class="highlight">
                                            <td>Term Final</td>
                                            <td>60 Marks</td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td>100 Marks</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>


                    <div>
                        <div class="row">
                            <div class="col-md-2">
                                <h6>Sessional Course:</h6>
                            </div>
                            <div class="col-md-6 pt-3">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Attendance</th>
                                            <th>10 Marks</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Sessional Assessment</td>
                                            <td>60 Marks</td>
                                        </tr>
                                        <tr>
                                            <td>Viva voce</td>
                                            <td>30 Marks</td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td>100 Marks</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>

                    <div>
                        <p class="mt-4">(ii) Attendance shall carry 10 marks based on the following table</p>
                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-6 pt-3">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Attendance (%)</th>
                                            <th>Marks</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>&gt;90</td>
                                            <td>10</td>
                                        </tr>
                                        <tr>
                                            <td>85 to &lt;90</td>
                                            <td>9</td>
                                        </tr>
                                        <tr>
                                            <td>80 to &lt;85</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td>75 to &lt;80</td>
                                            <td>7</td>
                                        </tr>
                                        <tr>
                                            <td>70 to &lt;75</td>
                                            <td>6</td>
                                        </tr>
                                        <tr>
                                            <td>65 to &lt;70</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>60 to &lt;65</td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td>&lt; 60</td>
                                            <td>0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>

                    <p>The continuous assessments (30 marks) may be conducted in the form of written class examinations,
                        assignments, home-works, presentations, quizzes, viva voce, mid-term, etc. For any theoretical
                        course, there shall be at least four assessments. Section best (A & B) assessments shall be counted.
                        A mid-term Examination may be taken if a Discipline, POE opts for it. The concerned Discipline will
                        allocate marks for mid-term and continuous other evaluations in such a case. The course teachers
                        must submit the continuous assessment and sessional assessment mark sheets to the Chair of the
                        Examination Committee before the starting of the Term final examination. <br>
                        The number of Continuous Assessments (CAs) in each course will be as follows:
                    </p>

                    <div class="px-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No. of credit(s)</th>
                                    <th>Total no. of CA required</th>
                                    <th>CAs to be considered for grading</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>3 - 4</td>
                                    <td>4 (2 in each section)</td>
                                    <td rowspan="2">Section best assessments shall be averaged for grading</td>
                                </tr>
                                <tr>
                                    <td>1.5 - 2</td>
                                    <td>3 (at least one in each section)</td>
                                </tr>
                            </tbody>
                        </table>
                        <p><strong>g)</strong> If two teachers teach a course, both the teachers will conduct continuous assessments individually.</p>
                    </div>

                    <p>
                        (iii) The remaining 60 marks will be allocated for the term final examination.
                        (iv) There will be an Examination Committee for each Term. The committee will be formed as follows: <br>
                        The Chairman of the Examination Committee will generally be the Discipline Head. Three teachers of the Discipline not below the rank of Associate Professor in order of seniority by rotation will be the members of the Examination Committee. If a Discipline does not have the required number of teachers with designations described above, Assistant Professor/Lecturer may also be included in the Examination Committee. The fifth member (external) of the Examination Committee will be from other Disciplines/Universities. The Examination Committee of the final term will also work for the special term. <br>
                        (v) There shall be two question setters and two examiners for each course in term final examinations. The answer script shall be marked as Section A and Section B. <br>
                        (vi) For the term fina1 examination, the Controller of Examinations will prepare and circulate the schedule upon receiving advice from the Discipline at least one week before the commencement of the examinations. <br>
                        (vii) The functions of the examination committee will be:
                            <ul>
                                <li style="list-style: none">
                                    a) Nominate question setters and answer script examiners.
                                </li>
                                <li style="list-style: none">
                                    b) Collect manuscripts, arrange moderation and preparation of question paper.
                                </li>
                                <li style="list-style: none">
                                    c) Conduct viva voce (if any), as stated in section 8(iv) of Khulna University’s Ordinance for Master’s Program – 2022.
                                </li>
                                <li style="list-style: none">
                                    d) Receive evaluated answer scripts and their corresponding mark sheets, mark sheets of Dissertation/ project/ internship examination, arrange scrutiny and prepare the result.
                                </li>
                                <li style="list-style: none">
                                    e) Submit all records and the result to the Controller of Examinations through Discipline Head.
                                </li>
                            </ul>
                        (viii) A student who fails in any course(s) in the Term final examinations or who registered for the course(s) but did not sit for the examination, the concerned course(s) will be considered as retake course(s). <br>
                        (ix) A student retaking theory course(s) for clearing/passing or improvement must appear at the mid-term (if any) and Term final examinations. A student may attend continuous assessments also on the written approval of the Discipline Head; otherwise, the marks of continuous assessments will be maintained from the student's previous records. The marks of attendance will be carried forward from earlier Term. The obtained grade will be downgraded in case of retaking course(s). <br>
                        (x) Examination procedure related other guidelines of the latest 'ordinance for Undergraduate Examination' of Khulna University will generally be applicable for the Master’s programs, if not conflicting with this Ordinance.
                    </p>

                    <h5 class="mt-4">23. Grading System</h5>
                    <p>Letter Grades and corresponding Grade Points will be awarded following the provisions shown in the table below.</p>

                    <div class="px-4">
                        <table class="table table-bordered removeVerticalLine">
                            <thead>
                                <tr>
                                    <th scope="col">Numerical Grade</th>
                                    <th scope="col">Letter Grade</th>
                                    <th scope="col">Grade Point</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>80% or above</td>
                                    <td>A+ (A plus)</td>
                                    <td>4.00</td>
                                </tr>
                                <tr>
                                    <td>75 to less than 80%</td>
                                    <td>A (A regular)</td>
                                    <td>3.75</td>
                                </tr>
                                <tr>
                                    <td>70 to less than 75%</td>
                                    <td>A- (A minus)</td>
                                    <td>3.50</td>
                                </tr>
                                <tr>
                                    <td>65 to less than 70%</td>
                                    <td>B+ (B plus)</td>
                                    <td>3.25</td>
                                </tr>
                                <tr>
                                    <td>60 to less than 65%</td>
                                    <td>B (B regular)</td>
                                    <td>3.00</td>
                                </tr>
                                <tr>
                                    <td>55 to less than 60%</td>
                                    <td>B- (B minus)</td>
                                    <td>2.75</td>
                                </tr>
                                <tr>
                                    <td>50 to less than 55%</td>
                                    <td>C+ (C plus)</td>
                                    <td>2.50</td>
                                </tr>
                                <tr>
                                    <td>45 to less than 50%</td>
                                    <td>C (C regular)</td>
                                    <td>2.25</td>
                                </tr>
                                <tr>
                                    <td>40 to less than 45%</td>
                                    <td>D</td>
                                    <td>2.00</td>
                                </tr>
                                <tr>
                                    <td>Less than 40%</td>
                                    <td>F</td>
                                    <td>00</td>
                                </tr>
                                <tr>
                                    <td>Incomplete</td>
                                    <td>I</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Withdrawn</td>
                                    <td>W</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Continuation (for the project, thesis design, etc. course)</td>
                                    <td>X</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p>
                        GPA will be calculated as per the standard practices at the undergraduate level of Khulna University. A student's performance will be evaluated in terms of three indices, viz. Term Grade Point Average (TGPA), Yearly Grade point Average (YGPA), and Cumulative Grade Point Average (GGPA). The TGPA is computed by dividing the total points earned in a Term by the number of credits taken in the Term. The YGPA is computed by dividing the total grade points earned in two Terms in a year by dividing the number of credits taken in that year. The CGPA is computed by dividing the total grade points accumulated up to date by the total completed credits. Thus, a student who has earned 275 grad points in attempting 100 credits of courses would have an overall CGPA of2.75. The students will be awarded the Degree with Distinction, if their CGPA is 3.75 or above.
                    </p>


                    <h5 class="mt-4">24. Dissertation under Mixed-mode</h5>
                    <div class="content">
                        <p>(i) There will be two components of the Dissertation, namely Dissertation Part-I in one term for proposal development, and Dissertation Part-II in another term for completing the Dissertation. The total credit for the Dissertation will be 15 credits. The credit allocation for the dissertation proposal development and dissertation will be 3 credits and 12 credits respectively.</p>

                        <p>(ii) Dissertation Part-I will commence in the master’s first-year second-term and Dissertation Part-II in the second-year first-term (final term).</p>

                        <p>(iii) A student registered for Dissertation will undertake research work under the guidance of a supervisor and a co-supervisor (if necessary).</p>

                        <p>(iv) The Discipline Head will send a list of the students, dissertation title, names of the respective supervisors, and co-supervisors (if any) to the BOAS through EC before the end of the Term in which the student registers for Dissertation Part-II.</p>

                        <p>(v) The research needs to be carried out in this University or at the appropriate place(s) approved by the Supervisor in consultation with the Discipline Head.</p>

                        <p>(vi) The final evaluation of the Dissertation Part-II will be made at the end of the final Term. However, the evaluation of the Dissertation Part-I will be done in the corresponding term.</p>

                        <p>(vii) A student must submit the required number of printed and soft copies of Dissertation Part-II in the approved format through the Supervisors to the Discipline Head by a date to be fixed by the Discipline. The Dissertation will not usually be considered for evaluation if the plagiarism detection system yields a similarity index of more than 25% (excluding bibliography/references, quotes, and small sources with source exclusion threshold of ten-word counts).</p>

                        <p>(viii) Each student shall certify that the research work is his/her own and that the work was not submitted elsewhere for any other degree or diploma - the entire work has not been published as a monograph or a book before the Degree is awarded.</p>

                        <p>(ix) There shall generally be one Supervisor for each student, but a co-supervisor may also be appointed if needed. A teacher not below the rank of Assistant Professor will act as supervisor/co-supervisor. However, a Lecturer with MPhil/ Master's by Research/ Ph.D. degree is eligible to supervise/co-supervise a student. Co-supervision may also be allowed from other Disciplines of Khulna University/other universities or research institutes.</p>

                        <p>(x) If a student has any grievance about a Supervisor, or if a Supervisor has any complaint against a student, s/he may inform the Discipline Head about the issue in writing. The Discipline will decide such matters.</p>

                        <p>(xi) Pursuant to the leave rules of Khulna University, a Supervisor can remain absent from Khulna University (not more than six months) while continuing as a Supervisor. The online defense may be arranged in such cases if deemed necessary. Otherwise, the Co-supervisor (if any) or any other competent person will act as the Supervisor as per the guideline of the concerned Examination Committee. This will be applicable for projects and internships also.</p>

                        <p>(xii) A Dissertation (both proposal and Dissertation) will be evaluated out of 100 marks. Marks distribution of Dissertation Part-I: 0821 05 FWT 5202 Dissertation Proposal Development will be as follows:</p>
                        <ul>
                            <li>
                                <div class="row">
                                    <div class="col-md-5">
                                        <table class="table no-border" >
                                            <tbody>
                                                <tr>
                                                    <td>(a) Assessment of Supervisor</td>
                                                    <td>30 Marks</td>
                                                </tr>
                                                <tr>
                                                    <td>(b) Proposal Presentation</td>
                                                    <td>70 Marks</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-7"></div>
                                </div>

                            </li>
                        </ul>
                        <p>Marks distribution for Dissertation Part-II: 0821 05 FWT 6102 Dissertation will be as follows:</p>

                        <ul>
                            <li>
                                <div class="row">
                                    <div class="col-md-5">
                                        <table class="table no-border" >
                                            <tbody>
                                                <tr>
                                                    <td>(a) Assessment of Supervisor</td>
                                                    <td>20 Marks</td>
                                                </tr>
                                                <tr>
                                                    <td>(b) Dissertation Evaluation</td>
                                                    <td>50 Marks</td>
                                                </tr>
                                                <tr>
                                                    <td>(c) Defense (Oral examination)</td>
                                                    <td>30 Marks</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-7"></div>
                                </div>

                            </li>
                        </ul>

                        <p>(xiii) Dissertation Part-II report will be evaluated by internal and external examiners. Supervisor/a teacher from the Discipline, decided by the Examination Committee, will act as the Internal Examiner. The External Examiner shall be selected from outside the Discipline/University. The examiners must be eligible to be a supervisor/co-supervisor as stated in sub-sections (ix-xi) under this article. The two examiners will evaluate the dissertation report separately, and the average marks will be considered for grading. However, if the marks given by the examiners vary by 20% or more, a third examiner from outside the University will be appointed by the Chairman of the Examination Committee. Among the three marks given by the examiners, an average of the closest two will be considered for grading. However, if the marks are equidistant, the average of the three marks will be considered for grading.</p>

                        <p>(xiv) Every student submitting a dissertation in partial fulfillment of the requirements of a degree will be required to appear at proposal presentation for Dissertation Part-I and defense board of Dissertation Part-II respectively on the dates fixed by the Discipline Head in consultation with the Supervisor(s). Such presentation and defense may be arranged online if deemed necessary to the concerned authority. A student must satisfy the examiners that s/he is capable of undertaking independent work and affording evidence of satisfactory knowledge related to the theory and techniques used in his/her research work.</p>

                        <p>(xv) Each Supervisor will submit a panel of five external examiners to the Discipline Head. The Discipline Head will arrange to get its approval from the appropriate authority. The Examination Committee will select one external member from the approved panel.</p>

                        <p>(xvi) If any change is required in the title/supervisor/co-supervisor/examiner/etc., the Discipline Head will send it to the BOAS through EC.</p>

                        <p>(xvii) Dissertation Part-l: Proposal Defense Board, of four members as follows will evaluate the presentation:</p>
                        <ul>
                            <li>
                                <div class="row">
                                    <div class="col-md-5">
                                        <table class="table no-border" >
                                            <tbody>
                                                <tr>
                                                    <td>(a) Head/Professor of the Discipline</td>
                                                    <td>Chairman</td>
                                                </tr>
                                                <tr>
                                                    <td>(b) Supervisor</td>
                                                    <td>Member</td>
                                                </tr>
                                                <tr>
                                                    <td>(c) Co-supervisor (if any) </td>
                                                    <td>Member</td>
                                                </tr>
                                                <tr>
                                                    <td>(d) One/Two teachers of the Discipline*</td>
                                                    <td>Member</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-7"></div>
                                </div>
                            </li>
                        </ul>
                        <p>(* nominated by the Discipline Head from the relevant field)</p>

                        <p>(xviii) Dissertation Part-II: Dissertation Defense Board consisting five will evaluate the defense:</p>
                        <ul>
                            <li>
                                <div class="row">
                                    <div class="col-md-6">
                                        <table class="table no-border" >
                                            <tbody>
                                                <tr>
                                                    <td>(a) Head/Professor of the Discipline</td>
                                                    <td>Chairman</td>
                                                </tr>
                                                <tr>
                                                    <td>(b) Supervisor</td>
                                                    <td>Member</td>
                                                </tr>
                                                <tr>
                                                    <td>(c) Co-supervisor (if any) </td>
                                                    <td>Member</td>
                                                </tr>
                                                <tr>
                                                    <td>(d) One/Two teachers of the Discipline**</td>
                                                    <td>Member</td>
                                                </tr>
                                                <tr>
                                                    <td>(e) External Examiner</td>
                                                    <td>Member</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-6"></div>
                                </div>

                            </li>
                        </ul>
                        <p>(** nominated by the Discipline Head from the relevant field)</p>

                        <p>(xix) A three-member committee may conduct the proposal or final defense in case of unavailability of one/two members mentioned in sub-sections (xvii) and (xviii) under this article. If the Chairman is unavailable to be present in the Defense board, the senior most of the present internal members will act as the Chairman</p>

                        <p>(xx) If the Discipline Head supervises any Dissertation, a teacher from the Discipline capable of supervising a Dissertation nominated by the examination committee and endorsed by the Discipline Head will act as the Chairman</p>

                        <p>(xxi) If any examiner is unable to accept the appointment or has to relinquish his/her appointment before/during the examination, the Examination committee will select</p>
                    </div>

                    <h5 class="mt-4">25. Project under Mixed-mode</h5>
                    <div class="content">
                        <p>(i)A student undertaking a project work will register 06 credits in the second- year first-term (final Term) under the guidance of a Supervisor. A teacher with MPhil/ Master’s by Research/ Ph.D. degree can supervise a student. The project work should be carried out in this University or at the appropriate place(s) approved by the Supervisor in consultation with the Discipline Head.</p>

                        <p>(ii)Final evaluation of the project report will usually be made at the end of the final Term for the student.</p>

                        <p>(iii) Each student shall certify that the research work is his/her own and that the work was not submitted elsewhere for any other degree or diploma - the entire work has not been published as a monograph or a book before the Degree is awarded.</p>

                        <p>(iv) A student must submit the required number of printed and soft copies of the project report in the approved format through the supervisors to the Discipline Head by a date to be fixed by the Discipline. The project report will not usually be considered for evaluation if the plagiarism detection system yields more than 25% (excluding bibliography/references, quotes, and small sources with a source exclusion threshold of ten-word counts).</p>

                        <p>(v) The project report will be evaluated by two examiners (internal and external examiners). However, if the marks given by the examiners vary by 20% or more, a third examiner from outside the University will be appointed by the Chairman of the Examination Committee. Among the three marks given by the examiners, an average of the closest two will be considered for grading. However, if the marks are equidistant, the average of the three marks will be considered for grading.</p>

                        <p>(vi) Supervisor/a teacher from the Discipline, decided by the Examination Committee, will act as the Internal Examiner. The External Examiner shall be selected from within or outside the Discipline. The examiners must be eligible to be a supervisor as stated in sub-section (i) under this article.</p>

                        <p>(vii) Project defense board will be constituted of three/four members as follows:</p>

                        <ul>
                            <li>
                                <div class="row">
                                    <div class="col-md-5">
                                        <table class="table no-border" >
                                            <tbody>
                                                <tr>
                                                    <td>(a) Head/Professor of the Discipline	</td>
                                                    <td>Chairman</td>
                                                </tr>
                                                <tr>
                                                    <td>(b) Supervisor</td>
                                                    <td>Member</td>
                                                </tr>
                                                <tr>
                                                    <td>(c) One teacher (optional) of the Discipline (nominated by the Head)</td>
                                                    <td>Member</td>
                                                </tr>
                                                <tr>
                                                    <td>(d) External Examiner	</td>
                                                    <td>Member</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-7"></div>
                                </div>

                            </li>
                        </ul>

                        <p>(viii) A project will be evaluated out of 100 marks. Marks distribution of the project will be as follows:</p>
                        <ul>
                            <li>
                                <div class="row">
                                    <div class="col-md-5">
                                        <table class="table no-border" >
                                            <tbody>
                                                <tr>
                                                    <td>(a) Assessments of the Supervisor </td>
                                                    <td>20 marks</td>
                                                </tr>
                                                <tr>
                                                    <td>(b) Project Report evaluation </td>
                                                    <td>50 marks</td>
                                                </tr>
                                                <tr>
                                                    <td>(c) Defense (Oral examination) </td>
                                                    <td>30 marks</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-7"></div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <h5 class="mt-4">26. Internship under Mixed-mode</h5>
                    <div class="content">
                        <p>(i) A student may be offered an internship in the second-year first-term (final Term). In such a case, the credit will be 06 Credits. There will be a Supervisor. A teacher with a post-graduate degree is capable of supervising an internship. The evaluation of the internship will be as follows:</p>

                        <ul>
                            <li>
                                <div class="row">
                                    <div class="col-md-5">
                                        <table class="table no-border">
                                            <tbody>
                                                <tr>
                                                    <td>(a) Continuation of the work (by Supervisor)</td>
                                                    <td>20 marks</td>
                                                </tr>
                                                <tr>
                                                    <td>(b) Report evaluation</td>
                                                    <td>50 marks</td>
                                                </tr>
                                                <tr>
                                                    <td>(c) Defence (Oral examination)</td>
                                                    <td>30 marks</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-7"></div>
                                </div>
                            </li>
                        </ul>

                        <p>(ii) The two examiners will evaluate the Internship report separately, and the average marks will be considered for grading. However, if the marks given by the examiners vary by 20% or more, a third examiner from outside the University will be appointed by the Chairman of the Examination Committee. Among the three marks given by the examiners, an average of the closest two will be considered for grading. However, if the marks are equidistant, the average of the three marks will be considered for grading.</p>

                        <p>(iii) Supervisor/a teacher from the Discipline, decided by the Examination Committee, will act as the Internal Examiner. The External Examiner shall be selected from within or outside the Discipline. The examiners must be eligible to be a supervisor as stated in article 15 of this Ordinance.</p>

                        <p>(iv) Internship Defence Board will be constituted of three/four members as follows:</p>

                        <ul>
                            <li>
                                <div class="row">
                                    <div class="col-md-5">
                                        <table class="table no-border">
                                            <tbody>
                                                <tr>
                                                    <td>(a) Head/Professor of the Discipline</td>
                                                    <td>Chairman</td>
                                                </tr>
                                                <tr>
                                                    <td>(b) Supervisor</td>
                                                    <td>Member</td>
                                                </tr>
                                                <tr>
                                                    <td>(c) One teacher (optional) of the Discipline (nominated by the Head)</td>
                                                    <td>Member</td>
                                                </tr>
                                                <tr>
                                                    <td>(d) External Examiner</td>
                                                    <td>Member</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-7"></div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <h5 class="mt-4">27. Publication of Results</h5>
                    <div class="content">
                        <p>(i) The Controller of Examinations will publish the result and preserve all the records for one year after the Degree is awarded. The result will be published subject to completing the required number of credits and fulfilling other requirements (for example, article/paper for ‘Master’s by Research’ mode students) within the stipulated time limit, as applicable.</p>

                        <p>A student can have his/her results re-examined by applying to the Controller of Examinations within 30 working days from the date of publication of results. However, s/he has to pay a re-examination fee fixed by the concerned authorities. The Controller of Examinations will take necessary measures regarding the matter in consultation with the Chairman of the Examination Committee. Answer script re-scrutiny and result re-examination related rules of the latest ‘Ordinance for Undergraduate Examination’ of Khulna University will generally be applicable for the Master’s programs also.</p>
                    </div>

                    <h5 class="mt-4">28. Academic Fees</h5>
                    <div class="content">
                        <p>The academic fees may be fixed and revised by the Khulna University authority.</p>
                    </div>

                    <h5 class="mt-4">29. Subsequent Ordinances</h5>
                    <div class="content">
                        <p>For related/relevant issues, which are not covered (or not cleared) in this Ordinance, provisions of the latest ‘Ordinance for Master’s Program’ ‘Ordinance for Undergraduate Program’ and ‘Ordinance for Undergraduate Examination’ of Khulna University may be consulted and applied. However, in case there is any conflict of this Ordinance with the subsequent ordinances(s), the provisions of this Ordinance shall prevail. Changes in the Master’s Ordinance of Khulna University will, however, be applied here automatically.</p>
                    </div>


                    <div class="mt-5 mb-5">
                        <table class="table table-bordered">
                            <thead class="thead-dark ">
                                <tr class="bg-secondary text-white">
                                    <th colspan="4" class="text-center">MSc in Forestry Curriculum Committee of the Discipline/POE</th>
                                </tr>
                                <tr>
                                    <th scope="col">Serial No.</th>
                                    <th scope="col">Name and Address</th>
                                    <th scope="col">Designation in the Committee</th>
                                    <th scope="col">Signature</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1.</th>
                                    <td>Professor Dr. Md. Golam Rakkibu<br>Forestry and Wood Technology Discipline, Khulna University</td>
                                    <td>Chairman</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">2.</th>
                                    <td>Professor Dr. Mahmood Hossain<br>Forestry and Wood Technology Discipline, Khulna University</td>
                                    <td>Member</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">3.</th>
                                    <td>Professor Dr. Md. Nazmus Sadath<br>Forestry and Wood Technology Discipline, Khulna University</td>
                                    <td>Member</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">4.</th>
                                    <td>Professor Dr. Md. Nazrul Islam<br>Forestry and Wood Technology Discipline, Khulna University</td>
                                    <td>Member</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">5.</th>
                                    <td>Professor Dr. Abdus Subhan Mollick<br>Forestry and Wood Technology Discipline, Khulna University</td>
                                    <td>Member</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">6.</th>
                                    <td>Professor Md. Sharif Hasan Limon<br>Forestry and Wood Technology Discipline, Khulna University</td>
                                    <td>Member</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-5">
                        <table class="table table-bordered">
                            <thead class="bg-secondary text-white">
                                <tr>
                                    <th colspan="2" class="text-center">Approval Records</th>
                                </tr>
                                <tr>
                                    <th scope="col">Approving Authority</th>
                                    <th scope="col">Date of Approval</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Curriculum Committee of the Discipline</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Executive Committee of the School</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>BOAS (if applicable)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Academic Council</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Syndicate (if applicable)</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

    </div>

</body>

</html>
