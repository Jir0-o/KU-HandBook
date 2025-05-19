<?php

namespace App\Http\Controllers;

use App\Models\CourseStrategy;
use App\Models\MappingCloStrategy;
use Illuminate\Http\Request;

class CourseStrategyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $courseStrategies = CourseStrategy::where('is_active', 1)->get();

            if($courseStrategies->isEmpty()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Course Strategies fetched Failed',
                    'data' => $courseStrategies
                ], 500);
            }
            return response()->json([
                'status' => true,
                'message' => 'Course Strategies fetched successfully',
                'data' => $courseStrategies
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch Course Strategies',
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
                'mappingData' => 'required|array', // Ensure mappingData is an array and is required
                'mappingData.*' => 'required|array', // Ensure each item in mappingData is an array and is required
                'mappingData.*.cloId' => 'required|integer', // Ensure peoId is required and is an integer
                'mappingData.*.strategies' => 'required|array', // Ensure umId is required and is an integer
                'mappingData.*.strategies.*' => 'required|array', // Ensure value is required and is a string
                'mappingData.*.strategies.*.strategyId' => 'required|integer', // Ensure value is required and is a string
                'mappingData.*.strategies.*.value' => 'nullable|string', // Ensure value is required and is a string
                'mappingData.*.strategies.*.strategyName' => 'required|string', // Ensure value is required and is a string
            ]);

            if (empty($validation['mappingData'])) {
                return response()->json([
                    'status' => false,
                    'message' => 'Request data is empty',
                ], 400);
            }

            // Loop through the data array
            foreach ($validation['mappingData'] as $cloArray) {
                if (empty($cloArray)) {
                    return response()->json([
                        'status' => false,
                        'message' => 'CLO array is empty',
                    ], 400);
                }
            
                foreach ($cloArray['strategies'] as $strategy) {
                    // Check if the value is "yes" or "no" for each strategy
                    if ($strategy['value'] === 'yes') {
                        // Store the cloId and strategyId in the database
                        MappingCloStrategy::updateOrCreate(
                            [
                                'clo_id' => $cloArray['cloId'],
                                'strategy_id' => $strategy['strategyId']
                            ],
                            [
                                'description' => $strategy['strategyName'],
                                'version' => date('Y')
                            ]
                        );
                    } elseif ($strategy['value'] === 'no') {
                        // Delete rows where value is "no"
                        MappingCloStrategy::where('clo_id', $cloArray['cloId'])
                            ->where('strategy_id', $strategy['strategyId'])
                            ->delete();
                    } else {
                        // Handle other cases if needed
                    }
                }
            }            
            return response()->json([
                'status' => true,
                'message' => 'CLO and Strategie mapped successfully',
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to map CLOs and Strategies',
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(CourseStrategy $courseStrategy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CourseStrategy $courseStrategy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CourseStrategy $courseStrategy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseStrategy $courseStrategy)
    {
        //
    }
}
