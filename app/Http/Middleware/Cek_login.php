<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Cek_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $roles): Response
    {
        // Cek sudah login atau belum. Jika belum kembali ke halaman login
        if (!Auth::check()) {
            return redirect('login');
        }
        // Simpan data user pada variabel $user
        $user = Auth::user();

        // Jika user memiliki level sesuai pada kolom pada lanjutan request
        if ($user->level_id == $roles) {
            return $next($request);
        }

        // JIka tidak memilki akses maka kembalikan ke halaman login
        return redirect('login')->with('error', 'Maaf anda tidak memiliki akses');
    }
}
