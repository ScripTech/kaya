<?php

namespace App\Http\Controllers;

use App\Models\Distritos;
use Illuminate\Http\Request;
use App\Http\Resources\DistritoResource;

class DistritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $distritos = Distritos::get();
        return DistritoResource::collection($distritos);
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
        $distrito = new Distritos;
        $distrito->nome = $request->input('nome');
        $distrito->created_at = now();
        $distrito->updated_at = now();
        $distrito->status = 1;
        $distrito->provincias_id = $request->input('id_prov');

        $distrito->save();
        return new DistritoResource($distrito);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Distritos  $distrito
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $distrito = Distritos::findOrfail($id);
        return new DistritoResource($distrito);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Distritos  $distrito
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
     * @param  \App\Models\Distritos  $distrito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Distritos  $distrito
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Delete Distrito
        $distrito = Distritos::findOrfail($id);
        //return $cliente as Resource
        if($distrito->delete()){
            return new DistritoResource($distrito);
        }
    }
}
