<?php

namespace App\Http\Controllers;

use App\Informe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class InformeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $datos['informes'] = Informe::select('informes.id', 'informes.descripcion', 
                                'u.nombre as usuario', 'c.nombre as cliente',
                                 'informes.created_at')
                            ->join('usuario as u', 'u.id', '=', 'informes.id_usuario')
                            ->join('usuario as c', 'c.id', '=', 'informes.id_cliente')
                            ->where('informes.estado', '=', '1')
                            ->paginate(2);

        $contador = (new UsuarioController)->count();

        return view('informe.index', $contador, $datos);
    }

    public function create()
    {
        //
        $contador = (new UsuarioController)->count();

        return view('informe.create', $contador);
        
    }

    public function store(Request $request)
    {
        //
        $value = $request['cliente'];
        $exploded_value = explode('|', $value);
        $cliente_nombre = $exploded_value[0];
        $cliente_id = $exploded_value[1];

        $request['cliente'] = $cliente_nombre;

        $ruta = "informes/";
        $nombre ='informe'."-".$request['fecha']."-".$cliente_nombre.".pdf";
        $datos['plantilla'] = $request;
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('/informe/plantillaInforme', $datos);

        $output = $pdf->output();

        file_put_contents( $ruta.$nombre, $output);
        
        Informe::create([
            'descripcion'=> $nombre,
            'id_usuario' => auth()->user()->id,
            'id_cliente' => $cliente_id
        ]);

        return redirect('informe')->with('Mensaje', 'Informe generado correctamente.' );
    }

    public function destroy($id)
    {
        //

        Informe::where('id', '=', $id)->update([
            'estado' => 0
        ]);

        return redirect('informe')->with('Mensaje', 'Usuario eliminado correctamente.' );
        
    }

    
}