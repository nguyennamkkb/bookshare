<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;    
use App\User;
use App\Product;

class Adminloginmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::Check()) {
            $user=Auth::User();
            if ($user->id_role==1) {
                $tb=Product::where('id_status','>',1)->count();
                view()->share('thongbao',$tb);
                view()->share('Nguoidung', Auth::User());
                return $next($request);
            }
            else{
                return redirect('/');
            }
        }
        else{
            return redirect('login');
        }
        
    }
}
