<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role = null)
    {
        // Pastikan pengguna sudah terautentikasi
        if (!Auth::check()) {
            return redirect('/login');
        }

        // Ambil peran pengguna
        $user = Auth::user();

        // Cek apakah peran pengguna sesuai dengan yang dibutuhkan
        if ($role && $user->role !== $role) {
            // Jika tidak sesuai, arahkan ke halaman yang sesuai
            if ($user->role === 'admin') {
                return redirect('/admin/home');
            } elseif ($user->role === 'umkm') {
                return redirect('/umkm/home');
            } elseif ($user->role === 'investor') {
                return redirect('/investor/home');
            }
        }

        return $next($request);
    }
}
