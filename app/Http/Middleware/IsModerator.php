<?php

namespace App\Http\Middleware;

use DB;
use Closure;
use Auth;

class IsModerator
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
        if(Auth::user()){
            $usr=Auth::user()->id;
            $dali=0;

            $user_id = DB::table('firme')->where('id',$usr )->first();
            if(isset($user_id)) {
                if ($user_id->id == $usr) $dali = 1;
            }
            if ($dali) {

                return $next($request);

            }
        }

        return redirect('/');
    }
}
