<?php

namespace App\Http\Controllers;

use App\Http\Resources\CountryListResource;
use App\Http\Resources\CountryResource;
use App\Http\Resources\NotFoundResource;
use Illuminate\Http\Request;

class CountryData extends Controller
{
    public function getData($iso)
    {
        $client = new \GuzzleHttp\Client();
        $countries = $client->request('GET', 'https://covid19.mathdro.id/api/countries/');
        $countries_array = json_decode($countries->getBody()->getContents(), true);
        return new CountryListResource($countries_array);

        // try {
        //     $response = $client->request('GET', 'https://covid19.mathdro.id/api/countries/' . $iso);
        //     $array = json_decode($response->getBody()->getContents(), true); //
        //     return new CountryResource($array);
        // } catch (\Throwable $th) {
        //     // return $th;
        //     // 
        //     $error =  [
        //         ['text' => $iso . 'Data not found'],
        //     ];
        //     return new NotFoundResource($error);
        // }

        // $array = json_decode($response->getBody()->getContents(), true); //

    }
}
