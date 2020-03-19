<?php

namespace App\Http\Controllers;

use App\Http\Resources\CountryResource;
use Illuminate\Http\Request;

class CountryData extends Controller
{
    public function getData($iso)
    {
        $client = new \GuzzleHttp\Client();
        try {
            $response = $client->request('GET', 'https://covid19.mathdro.id/api/countries/' . $iso);
            $array = json_decode($response->getBody()->getContents(), true); //
            return new CountryResource($array);
        } catch (\Throwable $th) {
            return 'error';
        }

        // $array = json_decode($response->getBody()->getContents(), true); //

    }
}
