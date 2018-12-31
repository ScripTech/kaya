<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UniversidadesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            "id" => $this->id,
            "nome" => $this->nome,
            "updated_at" => $this->updated_at,
            "distrito_id" => $this->distrito->id,
            "distrito" => $this->distrito->nome,
            "provincia_id" => $this->provincia->id,
            "provincia" => $this->provincia->nome
        ];
    }
}
