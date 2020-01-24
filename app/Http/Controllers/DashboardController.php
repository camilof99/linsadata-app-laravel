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
        $contador = (new UsuarioController)->count();

        return view('dashboard', $contador);
    }

}
