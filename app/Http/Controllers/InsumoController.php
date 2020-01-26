<?php

namespace App\Http\Controllers;

use App\Insumo;
use Illuminate\Http\Request;

class InsumoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $datos['insumos'] = Insumo::select('insumos.id','insumos.descripcion', 'insumos.cantidad', 
                            'insumos.foto', 'usuario.nombre')
                        ->join('usuario', 'usuario.id', '=', 'insumos.id_usuario')
                        ->where('insumos.estado', '=', '1')
                        ->paginate(3);

        $contador = (new UsuarioController)->count();
        return view('insumo.index',$datos,$contador);
    }

    public function create(){
        $contador = (new UsuarioController)->count();
        return view('insumo.create',$contador);
    }

    public function store(Request $request){
        $insumos = new Insumo;

        $insumos->descripcion = $request->input('descripcion');
        $insumos->cantidad = $request->input('cantidad');
        $insumos->id_usuario = auth()->user()->id;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img/insumos',$filename); //Se envía a la ruta
            $insumos->foto = $filename;
        }else{
            $insumos->foto='';
        }

        $insumos->save();
        return redirect('insumo')->with('Mensaje','Insumo agregado.');
    }

    public function edit($id){
        $insumo = Insumo::findOrFail($id);
        $contador = (new UsuarioController)->count();
        return view('insumo.edit',compact('insumo'),$contador);
    }

    public function update(Request $request, $id){
        $insumos = Insumo::findOrFail($id);

        $insumos->descripcion = $request->input('descripcion');
        $insumos->cantidad = $request->input('cantidad');

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img/insumos',$filename);
            $insumos->foto = $filename;
        }else{
            $insumos->foto= $insumos->foto;
        }
        $insumos->save();
        return redirect('insumo')->with('Mensaje','Actulización exitosa');
    }

    public function destroy($id){

        Insumo::where('id', '=', $id)->update([
            'estado' => 0
        ]);

        return redirect('insumo')->with('Mensaje','Insumo eliminado');
    }
}
