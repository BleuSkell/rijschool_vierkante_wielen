<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class IsInstructor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        // Controleer of de gebruiker een rol heeft en of die rol 'Instructor' is
        if ($user && $user->role && $user->role->name === 'Instructor') {
            return $next($request);
        }
        abort(403, 'Toegang geweigerd: alleen voor instructeurs.');
    }
}
