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

        $contador = (new UsuarioController)->count();

        return view('informe.index', $contador);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $contador = (new UsuarioController)->count();

        return view('informe.create', $contador);
        
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Informe  $informe
     * @return \Illuminate\Http\Response
     */
    public function show(Informe $informe)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Informe $informe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Informe $informe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Informe $informe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
    }

    
}