<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Insumo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
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
        $datos['usuarios'] = Usuario::select('usuario.id', 'usuario.DNI', 'usuario.nombre',
                                'usuario.telefono', 'usuario.direccion', 'usuario.email',
                                'role.rol')
                        ->join('role', 'usuario.role', '=', 'role.id_role')
                        ->where('estado', '=', '1')
                                    ->where('role', '!=', '3')
                                    ->orderBy('role', 'asc')
                                    ->paginate(2);

        $contador = $this->count();

        return view('usuario.index', $datos, $contador);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $contador = $this->count();

        return view('usuario.create', $contador);
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
            'email' => 'email|required|string|unique:usuario',
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
            'role' => $request->role
        ]);
        
        return redirect('usuario')->with('Mensaje', 'Trabajador agregado correctamente.' );
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

        $contador = $this->count();

        return view('usuario.edit', compact('usuarios'), $contador);
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
                'password' => Hash::make($request->password),
                'role' => $request->role
            ]);
        }

        return redirect('usuario')->with('Mensaje', 'Trabajador actualizado correctamente.' );
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
        Usuario::destroy($id);

        return redirect('usuario')->with('Mensaje', 'Trabajador eliminado correctamente.' );
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

        $contador['insumosCant'] = Insumo::where('estado', '=', '1')
                            ->count();

        $contador['insumosList'] = Insumo::all()->where('estado', '=', '1');

        $contador['clienteList'] = Usuario::all()
                                 ->where('role', '=', '3')
                                 ->where('estado', '=', '1');

        return $contador;
    }
}
