<?php

namespace App\Http\Controllers;

use App\Models\MappingPeoPlo;
use Illuminate\Http\Request;

class MappingPEOPLOController extends Controller
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
                'mappingData' => 'required|array', // Ensure mappingData is an array and is required
                'mappingData.*' => 'required|array', // Ensure each item in mappingData is an array and is required
                'mappingData.*.*.ploId' => 'required|integer', // Ensure ploId is required and is an integer
                'mappingData.*.*.peoId' => 'required|integer', // Ensure peoId is required and is an integer
                'mappingData.*.*.value' => 'nullable|string', // Ensure value is optional and is a string
            ]);
        
            // Access the validated data
            $mappingData = $validation['mappingData'];
        
            // Loop through the data array
            foreach ($mappingData as $poeArray) {
                if (empty($poeArray)) {
                    return response()->json([
                        'status' => false,
                        'message' => 'PLO array is empty',
                    ], 400);
                }
        
                foreach ($poeArray as $mappingData) {
                    // Check if the value is "yes"
                    if ($mappingData['value'] === 'yes') {
                        // Store the peoId and ploId in the MappingPeoPlo table
                        MappingPeoPlo::updateOrCreate(
                            [
                                'peo_id' => $mappingData['peoId'],
                                'plo_id' => $mappingData['ploId']
                            ],
                            [
                                'peo_id' => $mappingData['peoId'],
                                'plo_id' => $mappingData['ploId']
                            ]
                        );
                    } elseif ($mappingData['value'] === 'no') {
                        // Delete rows where value is "no"
                        MappingPeoPlo::where('peo_id', $mappingData['peoId'])
                            ->where('plo_id', $mappingData['ploId'])
                            ->delete();
                    }
                }
            }
        
            return response()->json([
                'status' => true,
                'message' => 'PLO and PEO mapped successfully',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to map PLO and PEO',
                'error' => $e->getMessage()
            ], 500);
        }        
    }

    /**
     * Display the specified resource.
     */
    public function show(MappingPeoPlo $mappingPEOPLO)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MappingPeoPlo $mappingPEOPLO)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MappingPeoPlo $mappingPEOPLO)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MappingPeoPlo $mappingPEOPLO)
    {
        //
    }
}
