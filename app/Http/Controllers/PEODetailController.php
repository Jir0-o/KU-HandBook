<?php

namespace App\Http\Controllers;

use App\Models\MappingPeoPlo;
use App\Models\MappingPeoUm;
use App\Models\PeoDetail;
use App\Models\PeoTitle;
use App\Models\PloDetail;
use Illuminate\Http\Request;

class PEODetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $PEODetails = PeoDetail::where('is_active', 1)->get();

            if ($PEODetails->isEmpty()) {
                return response()->json([
                    'status' => false,
                    'message' => 'PEO Details fetched Failed',
                    'data' => $PEODetails
                ], 500);
            }

            return response()->json([
                'status' => true,
                'message' => 'PEO Details fetched successfully',
                'data' => $PEODetails
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch PEO Details',
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
                'poeName' => 'required|string',
                'poeSubName' => 'required|string',
                'poeCode' => 'required|string',
                'poeDegreeProgram' => 'required|exists:degree_programs,id',
                'poeDomain' => 'required|exists:domains,id',
                'poeDetails' => 'required|string',
                'poeDynamicValues*' => 'nullable|array',
                'poeDynamicValues.*.poeAttributeCode' => 'nullable|string',
                'poeDynamicValues.*.poeAttributeDetails' => 'nullable|string',
                'poeDynamicValues.*.poeDomains' => 'nullable|exists:domains,id',
            ]);

            $PEOTitle = new PeoTitle();
            $PEOTitle->name = $validation['poeName'];
            $PEOTitle->sub_name = $validation['poeSubName'];
            $PEOTitle->version = date('Y');

            $PEOTitle->save();

            if($PEOTitle){
                $PEO = new PeoDetail();
                $PEO->code = $validation['poeCode'];
                $PEO->description = $validation['poeDetails'];
                $PEO->peo_title_id = $PEOTitle->id;
                $PEO->degree_program_id = $validation['poeDegreeProgram'];
                $PEO->domain_id = implode(',', $validation['poeDomain']);
                $PEO->version = date('Y');

                $PEO->save();
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Failed to create PEO Title',
                ], 500);
            }

            if (isset($validation['poeDynamicValues'])) {
                foreach ($validation['poeDynamicValues'] as $dynamicValue) {
                    $dynamicPEO = new PeoDetail();
                    $dynamicPEO->code = $dynamicValue['poeAttributeCode'];
                    $dynamicPEO->description = $dynamicValue['poeAttributeDetails'];
                    $dynamicPEO->peo_title_id = $PEOTitle->id;
                    $dynamicPEO->degree_program_id = $validation['poeDegreeProgram'];
                    $dynamicPEO->domain_id = implode(',', $dynamicValue['poeDomains']);
                    $dynamicPEO->version = date('Y');

                    // Save the dynamic graduate attribute
                    $dynamicPEO->save();
                }
            }

            return response()->json([
                'status' => true,
                'message' => 'PEO created successfully',
                'data' => $PEO
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to create PEO',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $PEODetail = PeoDetail::where('degree_program_id', $id)->get();

            if (!$PEODetail) {
                return response()->json([
                    'status' => false,
                    'message' => 'PEO not found',
                ], 404);
            }

            $poeIds = PeoDetail::where('degree_program_id', $id)->pluck('id');

            $mappingPeoUm = MappingPeoUm::whereIn('peo_id', $poeIds)->get();

            return response()->json([
                'status' => true,
                'message' => 'PEO fetched successfully',
                'data' => $PEODetail,
                'mappingPeoUm' => $mappingPeoUm
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to fetch PEO',
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PloDetail $pEODetail)
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
                'poeName' => 'required|string',
                'poeSubName' => 'required|string',
                'poeCode' => 'required|string',
                'poeDegreeProgram' => 'required|exists:degree_programs,id',
                'poeDomain' => 'required|exists:domains,id',
                'poeDetails' => 'required|string',
                'poeDynamicValues*' => 'nullable|array',
                'poeDynamicValues.*.id' => 'nullable|exists:peo_details,id',
                'poeDynamicValues.*.poeAttributeCode' => 'nullable|string',
                'poeDynamicValues.*.poeAttributeDetails' => 'nullable|string',
                'poeDynamicValues.*.poeDomains' => 'nullable|exists:domains,id',
            ]);


            if($request->poeEditFlag == true){

                $poe = PeoDetail::find($id);

                $poetitle = PeoTitle::find($poe->peo_title_id);

                if(!$poetitle) {
                    return response()->json([
                        'status' => false,
                        'message' => 'PEO Title not found',
                    ], 404);
                }

                if(!$poe) {
                    return response()->json([
                        'status' => false,
                        'message' => 'PEO not found',
                    ], 404);
                }

                $poetitle->update([
                    'name' => $validation['poeName'],
                    'sub_name' => $validation['poeSubName'],
                    'version' => date('Y')
                ]);

                $poe->update([
                    'code' => $validation['poeCode'],
                    'description' => $validation['poeDetails'],
                    'domain_id' => implode(',', $validation['poeDomain']),
                    'version' => date('Y')
                ]);

                $storePEOIds = [];

                $storePEOIds[] = $poe->id;

                if (isset($validation['poeDynamicValues'])) {
                    foreach ($validation['poeDynamicValues'] as $dynamicValue) {

                        $dynamicPEOId = $dynamicValue['id'] ?? null;

                        $dynamicPEOUpdate = PeoDetail::updateOrCreate(
                            [
                                'id' => $dynamicPEOId
                            ],
                            [
                                'code' => $dynamicValue['poeAttributeCode'],
                                'description' => $dynamicValue['poeAttributeDetails'],
                                'peo_title_id' => $poetitle->id,
                                'degree_program_id' => $validation['poeDegreeProgram'],
                                'domain_id' => implode(',', $dynamicValue['poeDomains']),
                                'version' => date('Y')
                            ]
                        );

                        $storePEOIds[] = $dynamicPEOUpdate->id;
                    }
                }

                // Delete all PEOs that are not in the storePEOIds array
                $existingPEOIds = PeoDetail::where('peo_title_id', $poetitle->id)->pluck('id')->toArray();

                $PEOIdsToDelete = array_diff($existingPEOIds, $storePEOIds);

                foreach ($PEOIdsToDelete as $id) {
                    $PEO = PeoDetail::find($id);

                    if ($PEO) {
                        MappingPeoUm::where('peo_id', $PEO->id)->delete();
                        MappingPeoPlo::where('peo_id', $PEO->id)->delete();
                        $PEO->delete();
                    }
                }

                return response()->json([
                    'status' => true,
                    'message' => 'PEO Updated successfully',
                    'data' => $poe
                ], 200);

            } else {

                $oldPEODetail = PeoDetail::find($id);

                if($oldPEODetail) {

                    $oldPEODetailTitleId = $oldPEODetail->peo_title_id;

                    if ($oldPEODetailTitleId) {
                        MappingPeoUm::where('peo_id', $oldPEODetail->id)->delete();
                        MappingPeoPlo::where('peo_id', $oldPEODetail->id)->delete();
                        PeoDetail::where('peo_title_id', $oldPEODetailTitleId)->delete();

                        PeoTitle::where('id', $oldPEODetailTitleId)->delete();
                    }
                } else {
                    return response()->json([
                        'status' => false,
                        'message' => 'PEO not found',
                    ], 404);
                }

                $PEOTitle = new PeoTitle();
                $PEOTitle->name = $validation['poeName'];
                $PEOTitle->sub_name = $validation['poeSubName'];
                $PEOTitle->version = date('Y');

                $PEOTitle->save();

                $PEO = new PeoDetail();
                $PEO->code = $validation['poeCode'];
                $PEO->description = $validation['poeDetails'];
                $PEO->peo_title_id = $PEOTitle->id;
                $PEO->degree_program_id = $validation['poeDegreeProgram'];
                $PEO->domain_id = implode(',', $validation['poeDomain']);
                $PEO->version = date('Y');

                $PEO->save();

                if (isset($validation['poeDynamicValues'])) {
                    foreach ($validation['poeDynamicValues'] as $dynamicValue) {
                        $dynamicPEO = new PeoDetail();
                        $dynamicPEO->code = $dynamicValue['poeAttributeCode'];
                        $dynamicPEO->description = $dynamicValue['poeAttributeDetails'];
                        $dynamicPEO->peo_title_id = $PEOTitle->id;
                        $dynamicPEO->degree_program_id = $validation['poeDegreeProgram'];
                        $dynamicPEO->domain_id = implode(',', $dynamicValue['poeDomains']);
                        $dynamicPEO->version = date('Y');

                        // Save the dynamic graduate attribute
                        $dynamicPEO->save();
                    }
                }

                return response()->json([
                    'status' => true,
                    'message' => 'PEO Updated successfully',
                    'data' => $PEO
                ], 200);
            }

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to update PEO',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PloDetail $pEODetail)
    {
        //
    }
}