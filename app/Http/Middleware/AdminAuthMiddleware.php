<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuthMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Kiểm tra nếu người dùng không đăng nhập, chuyển hướng đến trang đăng nhập
        if (!auth()->check()) {
            return redirect('/login');
        }

        // Tiếp tục xử lý request nếu người dùng đã đăng nhập
        return $next($request);
    }
}
