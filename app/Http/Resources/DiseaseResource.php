<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DiseaseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
      //return parent::toArray($request);
      return [
        'id' => $this->id,
        'name' => $this->name,
        'disease' => new DiseaseResource($this->disease),
        'mixtures' => MixtureResource::collection($this->mixtures),
        'products' => ProductResource::collection($this->products),
        'created_at' => $this->created_at,
        'updated_at' => $this->updated_at,
      ];
    }
}
