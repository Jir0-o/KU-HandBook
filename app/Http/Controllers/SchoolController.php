<?php

namespace App\Http\Controllers;

use App\Models\ApplicableSession;
use App\Models\BnqfLevel;
use App\Models\Discipline;
use App\Models\IscedCode;
use App\Models\LanguageOfStudy;
use App\Models\Location;
use App\Models\School;
use App\Models\StudyMode;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $user = User::find(Auth::user()->id);
            
            if($user->hasRole('Super Admin')){

                $schools = School::where('is_active', 1)->get();

                if($schools->isEmpty())
                    return response()->json([
                        'status' => false,
                        'message' => 'No schools found',
                    ]
                );
            } elseif($user->hasRole('School Admin')) {
                $schools = School::where('id', $user->school_id)->get();


                if($schools->isEmpty())
                    return response()->json([
                        'status' => false,
                        'message' => 'No schools found',
                    ]
                );
            } elseif($user->hasRole('Discipline Admin')) {
                $schools = School::where('id', $user->school_id)->get();


                if($schools->isEmpty())
                    return response()->json([
                        'status' => false,
                        'message' => 'No schools found',
                    ]
                );
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Unauthorized',
                ]);
            }

            return response()->json([
                'status' => true,
                'message' => 'Schools fetched successfully',
                'data' => $schools,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to fetch schools',
                'error' => $e->getMessage(),
            ]);
        }
    }

    public function schoolDisicpline($id){
        try {
            $user = User::find(Auth::user()->id);
            
            if($user->hasRole('Super Admin')){

                $schools = Discipline::where('is_active', 1)->where('school_id', $id)->get();

                if($schools->isEmpty())
                    return response()->json([
                        'status' => false,
                        'message' => 'No schools found',
                    ]
                );
            } elseif($user->hasRole('School Admin')) {
                $schools = Discipline::where('is_active', 1)->where('school_id', $id)->get();


                if($schools->isEmpty())
                    return response()->json([
                        'status' => false,
                        'message' => 'No schools found',
                    ]
                );
            } elseif($user->hasRole('Discipline Admin')) {
                $schools = Discipline::where('is_active', 1)->where('school_id', $id)->get();


                if($schools->isEmpty())
                    return response()->json([
                        'status' => false,
                        'message' => 'No schools found',
                    ]
                );
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Unauthorized',
                ]);
            }

            return response()->json([
                'status' => true,
                'message' => 'Schools fetched successfully',
                'data' => $schools,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to fetch schools',
                'error' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Display a listing of the resource for Location.
     */
    public function locationIndex()
    {
        try {
            $location = Location::where('is_active', 1)->get();

            if($location->isEmpty())
                return response()->json([
                    'status' => false,
                    'message' => 'No locations found',
                ]
            );

            return response()->json([
                'status' => true,
                'message' => 'Locations fetched successfully',
                'data' => $location,
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to fetch locations',
                'error' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Display a listing of the resource for BNQF Level.
     */
    public function bnqfIndex()
    {
        try {
            $bnqf = BnqfLevel::where('is_active', 1)->get();

            if($bnqf->isEmpty())
                return response()->json([
                    'status' => false,
                    'message' => 'No BNQF levels found',
                ]
            );

            return response()->json([
                'status' => true,
                'message' => 'BNQF levels fetched successfully',
                'data' => $bnqf,
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to fetch BNQF levels',
                'error' => $e->getMessage(),
            ]);
        }

    }

    /**
     * Display a listing of the resource for ISCED.
     */
    public function iscedIndex()
    {
        try {
            $isced = IscedCode::where('is_active', 1)->get();

            if($isced->isEmpty())
                return response()->json([
                    'status' => false,
                    'message' => 'No ISCED codes found',
                ]
            );

            return response()->json([
                'status' => true,
                'message' => 'ISCED codes fetched successfully',
                'data' => $isced,
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to fetch ISCED codes',
                'error' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Display a listing of the resource for StudyMode.
     */
    public function studyModeIndex()
    {
        try {
            $studyMode = StudyMode::where('is_active', 1)->get();

            if($studyMode->isEmpty())
                return response()->json([
                    'status' => false,
                    'message' => 'No study modes found',
                ]
            );

            return response()->json([
                'status' => true,
                'message' => 'Study modes fetched successfully',
                'data' => $studyMode,
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to fetch study modes',
                'error' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Display a listing of the resource for Language.
     */
    public function languageIndex()
    {
        try {
            $language = LanguageOfStudy::where('is_active', 1)->get();

            if($language->isEmpty())
                return response()->json([
                    'status' => false,
                    'message' => 'No languages found',
                ]
            );

            return response()->json([
                'status' => true,
                'message' => 'Languages fetched successfully',
                'data' => $language,
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to fetch languages',
                'error' => $e->getMessage(),
            ]);
        }
    }
    
    /**
     * Display a listing of the resource for ApplicationSession.
     */
    public function applicableSessionIndex()
    {
        try {
            $applicationSession = ApplicableSession::where('is_active', 1)->get();

            $applicationSessionAll = ApplicableSession::all();

            if($applicationSession->isEmpty())
                return response()->json([
                    'status' => false,
                    'message' => 'No application sessions found',
                ]
            );

            return response()->json([
                'status' => true,
                'message' => 'Application sessions fetched successfully',
                'data' => $applicationSession,
                'all' => $applicationSessionAll
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to fetch application sessions',
                'error' => $e->getMessage(),
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
    public function show(School $school)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(School $school)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, School $school)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(School $school)
    {
        //
    }
}
