<?php

namespace App\Http\Middleware;

use Closure, Session;
use Illuminate\Http\Request;

class SignMid
{
    public function handle(Request $request, Closure $next)
    {
        if(Session::has('user_id')){
            return redirect('');
        }else{
            return $next($request);
        }
    }
}
