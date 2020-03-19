<?php

namespace App\Http\Controllers;

use App\Http\Resources\CountryResource;
use App\Http\Resources\NotFoundResource;
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
            // return $th;
            // 
            $error =  [
                ['text' => 'Data not found'],
            ];
            return new NotFoundResource($error);
        }

        // $array = json_decode($response->getBody()->getContents(), true); //

    }
}
