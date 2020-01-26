<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClienteController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //

        if (auth()->user()->role == 3) {
            return redirect('informe');
        }
        
        $datos['usuarios'] = Usuario::where('role', '=', '3')
                                    ->where('estado', '=', '1')
                                    ->orderBy('role', 'asc')
                                    ->paginate(5);

        $contador = (new UsuarioController)->count();


        return view('cliente.index', $datos, $contador);
    }

    public function create()
    {
        //
        if (auth()->user()->role == 3) {
            return redirect('informe');
        }

        $contador = (new UsuarioController)->count();

        return view('cliente.create', $contador);
    }

    public function store(Request $request)
    {
        //

        if (auth()->user()->role == 3) {
            return redirect('informe');
        }

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
            'role' => '3'
        ]);
        
        return redirect('cliente')->with('Mensaje', 'Cliente agregado correctamente.' );
    }

    public function edit($id)
    {
        //
        if (auth()->user()->role == 3) {
            return redirect('informe');
        }

        $usuarios = Usuario::findOrFail($id);

        $contador = (new UsuarioController)->count();

        return view('cliente.edit', compact('usuarios'), $contador);
    }

    public function update(Request $request, $id)
    {
        //
        if (auth()->user()->role == 3) {
            return redirect('informe');
        }

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

    public function destroy($id)
    {
        //
        if (auth()->user()->role == 3) {
            return redirect('informe');
        }
        
        Usuario::destroy($id);Usuario::where('id', '=', $id)->update([
            'estado' => 0
        ]);

        return redirect('cliente')->with('Mensaje', 'Usuario eliminado correctamente.' );
    }

}
