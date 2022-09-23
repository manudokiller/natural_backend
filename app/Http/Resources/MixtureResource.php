<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MixtureResource extends JsonResource
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
            'procedures' => $this->procedures,
            'products' => ProductResource::collection($this->products),
            'product' => new ProductResource($this->product),
            'disease' => new DiseaseResource($this->disease),
            'mixture_type' => new MixtureTypeResource($this->mixture_type),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
