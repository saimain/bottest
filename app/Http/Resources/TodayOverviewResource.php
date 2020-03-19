<?php

namespace App\Http\Resources;

use DateTime;
use Illuminate\Http\Resources\Json\JsonResource;

class TodayOverviewResource extends JsonResource
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
            ['text' => 'Report Date ' . $this['reportDateString']],
            ['text' => 'China ' . $this['mainlandChina']],
            ['text' => 'Other Location ' . $this['otherLocations']],
            ['text' => 'Total Confirmed ' . $this['totalConfirmed']],
            ['text' => 'Total Recovered ' . $this['totalRecovered']],
        ]];
    }
}
