<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OverviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return ['messages' => [
            ['text' => 'Total Confirmed Cases ' . $this['confirmed']['value'] . ' | Total Deaths Cases ' . $this['deaths']['value'] . ' | Total Recovered Persons ' .  $this['recovered']['value']],
            ['attachment' => [
                'type' => 'image',
                'payload' => [
                    'url' => $this['image']
                ]
            ]]
        ]];
    }
}
