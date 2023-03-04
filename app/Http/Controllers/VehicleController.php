<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVehicleRequest;
use App\Http\Requests\UpdateVehicleRequest;
use App\Models\Vehicle;
use App\Http\Controllers\SimulateController;
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

        $vehicles = Cache::remember('vehicles', 10000, function() {
            return Vehicle::all();
        });

        return $vehicles;
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVehicleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function create(StoreVehicleRequest $request)
    {
        
        Vehicle::create([
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

    


    public function simulate(StoreVehicleRequest $request) {

        $feedback = [
            'required' => 'O campo :attribute é obrigatório.'
        ];

        $validated = $request->validate([
            'price'=>'required',
            'down_payment'=>'required'
        ], $feedback);
        
        $fees = array(
            6 => 12.47,
            12 => 15.56,
            48 => 18.69
        );

        $installments = array ();

        foreach($fees as $key => $fee) {
            $remaining_price = $request['price'] - $request['down_payment'];
            
            $fee_price = (($fees[$key]/100)*$request['price']);

            $installment_price = ($fee_price + $remaining_price)/$key;
          
           $installments[$key] = array(
            'installment_price' => number_format($installment_price, 2)
           );
        }
    
        return $installments;

    }

}
