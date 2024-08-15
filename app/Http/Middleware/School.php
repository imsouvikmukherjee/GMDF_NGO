<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class School
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if(Auth::user()->usertype != 'Student'){
            return redirect()->back();
        }

        if(Auth::user()->usertype == null){
            return redirect()->back();
        }

        // return redirect()->route('school.dashboard');
        return $next($request);

     
    }
}
