<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contribuyente;

class ContribuyenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contribuyente=Contribuyente::all();
        return view("indexcontribuyente",compact("contribuyente"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("createcontribuyente" );
        
        
    }
    
    /**public function consultado()
    {
        $respuesta=Http::get('https://mindicador.cl/api');
        $dolar= $respuesta->json();
        return view('consultado', compact('dolar'));
    }
    */
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
            $contribuyente = new Contribuyente();
            $contribuyente->nombre=$request->input("nombre");
            $contribuyente->apellido_paterno=$request->input("apellido_paterno");
            $contribuyente->apellido_materno=$request->input("apellido_materno");
            $contribuyente->clave_catastral=$request->input("clave_catastral");

            $contribuyente->save();
            return view("showcontribuyente");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $contribuyente = Contribuyente::find($id);
        return view("showcontribuyente", compact("contribuyente"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contribuyente = Contribuyente::find($id);
        $contribuyente->save( );
        return redirect("contribuyentes/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
