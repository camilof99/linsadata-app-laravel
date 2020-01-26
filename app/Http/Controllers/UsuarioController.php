<?php

namespace App\Http\Controllers;

use App\Informe;
use App\Usuario;
use App\Insumo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //

        if (auth()->user()->role == 2) {
            return redirect('cliente');
        }else if (auth()->user()->role == 3) {
            return redirect('informe');
        }

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

    public function create()
    {
        //
        if (auth()->user()->role == 2) {
            return redirect('cliente');
        }else if (auth()->user()->role == 3) {
            return redirect('informe');
        }

        $contador = $this->count();

        return view('usuario.create', $contador);
    }

    public function store(Request $request)
    {
        //

        if (auth()->user()->role == 2) {
            return redirect('cliente');
        }else if (auth()->user()->role == 3) {
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
            'role' => $request->role
        ]);
        
        return redirect('usuario')->with('Mensaje', 'Trabajador agregado correctamente.' );
    }

    public function edit($id)
    {
        //

        if (auth()->user()->role == 2) {
            return redirect('cliente');
        }else if (auth()->user()->role == 3) {
            return redirect('informe');
        }

        $usuarios = Usuario::findOrFail($id);

        $contador = $this->count();

        return view('usuario.edit', compact('usuarios'), $contador);
    }

    public function update(Request $request, $id)
    {
        //
        if (auth()->user()->role == 2) {
            return redirect('cliente');
        }else if (auth()->user()->role == 3) {
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
                'password' => Hash::make($request->password),
                'role' => $request->role
            ]);
        }

        return redirect('usuario')->with('Mensaje', 'Trabajador actualizado correctamente.' );
    }

    public function destroy($id)
    {
        //

        if (auth()->user()->role == 2) {
            return redirect('cliente');
        }else if (auth()->user()->role == 3) {
            return redirect('informe');
        }
        
        Usuario::where('id', '=', $id)->update([
            'estado' => 0
        ]);

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

        $contador['informesCant'] = Informe::where('estado', '=', '1')
                            ->count();

        return $contador;
    }
}
