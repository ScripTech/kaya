<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provincias;
use App\Http\Resources\ProvinciaResource;
use App\Models\Distritos;
use App\Http\Resources\DistritoResource;
class ProvinciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return ProvinciaResource::get();
        //return "Provincias";

        $provincias = Provincias::get();
        return ProvinciaResource::collection($provincias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Add Provincia
        $newProvincia = new Provincias;
        $newProvincia->nome = $request->input('nome');
        $newProvincia->status = $request->input('status');
        $newProvincia->pais_id = 1;
        $newProvincia->created_at = now();
        $newProvincia->updated_at = now();

        $newProvincia->save();
        return $newProvincia;


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Provincias  $provincia
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $provincia = Provincias::findOrfail($id);
        return new ProvinciaResource($provincia);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Provincias  $provincia
     * @return \Illuminate\Http\Response
     */
    public function showDistritos($id)
    {
        //
        $distritos = Distritos::get()->where('provincias_id', '=', 3);
        return DistritoResource::collection($distritos);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Provincias  $provincia
     * @return \Illuminate\Http\Response
     */
    public function edit(Provincia $provincia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Provincias  $provincia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provincia $provincia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Provincias  $provincia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provincia $provincia)
    {
        //
    }
}
