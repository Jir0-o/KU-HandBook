<?php

namespace App\Http\Controllers;

use App\Models\CourseClo;
use App\Models\CourseInfo;
use App\Models\MappingCloPlo;
use Illuminate\Http\Request;

class MappingCLOPLOController extends Controller
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
            $data = $request->all();

           // Iterate over the data
            foreach ($data as $cloId => $ploIds) {
                // Check if CLO has associated PLO IDs
                if (!empty($ploIds)) {
                    // Store the data in MappingCloPlo model
                    MappingCloPlo::updateOrCreate(
                        [
                            'clo_id' => $cloId,
                        ],
                        [
                            'plo_ids' => implode(',', $ploIds),
                            'version' => date('Y')
                        ]
                    );
                }
            }

            return response()->json([
                'status' => true,
                'message' => 'CLOs and PLOs mapped successfully',
                'data' => $data
            ]);
        
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to map CLOs and PLOs',
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
            $cloIds = CourseClo::where('course_id', $id)->pluck('id')->toArray();

            $mapping = MappingCloPlo::whereIn('clo_id', $cloIds)->get();

            return response()->json([
                'status' => true,
                'message' => 'Mapping data fetched successfully',
                'data' => $mapping
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch mapping data',
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MappingCloPlo $mappingCLOPLO)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MappingCloPlo $mappingCLOPLO)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MappingCloPlo $mappingCLOPLO)
    {
        //
    }
}
