<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PetitionCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array
     */
    public function toArray(Request $request) 
    {
        return [
            'data' => $this->collection,
            'version' => '0.1.1',
            'Author' => 'Mahi'
        ];
    }
}
