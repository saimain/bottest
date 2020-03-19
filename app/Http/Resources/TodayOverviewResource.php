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
            ['text' => $this['reportDateString'] . ' နေ့တွင် ' . 'တရုတ်နိုင်ငံ ' . $this['mainlandChina'] . ' ဦး ကူးစက်ခံရပြီး ၊ အခြားသောနိုင်ငံများတွင် ' . $this['otherLocations'] . ' ဦး ကူးစက်ခံရပါသည်။ ' . 'စုစုပေါင်း ကူးစက်ခံရသူ '  . $this['totalConfirmed'] . ' ဦး ရှိပြီး ၊ ပြန်လည်ကောင်းမွန်လာသူ ' . $this['totalRecovered'] . ' ဦး ရှိပါသည်။'],
        ]];
    }
}
