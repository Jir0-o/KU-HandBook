<?php

namespace App\Http\Controllers;

use App\Models\CourseYear;
use Illuminate\Http\Request;

class CourseYearController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $courseYears = CourseYear::where('is_active', 1)->get();

            if($courseYears->isEmpty()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Course Years fetched Failed',
                    'data' => $courseYears
                ], 500);
            }
            return response()->json([
                'status' => true,
                'message' => 'Course Years fetched successfully',
                'data' => $courseYears
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch Course Years',
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
    public function show(CourseYear $courseYear)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CourseYear $courseYear)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CourseYear $courseYear)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseYear $courseYear)
    {
        //
    }
}
