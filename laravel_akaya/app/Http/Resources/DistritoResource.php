<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DistritoResource extends JsonResource
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
            "provincia" => $this->provincia->nome,
            "provincia_id" => $this->provincia->id,
            "updated_at" => $this->updated_at
        ];

    }

}
