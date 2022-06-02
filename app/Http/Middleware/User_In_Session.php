<?php
/*
namespace App\Http\Middleware;

use Illuminate\Http\Request;

use Closure;
*/
/**
 * When a request is given how to handle
 * @param Illuminate\Http\Request for $request
 * @param \Closure   $next 
 * @return mixed
 * 
 */
/*
 class User_In_Session{

   public function handle ( Request $request, Closure $next){
//wenn url has /login and session active

        if($request->path()=='login' ){
            if($request->session()->has('user')){
                return redirect("/");
            }
            else{
                return view("login");
            }
        }
        return $next($request);
        }
 }
?>
*/