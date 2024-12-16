<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;


class BanUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::check()) {
            return redirect('login')->with(Auth::logout());
        }

        if(Auth::user()->statuss == 1) {
            return redirect('login')->with(Auth::logout());
        }

        //Аналог
        /*if(Auth::user()->statuss == 1 && Auth::check()) {
            return back()->with(Auth::logout());
        }*/



        // Закрити доступ тільки до адмінки, але залогінитися при цьому (logout буде) (це якщо будуть потрібні якійсь сторінки залишити доступними)
        /*if(Auth::user()->statuss == 1 && Auth::check()) {
            return abort(404, 'Page Not Found');
        }*/



        //Не працює
        /*if(Auth::attempt(['statuss' => 1, 'password' => $request->password])) {
            return abort(404, 'Page Not Found');
        }*/

        return $next($request);



    }
}
