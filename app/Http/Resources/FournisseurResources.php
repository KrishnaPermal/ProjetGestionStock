<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FournisseurResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'tel' => $this->tel,
            'email' => $this->email,
        ];
    }
}
