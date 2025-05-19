<?php

namespace App\Http\Controllers;

use App\Models\CourseType;
use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Attributes\Title;

class CourseTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $courseTypes = CourseType::where('is_active', 1)->get();

            if($courseTypes->isEmpty()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Course Types fetched Failed',
                    'data' => $courseTypes
                ], 500);
            }
            return response()->json([
                'status' => true,
                'message' => 'Course Types fetched successfully',
                'data' => $courseTypes
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch Course Types',
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
    public function show(CourseType $courseType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CourseType $courseType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CourseType $courseType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseType $courseType)
    {
        //
    }
}
