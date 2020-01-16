<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['usuarios'] = Usuario::paginate(5);

        return view('usuario.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $datosUsuario = request()->all();

        $datosUsuario = request()->except('_token'); //Excluimos token de seguridad

        // LLamamos al modelo usuario y le decimos que inserte los datos en la bd
        Usuario::insert($datosUsuario);
        
        return redirect('usuario')->with('Mensaje', 'Usuario agregado correctamente.' );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $usuarios = Usuario::findOrFail($id);

        return view('usuario.edit', compact('usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosUsuario = request()->except(['_token', '_method']);
        Usuario::where('id', '=', $id)->update($datosUsuario);

        //$usuarios = Usuario::findOrFail($id);
        //return view('usuario.edit', compact('usuarios'));

        return redirect('usuario')->with('Mensaje', 'Usuario actualizado correctamente.' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Usuario::destroy($id);

        return redirect('usuario')->with('Mensaje', 'Usuario eliminado correctamente.' );
    }
}
