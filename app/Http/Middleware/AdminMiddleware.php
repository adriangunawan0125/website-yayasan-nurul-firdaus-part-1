<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!Auth::guard('admin')->check()) {
            \Log::info('Admin belum login.');
            return redirect()->route('admin.login')->with('error', 'Harap login terlebih dahulu.');
        }
    
        return $next($request);
    }
}
    
