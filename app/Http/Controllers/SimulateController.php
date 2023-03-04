<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimulateController extends Controller
{
    public function store(Request $request)
    {

    
        $feedback = [
            'required' => 'O campo :attribute é obrigatório.'
        ];

        $validated = $request->validate([
            'price'=>'required',
            'down_payment'=>'required',
            'installments'=>'required'
        ], $feedback);

        if($request['installments'] != 6 || $request['installments'] != 12 || $request['installments'] != 48) {
            return response()->json(
                ['error' => 'Impossivel simular com ' . $request['installments'] . ' parcelas.'], 404
            );
        }
  
        $fees = array(
            6 => 12.47,
            12 => 15.56,
            48 => 18.69
        );

        $percentual = $fees[$request['installments']];
        $priceToPlus = ($fees[$request['installments']]/100) * $request['price'];
        $totalPrice = $priceToPlus + $request['price'];

        return $totalPrice;

    }

}
