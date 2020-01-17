<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAuthController extends Controller
{
    //
    public function LoginUsuario(Request $request, Usuario $user){
        
        $datosUsuario = request()->except('_token');

        if($user->loginAuth($datosUsuario)){
            return redirect('usuario');
        }else{
            return redirect('/')->with('Mensaje', 'Correo o contraseña incorrectos.' );
        }

    }
}
