<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use DB;
use Closure;


class AuthenticateSuperadmin
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
		$auth = Auth::guard('superadmin');
		if(isset($auth)){
			return $next($request);
		}else{
			return redirect('/super-admin/login');
		}
    }
}
