<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiempoController extends Controller{
    function getTiempo($latitud, $longitud){
        $apiKey = "e91105f038d44d85acf9da9555cfd404";
        $apiUrl = "https://api.openweathermap.org/data/2.5/weather?lat=$latitud&lon=$longitud&appid=$apiKey&units=metric&lang=es";

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $apiUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $data = json_decode($response, true);

        return [
            "cielo" => $data["weather"][0]["description"],
            "temperatura" => $data["main"]["temp"],
            "ciudad" => $data["name"],
            "icono" =>$data["weather"][0]["icon"]
        ];

    }

}
