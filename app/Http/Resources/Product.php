<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'quantity' => $this->quantity
        ];
    }

    public function with($request)
    {   
        return [
            'version' => '1.0.0',
            'author_name' => 'Daouda Sanogo',
            'author_company_url' => url('https://www.maxeseg.com')
        ];
    }
}
