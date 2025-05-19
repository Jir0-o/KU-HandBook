<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Actions\Role\CreateRole;
use App\Actions\Role\UpdateRole;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Requests\RoleFormRequest;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::with('permissions')->latest()->get();
        $permissions = Permission::latest()->get();

        $user = User::find(Auth::user()->id);

        if($user->hasRole('Super Admin')){
            $users = User::with(['roles'])->latest()->get();
        } elseif($user->hasRole('School Admin')) {
            $users = User::with(['roles'])->where('school_id', $user->school_id)->latest()->get();
        } elseif($user->hasRole('Discipline Admin')) {
            $users = User::with(['roles'])->where('discipline_id', $user->discipline_id)->latest()->get();
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Unauthorized',
            ]);
        }
        return response()->json(['message' => 'Role Fatch Successfull', 'data' => $roles, 'permissions' => $permissions, 'users' => $users, 'status' => 200]);
    }

    public function getRoles()
    {
        $user = User::find(Auth::user()->id);

        if($user->hasRole('Super Admin')){
            $roles = Role::all();
        } elseif($user->hasRole('School Admin')) {
            $roles = Role::where('name', '!=', 'Super Admin')->get();
        } elseif($user->hasRole('Discipline Admin')) {
            $roles = Role::where('name', '!=', 'Super Admin')->where('name', '!=', 'School Admin')->get();
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Unauthorized',
            ]);
        }

        return response()->json(['message' => 'Role Fatch Successfull', 'data' => $roles, 'status' => 200]);
    }

    public function getPermissions()
    {
        $permissions = Permission::all();

        return response()->json(['message' => 'Permission Fatch Successfull', 'data' => $permissions, 'status' => 200]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();
        // $permission_groups = User::getPermissionGroup();

        return view('role.create', compact(['permissions']));
    }

    /**
     *
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => "required|unique:roles,name"
        ]);

        $role = Role::create(['name' => $request->name , 'guard_name'=>'web']);
        
        $permissions = [];
        foreach($request->permissions as $payloadkey){
            $get_header_keys = Permission::where('id', '=', $payloadkey)->get();
            array_push($permissions,$get_header_keys);
        }
        $role->syncPermissions($permissions);

        return response()->json(['message' => 'Role Created Successfully!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permissions = Permission::all();
        $role = Role::with('permissions')->find($id);
        $data = $role->permissions->pluck('id')->toArray();

        return response()->json(['role' => $role, 'permissions' => $permissions, 'data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => "required|unique:roles,name, $role->id"
        ]);

        $role->update(['name'=>$request->name]);
        $permissions = [];
        foreach($request->permissions as $payloadkey){
            $get_header_keys = Permission::where('id', '=', $payloadkey)->get();
            array_push($permissions,$get_header_keys);
        }
        $role->syncPermissions($permissions);

        return response()->json(['message' => 'Role Updated Successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();

         return response()->json(['message' => 'Role Deleted Successfully!']);

    }
}
