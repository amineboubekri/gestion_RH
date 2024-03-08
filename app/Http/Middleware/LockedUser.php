<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LockedUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    
        public function handle(Request $request, Closure $next)
        {
            $user = $request->user();

            if (!$user || !$user->is_locked) {
                abort(403, 'Unauthorized action.');
            }

            return $next($request);
        }
    }

