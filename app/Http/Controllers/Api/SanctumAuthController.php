<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ModelHasRole;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;


class SanctumAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRoleSelection()
    {
        $userRoleIds = ModelHasRole::where('model_id', auth()->user()->id)->pluck('role_id');

        if($userRoleIds){
            $roles = Role::whereIn('id', $userRoleIds)->get();
        } else {
            $roles = null;
        }

        return view('role.selection', compact('roles'));
    }

    public function loginWithRole(Request $request, $id)
    {
        // Get the authenticated user
        $user = User::find(Auth::id());

        // Get the selected role
        $role = Role::findById($id);

        // Check if the user has the selected role
        if ($user->hasRole($role->name)) {

            // Get the selected role
            $selectedRole = Role::where('name', $role->name)->first();

            // Get all role IDs for the authenticated user
            $userRoleIds = $user->roles->pluck('name')->toArray();

            $user->syncRoles($selectedRole->name);

            // Ensure the selected role is at the beginning
            $reorderedRoleIds = array_unique(array_merge([$selectedRole->name], $userRoleIds));

            // Store the selected role in the session
            session(['reorderedRoleIds' => $reorderedRoleIds]);

            // Redirect the user to the dashboard or intended URL
            return redirect()->intended('/dashboard');
        } else {
            // Handle if the user does not have the selected role
            return redirect()->back()->with('error', 'You do not have permission to access this role.');
        }
    }

    public function syncRole()
    {
        try{
            $user = User::find(Auth::id());

            if($user->role_ids != null){
                $reorderedRoleIds = explode(',', $user->role_ids);

                if($reorderedRoleIds){
                    $user->syncRoles($reorderedRoleIds);
                }
            } else {
                
            }

            return response()->json([
                'status' => true,
                'message' => 'Roles Synced Successfully',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

    }

        /**
     * Login The User
     * @param Request $request
     * @return User
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Check if the user has multiple roles
            $userRoleIds = ModelHasRole::where('model_id', auth()->user()->id)->pluck('role_id');

            if ($userRoleIds->count() > 1) {
                // Redirect to role selection page
                return redirect()->intended('/role/selection');
            } else {
                // Get the user's role
                $role = Role::findById($userRoleIds->first());

                // Store the selected role in the local Storage
                session(['selected_role' => $role->name]);

                // Redirect to dashboard or intended URL
                return redirect()->intended('/dashboard');
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            //Validated
            $validateUser = Validator::make($request->all(),
            [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required'
            ]);

            if($validateUser->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            return response()->json([
                'status' => true,
                'message' => 'User Created Successfully',
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function logout(Request $request)
    {
        try {
            $request->user()->currentAccessToken()->delete();

            return response()->json([
                'status' => true,
                'message' => 'Logged Out Successfully',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
}
