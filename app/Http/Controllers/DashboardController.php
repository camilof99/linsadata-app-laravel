<?php

namespace App\Http\Controllers;

use App\Usuario;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
       
        if (auth()->user()->role == 2) {
            return redirect('cliente');
        }else if (auth()->user()->role == 3) {
            return redirect('informe');
        }

        $contador = (new UsuarioController)->count();

        return view('dashboard', $contador);
    }

}
