<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Editor
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
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->hasrole('vendor')) {
            return redirect()->route('/vendor');
        }

        if (Auth::user()->hasrole('editor')) {
            return redirect()->route('/editor');
        }
    }
}

