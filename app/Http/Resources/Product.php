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
        //this will return all the fields from the model
        //return parent::toArray($request);

        //return custom fields 
        return [
            'id'=> $this->id,
            'description'=> $this->description,
            'quantity'=> $this->quantity,
            'price'=> $this->price,
            'categories'=> $this->category()->name
        ];
    }

    public function with($request)
    {
        //this will append to the requested data
        return [
            'version'=> '1.0.0',
            'url'=> url('http://profolio.com')
        ];
    }
}
