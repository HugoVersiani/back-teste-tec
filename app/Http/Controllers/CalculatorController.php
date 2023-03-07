<?php

namespace App\Http\Controllers;
use App\Models\Vehicle;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
 

    public function simulate(Request $request) {

        $feedback = [
            'required' => 'OS campos são obrigatorios'
        ];

        $validated = $request->validate([
            'vehicle_id'=>'required',
            'down_payment'=>'required'
        ], $feedback);
        
        $fees = array(
            6 => 12.47,
            12 => 15.56,
            48 => 18.69
        );


        $vehicle = Vehicle::findOrFail($request['vehicle_id']);

        if($request['down_payment']/100 >= $vehicle['price']){
            return response()->json(['error' => 'O valor de entrada deve ser menor que o valor do veiculo.'], 422);
        }


        $installments = array ();

        foreach($fees as $key => $fee) {
            $remaining_price = $vehicle['price'] - $request['down_payment'];
            
            $fee_price = (($fees[$key]/100)*$vehicle['price']);

            $installment_price = ($fee_price + $remaining_price)/$key;
          
           $installments[$key] = array(
            'installment_price' => number_format($installment_price, 2)
           );
        }
    
        return 
        response()->json([
            'installments' => $installments
        ]);

    }

}
