<?php

namespace App\Http\Controllers;

use App\Informe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class InformeController extends Controller
{
    //

    public function index()
    {
        //
        
        //$contador = $this->count();

        return view('informe.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('informe.create');
        
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
        return $request;
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('/informe/plantilla');
        return $pdf->stream();
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