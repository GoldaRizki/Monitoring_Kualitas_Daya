<?php

namespace App\Http\Controllers\API;



use App\Http\Controllers\Controller;
use App\Models\Data;
use Illuminate\Http\Request;
use App\Http\Resources\MonitoringCollection;

class ApiAlatController extends Controller
{
    //
    public function create(Request $request){

        
        $data_valid = $request->validate([
            'tegangan' => 'required|numeric',
            'arus' => 'required|numeric',
            'faktor_daya' => 'required|numeric',
            'daya_aktif' => 'required|numeric',
            'daya_reaktif' => 'required|numeric',
            'daya_semu' => 'required|numeric',
            'total_daya_aktif' => 'required|numeric',
            'total_daya_reaktif' => 'required|numeric',
            'total_daya_semu' => 'required|numeric',
            'total_faktor_daya' => 'required|numeric',
            'frekuensi' => 'required|numeric',
            'reactive_power_demand' => 'required|numeric',
            'apparent_power_demand' => 'required|numeric',
        ]);

        Data::create($data_valid);

        return response()->json('y', 200); //respond code 200 
    }

    public function getData(){
        
        $data = Data::latest()->limit(10)->get()->reverse();

        //ddd($data->pluck('faktor_daya'));
        return new MonitoringCollection($data);

    }

    public function createRandom(Request $request){


        $data_random = [
            'tegangan' => rand(200,400),
            'arus' => rand(30,100),
            'faktor_daya' => rand(50,99)/100,
            'daya_aktif' => rand(200, 400),
            'daya_reaktif' => rand(200, 400),
            'daya_semu' => rand(200, 400),
            'total_daya_aktif' => rand(200, 400),
            'total_daya_reaktif' => rand(200, 400),
            'total_daya_semu' => rand(200, 400),
            'total_faktor_daya' => rand(200, 400),
            'frekuensi' => rand(47, 56),
            'reactive_power_demand' => rand(200, 400),
            'apparent_power_demand' => rand(200, 400),
        ];

        Data::create($data_random);

        return response()->json($data_random, 200);

    }
}