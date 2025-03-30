<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class LoginController extends Controller
{
    public function show(){
        return view('auth.login');
    }

    public function handle(){
      
        $success = auth()->attempt([
            'email' => request('email'),
            'password' =>request('password')
        ],request()->has('remember'));
        
        if($success){
            return redirect()->to(RouteServiceProvider::HOME)->with('success','Sesión iniciada');;
         }

         return back()->withErrors([
            'email'=>'Las credencciales no coinciden con la Db',
         ]);
    }
}
