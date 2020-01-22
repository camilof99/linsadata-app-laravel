<?php

namespace App\Http\Controllers;

use App\Usuario;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $contador = $this->count();

        return view('dashboard', $contador);
    }

    public function count(){
        $contador['trabajadoresCant'] = Usuario::where('estado', '=', '1')
                            ->where('role', '!=', '3')
                            ->count();

        $contador['clientesCant'] = Usuario::where('estado', '=', '1')
                            ->where('role', '=', '3')
                            ->count();      
        
        $contador['usuariosCant'] = Usuario::where('estado', '=', '1')
                            ->count();

        return $contador;
    }

}
