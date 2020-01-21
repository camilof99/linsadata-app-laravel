<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //
        $datos['usuarios'] = Usuario::paginate(5)
            ->where('role', '=', '3')
            ->where('estado', '=', '1');

        return view('cliente.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cliente.create');
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

        $datosUsuario = $this->validate(request(), [
            'email' => 'email|required|string|unique:usuarios',
            'password' => 'required|string'
        ]);
   
        // LLamamos al modelo usuario y le decimos que inserte los datos en la bd
        Usuario::create([
            'DNI'=> $request->DNI,
            'nombre' => $request->nombre,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => '3'
        ]);
        
        return redirect('cliente')->with('Mensaje', 'Cliente agregado correctamente.' );
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

        return view('cliente.edit', compact('usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $datosUsuario = request()->except(['_token', '_method']);

        if($datosUsuario['password'] == null) {
            $datosUsuario = request()->except(['password', '_token', '_method']);
            Usuario::where('id', '=', $id)->update($datosUsuario);
        } else {
            Usuario::where('id', '=', $id)->update([
                'DNI'=> $request->DNI,
                'nombre' => $request->nombre,
                'telefono' => $request->telefono,
                'direccion' => $request->direccion,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
        }

        return redirect('cliente')->with('Mensaje', 'Usuario actualizado correctamente.' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        UsuarioModel::destroy($id);

        return redirect('cliente')->with('Mensaje', 'Usuario eliminado correctamente.' );
    }
}
