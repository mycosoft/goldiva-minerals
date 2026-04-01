<?php

namespace App\Http\Middleware;

use App\Models\PageVisit;
use Closure;
use Illuminate\Http\Request;

class TrackPageVisits
{
    public function handle(Request $request, Closure $next)
    {
        PageVisit::create([
            'page' => $request->path(),
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'user_id' => auth()->id(),
            'visited_at' => now(),
        ]);

        return $next($request);
    }
}
