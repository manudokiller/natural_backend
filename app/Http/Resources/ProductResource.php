<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'name_spanish' => $this->name_spanish,
            'name_scientific' => $this->name_scientific,
            'name_english' => $this->name_english,
            'family_scientific' => $this->family_scientific,
            'description' => $this->description,
            'enhance' => $this->enhance,
            'icons' => IconResource::collection($this->icons),
            'images' => ImageResource::collection($this->images),
            'product_type' => new ProductType($this->product_type),
            'mixtures' => MixtureResource::collection($this->mixtures),
            'main_mixtures' => MixtureResource::collection($this->main_mixtures),
            'diseases'=> DiseaseResource::collection($this->diseases),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
