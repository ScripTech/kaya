<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universidades;
use App\Models\Distritos;
use App\Http\Resources\UniversidadesResource;

class UniversidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $universidades = Universidades::get();
        return UniversidadesResource::collection($universidades);
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
        //
        $universidade = new Universidades;
        $universidade->nome = $request->input('nome_facul');
        $universidade->distritos_id = $request->input('distrito_id');
        // Get Id da Provincia
        $getProv_id = Distritos::select("provincias_id")->where('id', '=', $universidade->distritos_id)->get()->first();
        $universidade->provincias_id = $getProv_id->provincias_id;
        $universidade->created_at = now();
        $universidade->updated_at = now();
        $universidade->status = 1;

        $universidade->save();
        return $universidade;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $universidade = Universidades::findOrfail($id);
        return new UniversidadesResource($universidade);
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
        //
        $universidade = Universidades::findOrfail($id);
        $universidade->id = $id;
        $universidade->nome = $request->input('nome_universidade');

        if($universidade->update()){
            return new UniversidadesResource($universidade);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Delete Universidade
        $universidade = Universidades::findOrfail($id);
        if($universidade->delete()){
            return new UniversidadesResource($universidade);
        }
    }
}
