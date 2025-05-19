<?php

namespace App\Http\Controllers;

use App\Models\CourseArea;
use Illuminate\Http\Request;

class CourseAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $courseAreas = CourseArea::all();

            if($courseAreas->isEmpty()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Course Areas fetched Failed',
                    'data' => $courseAreas
                ], 500);
            }
            return response()->json([
                'status' => true,
                'message' => 'Course Areas fetched successfully',
                'data' => $courseAreas
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch Course Areas',
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
    public function show(CourseArea $courseArea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CourseArea $courseArea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CourseArea $courseArea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseArea $courseArea)
    {
        //
    }
}
