<?php

namespace App\Http\Controllers;

use App\Models\Discipline;
use App\Models\DisciplineMission;
use App\Models\DisciplineMissionTitle;
use App\Models\DisciplineObjective;
use App\Models\DisciplineObjectiveTitle;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DisciplineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {

            $user = User::find(Auth::user()->id);

            if($user->hasRole('Super Admin')){

                $disciplines = Discipline::where('is_active', 1)->get();

                if($disciplines->isEmpty())
                    return response()->json([
                        'status' => false,
                        'message' => 'No disciplines found',
                    ]
                );
            } elseif($user->hasRole('School Admin')) {
                $disciplines = Discipline::where('school_id', $user->school_id)->get();

                if($disciplines->isEmpty())
                    return response()->json([
                        'status' => false,
                        'message' => 'No disciplines found',
                    ]
                );
            } elseif($user->hasRole('Discipline Admin')) {
                $disciplines = Discipline::find($user->discipline_id);

                if(!$disciplines)
                    return response()->json([
                        'status' => false,
                        'message' => 'No disciplines found',
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
                'message' => 'Disciplines fetched successfully',
                'data' => [$disciplines],
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to fetch disciplines',
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
        try {
            $validation = $request->validate([
                'school' => 'required|exists:schools,id',
                'discipline_title' => 'required|string',
                'discipline_sub_title' => 'required|string',
                'discipline_vision' => 'required|string',

                'mission_title' => 'required|string',
                'mission_code' => 'required|string',
                'discipline_Mission' => 'required|string',

                'objective_title' => 'required|string',
                'objective_code' => 'required|string',
                'discipline_objective' => 'required|string',

                'dynamicValuesForMission*' => 'nullable|array',
                'dynamicValuesForMission.*.attributeCode' => 'nullable|string',
                'dynamicValuesForMission.*.attributeDetails' => 'nullable|string',

                'dynamicValuesForObjective*' => 'nullable|array',
                'dynamicValuesForObjective.*.attributeCode' => 'nullable|string',
                'dynamicValuesForObjective.*.attributeDetails' => 'nullable|string',
            ]);

            $discipline = new Discipline();
            $discipline->school_id = $validation['school'];
            $discipline->name = $validation['discipline_title'];
            $discipline->short_name = $validation['discipline_sub_title'];
            $discipline->vision = $validation['discipline_vision'];
            $discipline->version = date('Y');

            $discipline->save();

            $missionTitle = new DisciplineMissionTitle();
            $missionTitle->name = $validation['mission_title'];
            $missionTitle->version = date('Y');

            $missionTitle->save();

            $mission = new DisciplineMission();
            $mission->code = $validation['mission_code'];
            $mission->description = $validation['discipline_Mission'];
            $mission->discipline_mission_title_id = $missionTitle->id;
            $mission->discipline_id = $discipline->id;
            $mission->version = date('Y');

            $mission->save();

            if (isset($validation['dynamicValuesForMission'])) {
                foreach ($validation['dynamicValuesForMission'] as $dynamicValue) {
                    $dynamicMission = new DisciplineMission();
                    $dynamicMission->code = $dynamicValue['attributeCode'];
                    $dynamicMission->description = $dynamicValue['attributeDetails'];
                    $dynamicMission->discipline_mission_title_id = $missionTitle->id;
                    $dynamicMission->discipline_id = $discipline->id;
                    $dynamicMission->version = date('Y');

                    $dynamicMission->save();
                }
            }

            $objectiveTitle = new DisciplineObjectiveTitle();
            $objectiveTitle->name = $validation['objective_title'];
            $objectiveTitle->version = date('Y');

            $objectiveTitle->save();

            $objective = new DisciplineObjective();
            $objective->code = $validation['objective_code'];
            $objective->description = $validation['discipline_objective'];
            $objective->discipline_objective_title_id = $objectiveTitle->id;
            $objective->discipline_id = $discipline->id;
            $objective->version = date('Y');

            $objective->save();

            if (isset($validation['dynamicValuesForObjective'])) {
                foreach ($validation['dynamicValuesForObjective'] as $dynamicValue) {
                    $dynamicObjective = new DisciplineObjective();
                    $dynamicObjective->code = $dynamicValue['attributeCode'];
                    $dynamicObjective->description = $dynamicValue['attributeDetails'];
                    $dynamicObjective->discipline_objective_title_id = $objectiveTitle->id;
                    $dynamicObjective->discipline_id = $discipline->id;
                    $dynamicObjective->version = date('Y');

                    $dynamicObjective->save();
                }
            }

            return response()->json([
                'status' => true,
                'message' => 'Discipline created successfully',
                'data' => $discipline
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to create Discipline',
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Discipline $discipline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Discipline $discipline)
    {
        //
    }

    /** 
     * Update the specified resource in storage.
     */
    public function update(Request $request, Discipline $discipline)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Discipline $discipline)
    {
        //
    }
}
