<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureSelectedRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        $selectedRole = session('selected_role');

        if (!$user && !$selectedRole) {
            return redirect()->route('role.selection')->with('error', 'Role mismatch. Please select the correct role.');
        }

        return $next($request);
    }
}
