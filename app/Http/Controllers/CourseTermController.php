<?php

namespace App\Http\Controllers;

use App\Models\CourseTerm;
use Illuminate\Http\Request;

class CourseTermController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $courseTerms = CourseTerm::where('is_active', 1)->get();

            if($courseTerms->isEmpty()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Course Terms fetched Failed',
                    'data' => $courseTerms
                ], 500);
            }
            return response()->json([
                'status' => true,
                'message' => 'Course Terms fetched successfully',
                'data' => $courseTerms
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch Course Terms',
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
    public function show(CourseTerm $courseTerm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CourseTerm $courseTerm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CourseTerm $courseTerm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseTerm $courseTerm)
    {
        //
    }
}
