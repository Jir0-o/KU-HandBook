<?php

namespace App\Http\Controllers;

use App\Models\MappingPeoUm;
use Illuminate\Http\Request;

class MappingPEOUMSController extends Controller
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
                'mappingData.*.*.peoId' => 'required|integer', // Ensure peoId is required and is an integer
                'mappingData.*.*.umId' => 'required|integer', // Ensure umId is required and is an integer
                'mappingData.*.*.value' => 'nullable|string', // Ensure value is required and is a string
            ]);

            if (empty($validation['mappingData'])) {
                return response()->json([
                    'status' => false,
                    'message' => 'Request data is empty',
                ], 400);
            }

            // Loop through the data array
            foreach ($validation['mappingData'] as $poeArray) {
                if (empty($poeArray)) {
                    return response()->json([
                        'status' => false,
                        'message' => 'PEO array is empty',
                    ], 400);
                }

                foreach ($poeArray as $mappingData) {
                    // Check if the value is "yes"
                    if ($mappingData['value'] === 'yes') {
                        // Store the peoId and umId in the MappingPeoUm table
                        MappingPeoUm::updateOrCreate(
                            [
                                'peo_id' => $mappingData['peoId'],
                                'um_id' => $mappingData['umId']
                            ],
                            [
                                'peo_id' => $mappingData['peoId'],
                                'um_id' => $mappingData['umId']
                            ]
                        );
                    } elseif ($mappingData['value'] === 'no') {
                        // Delete rows where value is "no"
                        MappingPeoUm::where('peo_id', $mappingData['peoId'])
                                   ->where('um_id', $mappingData['umId'])
                                   ->delete();
                    } else {

                    }
                }
            }

            return response()->json([
                'status' => true,
                'message' => 'PEO and UM mapped successfully',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to map PEO and UM',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(MappingPeoUm $mappingPEOUMS)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MappingPeoUm $mappingPEOUMS)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MappingPeoUm $mappingPEOUMS)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MappingPeoUm $mappingPEOUMS)
    {
        //
    }
}
