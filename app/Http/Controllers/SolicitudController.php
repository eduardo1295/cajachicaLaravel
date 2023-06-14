<?php

namespace App\Http\Controllers;
use App\Models\Solicitud;
use App\Models\Concepto;
use App\Models\Departamento;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateSolicitudRequest;

class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $solicitud  = Solicitud::where('borradaxtda','=', 0)->orderBy('IdSolicitud','desc')
        ->limit(1500)
        ->get();
        $concepto = Concepto::get();
        $departamento  = Departamento::get();
        return view('solicitud.index', ['solicitudes' =>  $solicitud , 'concepto' => $concepto, 'departamento' => $departamento ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'Estamos en el show' ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Solicitud $solicitud)
    {
        // return $solicitud;
        $concepto = Concepto::where('hab_para_tda','=', 1)->get();
        $departamento  = Departamento::get();
        return view('solicitud.edit', ['solicitudes' =>  $solicitud , 'concepto' => $concepto, 'departamento' => $departamento ]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateSolicitudRequest $request, Solicitud $solicitud)
    {
        $solicitud->update($request->validated());
        return to_route('solicitud.index')->with('status', 'Solicitud Actualizada!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
