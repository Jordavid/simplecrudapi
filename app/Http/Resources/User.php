<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
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
