<?php

namespace App\Http\Controllers;

use App\Models\MappingCloPlo;
use App\Models\MappingPeoPlo;
use App\Models\PloDetail;
use App\Models\PloTitle;
use Illuminate\Http\Request;

class PLODetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $PLODetails = PloDetail::where('is_active', 1)->get();

            if($PLODetails->isEmpty()) {
                return response()->json([
                    'status' => false,
                    'message' => 'PLO Details fetched Failed',
                    'data' => $PLODetails
                ], 500);
            }
            return response()->json([
                'status' => true,
                'message' => 'PLO Details fetched successfully',
                'data' => $PLODetails
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch PLO Details',
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
        try {
            $validation = $request->validate([
                'name' => 'required|string',
                'sub_name' => 'required|string',
                'code' => 'required|string',
                'degree_program' => 'required|exists:degree_programs,id',
                'details' => 'required|string',
                'skill_type' => 'required|string',
                'dynamicValues*' => 'nullable|array',
                'dynamicValues.*.attributeCode' => 'nullable|string',
                'dynamicValues.*.attributeDetails' => 'nullable|string',
            ]);

            $PLOTitle = new PloTitle();
            $PLOTitle->name = $validation['name'];
            $PLOTitle->sub_name = $validation['sub_name'];
            $PLOTitle->version = date('Y');

            $PLOTitle->save();

            $PLO = new PloDetail();
            $PLO->skill_type = $validation['skill_type'];
            $PLO->code = $validation['code'];
            $PLO->description = $validation['details'];
            $PLO->plo_title_id = $PLOTitle->id;
            $PLO->degree_program_id = $validation['degree_program'];
            $PLO->version = date('Y');

            $PLO->save();

            if (isset($validation['dynamicValues'])) {
                foreach ($validation['dynamicValues'] as $dynamicValue) {
                    $dynamicPLO = new PloDetail();
                    $dynamicPLO->code = $dynamicValue['attributeCode'];
                    $dynamicPLO->description = $dynamicValue['attributeDetails'];
                    $dynamicPLO->plo_title_id = $PLOTitle->id;
                    $dynamicPLO->degree_program_id = $validation['degree_program'];
                    $dynamicPLO->skill_type = $validation['skill_type'];
                    $dynamicPLO->version = date('Y');

                    // Save the dynamic graduate attribute
                    $dynamicPLO->save();
                }
            }

            return response()->json([
                'status' => true,
                'message' => 'PLO created successfully',
                'data' => $PLO
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to create PLO',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $PLODetails = PloDetail::where('degree_program_id', $id)->get();

            if($PLODetails->isEmpty()) {
                return response()->json([
                    'status' => false,
                    'message' => 'PLO Details fetched Failed',
                    'data' => $PLODetails
                ], 500);
            }

            $PloIds = PloDetail::where('degree_program_id', $id)->pluck('id');

            $mappingPeoPlo = MappingPeoPlo::whereIn('plo_id', $PloIds)->get();

            return response()->json([
                'status' => true,
                'message' => 'PLO Details fetched successfully',
                'data' => $PLODetails,
                'mappingPeoPlo' => $mappingPeoPlo
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch PLO Details',
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PLODetail $pLODetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $validation = $request->validate([
                'name' => 'required|string',
                'sub_name' => 'required|string',
                'code' => 'required|string',
                'degree_program' => 'required|exists:degree_programs,id',
                'details' => 'required|string',
                'skill_type' => 'required|string',
                'dynamicValues*' => 'nullable|array',
                'dynamicValues.*.id' => 'nullable|exists:plo_details,id',
                'dynamicValues.*.attributeCode' => 'nullable|string',
                'dynamicValues.*.attributeDetails' => 'nullable|string',
            ]);

            if($request->EditFlag == true) {
                $ploDetails = PloDetail::find($id);

                // Check if PloDetail exists before proceeding
                if (!$ploDetails) {
                    return response()->json([
                        'status' => false,
                        'message' => 'PLO not found',
                    ], 404);
                }
            
                $ploTitle = PloTitle::find($ploDetails->plo_title_id);
            
                // Check if PloTitle exists
                if (!$ploTitle) {
                    return response()->json([
                        'status' => false,
                        'message' => 'PLO Title not found',
                    ], 404);
                }
            
                // Update PloTitle
                $ploTitle->update([
                    'name' => $validation['name'],
                    'sub_name' => $validation['sub_name'],
                ]);
            
                // Update PloDetails
                $ploDetails->update([
                    'code' => $validation['code'],
                    'description' => $validation['details'],
                ]);

                $storePlodetailsId = [];

                $storePlodetailsId[] = $ploDetails->id;

                if (isset($validation['dynamicValues'])) {
                    foreach ($validation['dynamicValues'] as $dynamicValue) {

                        $dynamicPLOId = $dynamicValue['id'] ?? null;

                        $dynamicPLOUpdate = PloDetail::updateOrCreate(
                            [
                                'id' => $dynamicPLOId
                            ],
                            [
                                'code' => $dynamicValue['attributeCode'],
                                'description' => $dynamicValue['attributeDetails'],
                                'plo_title_id' => $ploTitle->id,
                                'degree_program_id' => $validation['degree_program'],
                                'skill_type' => $validation['skill_type'],
                                'version' => date('Y'),
                            ]
                        );

                        $storePlodetailsId[] = $dynamicPLOUpdate->id;
                    }
                }

                $existingPlodetails = PloDetail::where('plo_title_id', $ploTitle->id)->pluck('id')->toArray();

                $deletePlodetails = array_diff($existingPlodetails, $storePlodetailsId);

                foreach ($deletePlodetails as $id) {
                    $PLO = PloDetail::find($id);

                    if ($PLO) {
                        MappingPeoPlo::where('plo_id', $PLO->id)->delete();
                        $PLO->delete();
                    }
                }

                return response()->json([
                    'status' => true,
                    'message' => 'PLO updated successfully',
                    'data' => $ploDetails
                ], 200);
            }

            $oldPLODetail = PloDetail::find($id);

            if($oldPLODetail) {

                $oldPLODetailTitleId = $oldPLODetail->plo_title_id;

                if ($oldPLODetailTitleId) {
                    MappingPeoPlo::where('plo_id', $oldPLODetail->id)->delete();
                    PloDetail::where('plo_title_id', $oldPLODetailTitleId)->delete();

                    PloTitle::where('id', $oldPLODetailTitleId)->delete();
                }
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'PLO not found',
                ], 404);
            }

            $PLOTitle = new PloTitle();
            $PLOTitle->name = $validation['name'];
            $PLOTitle->sub_name = $validation['sub_name'];
            $PLOTitle->version = date('Y');

            $PLOTitle->save();

            $PLO = new PloDetail();
            $PLO->skill_type = $validation['skill_type'];
            $PLO->code = $validation['code'];
            $PLO->description = $validation['details'];
            $PLO->plo_title_id = $PLOTitle->id;
            $PLO->degree_program_id = $validation['degree_program'];
            $PLO->version = date('Y');

            $PLO->save();

            if (isset($validation['dynamicValues'])) {
                foreach ($validation['dynamicValues'] as $dynamicValue) {
                    $dynamicPLO = new PloDetail();
                    $dynamicPLO->code = $dynamicValue['attributeCode'];
                    $dynamicPLO->description = $dynamicValue['attributeDetails'];
                    $dynamicPLO->plo_title_id = $PLOTitle->id;
                    $dynamicPLO->degree_program_id = $validation['degree_program'];
                    $dynamicPLO->skill_type = $validation['skill_type'];
                    $dynamicPLO->version = date('Y');

                    // Save the dynamic graduate attribute
                    $dynamicPLO->save();
                }
            }

            return response()->json([
                'status' => true,
                'message' => 'PLO updated successfully',
                'data' => $PLO
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to update PLO',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PLODetail $pLODetail)
    {
        //
    }
}
