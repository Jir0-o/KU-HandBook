<?php

namespace App\Http\Controllers;

use App\Models\UniversityMission;
use Illuminate\Http\Request;

class UniversityMissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $universityMissions = UniversityMission::where('is_active', 1)->get();

            if($universityMissions->isEmpty()) {
                return response()->json([
                    'status' => false,
                    'message' => 'University Missions fetched Failed',
                    'data' => $universityMissions
                ], 500);
            }
            return response()->json([
                'status' => true,
                'message' => 'University Missions fetched successfully',
                'data' => $universityMissions
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch University Missions',
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UniversityMission $universityMission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UniversityMission $universityMission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UniversityMission $universityMission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UniversityMission $universityMission)
    {
        //
    }
}
