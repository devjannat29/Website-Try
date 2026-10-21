<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if (!Auth::check()) {
            return redirect()->route('admin.login')->with('error', 'Please log in first to access the dashboard.');
        }

        if ($request->user()->role !== $role) {
            abort(403, 'Unauthorized access: You do not have permission to view this section.');
        }

        return $next($request);
    }
}
