<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Auth;

class LoginAuthController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest', ['only' => 'showLoginForm']);
    }

    public function showLoginForm(){
        return view('loginAuth');
        
    }
    
    public function login(){
    
        $credentials = $this->validate(request(), [
            'email' => 'email|required|string',
            'password' => 'required|string'
        ]);

        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        }
            return back()
            ->withErrors(['email' => 'Esos datos no coinciden en nuestros registros'])
            ->withInput(request(['email']));
    }

    public function logout(){
        Auth::logout();
        return view('loginAuth');
    }
}
