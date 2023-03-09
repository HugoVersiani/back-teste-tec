<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVehicleRequest;
use App\Http\Requests\UpdateVehicleRequest;
use App\Models\Vehicle;
use App\Models\User;
use Illuminate\Support\Facades\Cache; //Redis

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        //Implementando redis

         return User::all();

       // $vehicles = Cache::remember('vehicle', 10, function() {
         //   return Vehicle::all();
       // });

        //return $vehicles;
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVehicleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function create(StoreVehicleRequest $request)
    {
        
        $teste = Vehicle::create([
            'image_path' => $request['image_path'],
            'city'=> $request['city'],
            'make'=> $request['make'],
            'model'=> $request['model'],
            'year'=>$request['year'],
            'km'=>$request['km'],
            'description'=>$request['description'],
            'transmission'=>$request['transmission'],
            'phone'=>$request['phone'],
            'price'=> $request['price']
        ]);
        return response()->json(['success'=>'Veículo cadastrado com sucesso!']);
    }

    

}
