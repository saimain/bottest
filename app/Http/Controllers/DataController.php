<?php

namespace App\Http\Controllers;

use App\Http\Resources\OverviewResource;
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
}
