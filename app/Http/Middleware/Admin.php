<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();

        if ($user && $user->role === 'admin') {
            // Log thông tin role
            Log::info('User role: ' . $user->role);

            // Tiếp tục xử lý nếu người dùng có quyền admin
            return $next($request);
        }

        // Ghi log về việc truy cập không hợp lệ
        Log::warning('Unauthorized access attempt by user: ' . ($user ? $user->id : 'Guest'));

        // Redirect về trang chủ hoặc trang login
        return redirect('/')->with('error', 'Unauthorized access.');
    }
}
