<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Closure;


class CheckTitle
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
		$user = User::getRecordByTitle($request->subdomain);
		if(empty($user))
		{
			abort(404);
		}
		elseif($user->block_website == 1 || $user->deactive_account == 'deactive'){
			return response()->view('front.block_website');
		}
		else
		{
			return $next($request);
		}
		
    }
}
