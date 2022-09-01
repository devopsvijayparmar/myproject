<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PurchasePlan as PurchasePlans;
use DB;
use Closure;


class PurchasePlan
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
	    $auth = Auth::user();
		$plan = PurchasePlans::userPurchasePlan($auth->id);
		if(empty($plan))
		{
			abort(401);
		}
		else
		{
			return $next($request);
		}
		
    }
}
