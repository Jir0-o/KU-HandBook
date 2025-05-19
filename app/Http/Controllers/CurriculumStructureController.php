<?php

namespace App\Http\Controllers;

use App\Models\CurriculumStructure;
use App\Models\CurriculumTermDuration;
use App\Models\MappingDegreeTermDuration;
use Illuminate\Http\Request;

class CurriculumStructureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Display a listing of the resource for Curriculum Term Durations.
     */
    public function termDuration()
    {
        try{
            $termDuration = CurriculumTermDuration::where('is_active', 1)->get();

            if($termDuration->isEmpty()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Term Duration fetched Failed',
                    'data' => $termDuration
                ], 500);
            }

            return response()->json([
                'status' => true,
                'message' => 'Term Duration fetched successfully',
                'data' => $termDuration
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch Term Duration',
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
                'year' => 'required|exists:course_years,id',
                'term' => 'required|exists:course_terms,id',
                'requirements' => 'required|string',
                'gc' => 'required|numeric',
                'ac' => 'required|numeric',
                'total_week_in_term' => 'required|numeric',
                'minimum_cgpa' => 'required|numeric',
                'maximum_year' => 'required|numeric',
                'degree_program' => 'required|exists:degree_programs,id',
                'term_duration*' => 'required|array',
                'term_duration.*.id' => 'required|exists:curriculum_term_durations,id',
                'term_duration.*.duration' => 'required|numeric',
                'term_duration.*.duration_type' => 'required|string',
            ]);

            $curriculumStructure = CurriculumStructure::updateOrCreate(
                [
                    'degree_program_id' => $validation['degree_program'],
                ],
                [
                    'admission_requirement' => $validation['requirements'],
                    'total_min_credit_required' => $validation['gc'],
                    'available_credit' => $validation['ac'],
                    'total_class_per_term' => $validation['total_week_in_term'],
                    'min_cgpa_to_graduate' => $validation['minimum_cgpa'],
                    'max_academic_years_to_complete' => $validation['maximum_year'],
                    'year' => $validation['year'],
                    'term' => $validation['term'],
                    'version' => date('Y')
                ]
            );

            if(!$curriculumStructure){
                return response()->json([
                    'status' => false,
                    'message' => 'Failed to create Curriculum Structure',
                    'data' => $curriculumStructure
                ], 500);
            }

            if($curriculumStructure){
                foreach ($validation['term_duration'] as $termDuration) {

                    $mappingDegreeTermDuration = MappingDegreeTermDuration::updateOrCreate(
                        [
                            'degree_program_id' => $validation['degree_program'],
                            'term_duration_id' => $termDuration['id'],
                        ],
                        [
                            'unit' => $termDuration['duration_type'],
                            'value' => $termDuration['duration'],
                            'version' => date('Y')
                        ]
                    );

                    if(!$mappingDegreeTermDuration){
                        return response()->json([
                            'status' => false,
                            'message' => 'Failed to create Mapping Degree Term Duration',
                            'data' => $mappingDegreeTermDuration
                        ], 500);
                    }
                }
    
                return response()->json([
                    'status' => true,
                    'message' => 'Curriculum Structure created successfully',
                    'data' => $curriculumStructure
                ], 200);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Failed to create Curriculum Structure',
                    'data' => $curriculumStructure
                ], 500);
            }


        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to create Curriculum Structure',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(CurriculumStructure $curriculumStructure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CurriculumStructure $curriculumStructure)
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
                'year' => 'required|exists:course_years,id',
                'term' => 'required|exists:course_terms,id',
                'requirements' => 'required|string',
                'gc' => 'required|numeric',
                'ac' => 'required|numeric',
                'total_week_in_term' => 'required|numeric',
                'minimum_cgpa' => 'required|numeric',
                'maximum_year' => 'required|numeric',
                'degree_program' => 'required|exists:degree_programs,id',
                'term_duration*' => 'required|array',
                'term_duration.*.id' => 'required|exists:curriculum_term_durations,id',
                'term_duration.*.duration' => 'required|numeric',
                'term_duration.*.duration_type' => 'required|string',
            ]);

            $curriculumStructure = CurriculumStructure::updateOrCreate(
                [
                    'degree_program_id' => $validation['degree_program'],
                ],
                [
                    'admission_requirement' => $validation['requirements'],
                    'total_min_credit_required' => $validation['gc'],
                    'available_credit' => $validation['ac'],
                    'total_class_per_term' => $validation['total_week_in_term'],
                    'min_cgpa_to_graduate' => $validation['minimum_cgpa'],
                    'max_academic_years_to_complete' => $validation['maximum_year'],
                    'year' => $validation['year'],
                    'term' => $validation['term'],
                    'version' => date('Y')
                ]
            );

            if(!$curriculumStructure){
                return response()->json([
                    'status' => false,
                    'message' => 'Failed to create Curriculum Structure',
                    'data' => $curriculumStructure
                ], 500);
            }

            if($curriculumStructure){

                foreach ($validation['term_duration'] as $termDuration) {

                    $mappingDegreeTermDuration = MappingDegreeTermDuration::updateOrCreate(
                        [
                            'degree_program_id' => $validation['degree_program'],
                            'term_duration_id' => $termDuration['id'],
                        ],
                        [
                            'unit' => $termDuration['duration_type'],
                            'value' => $termDuration['duration'],
                            'version' => date('Y')
                        ]
                    );

                    if(!$mappingDegreeTermDuration){
                        return response()->json([
                            'status' => false,
                            'message' => 'Failed to create Mapping Degree Term Duration',
                            'data' => $mappingDegreeTermDuration
                        ], 500);
                    }
                }

                return response()->json([
                    'status' => true,
                    'message' => 'Curriculum Structure created successfully',
                    'data' => $curriculumStructure
                ], 200);

                
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Failed to create Curriculum Structure',
                    'data' => $curriculumStructure
                ], 500);
            }

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to create Curriculum Structure',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CurriculumStructure $curriculumStructure)
    {
        //
    }
}
