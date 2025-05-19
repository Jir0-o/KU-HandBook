<?php

namespace App\Http\Controllers;

use App\Models\ApplicableSession;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SettingsController extends Controller
{
    public function index()
    {
        // $roles = Role::with('permissions')->latest()->get();
        // $permissions = Permission::all();
        // $users = User::with('roles')->latest()->get();

        
        return view('backend.pages.settings');
    }

    public function store(Request $request)
    {
        try{
            $request->validate([
                'name' => "required|unique:roles,name"
            ]);
    
            $role = Role::create(['name' => $request->name , 'guard_name'=>'web']);

            $permissions = Permission::whereIn('id', $request->permission)->get();
            
            $role->syncPermissions($permissions);

            return response()->json(['message' => 'Role created successfully!', 'data' => $role]);

            
        }catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()]);
        }
    }

    public function show()
    {
        try {
            $setting = Setting::with([
                'applicableSession',
            ])->latest()->get();

            if(!$setting){
                return response()->json([
                    'status' => true,
                    'message' => 'No setting found',
                    'data' => $setting
                ], 200);
            }

            return response()->json([
                'status' => true,
                'message' => 'Setting fetched successfully',
                'data' => $setting
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch setting',
                'error' => $e->getMessage()
            ]);
        }
    }

    public function edit($id)
    {
        
    }

    public function updateSetting(Request $request, $id)
    {
        try {
            $setting = Setting::find($id);

            if($setting) {

                $Session = $request->applicable_session_id;

                $setting->applicable_session_id = $Session;

                //update applicable_sessions table
                $applicableSession = ApplicableSession::where('id', $Session)->first();

                if(!$applicableSession){
                    return response()->json([
                        'status' => false,
                        'message' => 'Applicable session not found',
                    ], 404);
                }

                // Update all sessions to set 'is_active' to 0
                ApplicableSession::where('is_active', 1)->update(['is_active' => 0]);

                // Update the specified session to set 'is_active' to 1
                $applicableSession->update([
                    'is_active' => 1
                ]);

                // Store the old profile photo path
                $oldlogoPath = $setting->logo;

                // Delete the old profile photo if it exists
                if ($request->hasFile('logo') && $oldlogoPath) {
                    // Delete the old image from the storage
                    Storage::delete('public/global_assets/system_images/' . $oldlogoPath);
                }

                // Update profile photo if provided
                if ($request->hasFile('logo')) {
                    $image = $request->file('logo');
                    $imageName = date('ymd') . '.' . time() . '.' . $image->getClientOriginalName();
                    $image->move(base_path('public/global_assets/system_images'), $imageName);
                    $setting->logo = $imageName;
                }

                $setting->save();
            } else {
                
                if ($request->hasFile('logo')) {
                    $image = $request->file('logo');
                    $imageName = date('ymd') . '.' . time() . '.' . $image->getClientOriginalName();
                    $image->move(base_path('public/global_assets/system_images'), $imageName);
                    $systemImage = $imageName;
                } else {
                    $systemImage = null;
                }

                $setting = Setting::create([
                    'applicable_session_id' => $request->applicable_session_id,
                    'logo' => $systemImage,
                ]);
            }

            return response()->json([
                'status' => true,
                'message' => 'Setting updated successfully',
                'data' => $setting
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to update setting',
                'error' => $e->getMessage()
            ]);
        }
    }

    public function destroy($id)
    {
        
    }
}