<?php

namespace App\Http\Controllers;

use App\Http\Resources\OverviewResource;
use App\Http\Resources\TodayOverviewResource;
use Illuminate\Http\Request;

class DataController extends Controller
{

    public function overview()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://covid19.mathdro.id/api');

        // return $response->getBody();
        $array = json_decode($response->getBody()->getContents(), true); //


        return new OverviewResource($array);
    }

    public function todayoverview()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://covid19.mathdro.id/api/daily');

        // return $response->getBody();
        $array = json_decode($response->getBody()->getContents(), true); //

        return new TodayOverviewResource(end($array));
    }
}
