<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
{
    if (!$request->expectsJson()) {
        if ($request->routeIs('admin.*')) {
            session()->flash('fail', 'You must login first');
            return route('admin.login');
        } elseif ($request->routeIs('investor.*')) {
            session()->flash('fail', 'You must login first');
            return route('investor.login');
        } elseif ($request->routeIs('umkm.*')) {
            session()->flash('fail', 'You must login first');
            return route('umkm.login');
        }
    }
    
    // Jika request expectsJson() atau tidak cocok dengan rute di atas, kembalikan null
    return null;
}

}
