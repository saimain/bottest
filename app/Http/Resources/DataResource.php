<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DataResource extends JsonResource
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
            'text' => $this['date'] . ' , ' . $this['confirmed'] . ' Persons Confirmed & ' . $this['deaths'] . ' Persons Death & ' . $this['recovered'] . ' Persons Recovered',
        ];
    }
}
