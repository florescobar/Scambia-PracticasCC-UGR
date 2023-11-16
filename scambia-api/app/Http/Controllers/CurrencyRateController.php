<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class CurrencyRateController extends Controller
{
    public function get()
    {
        try {
            $message=''; 
            $ask = 3.784;

            return response()->json(['data' => $ask , 'message'=>(strlen($message)>0 ? $message : 'Registro guardado correctamente'), 'errorCode'=>(strlen($message)>0 ? 1 : 0)]);
                

        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['data' => null, 'message'=>'Ha ocurrido un error inesperado. Intente nuevamente: '.$e, 'errorCode'=>1]);     
        }
    }

    public function calculateExchange(Request $request)
    {
        try
        {  
            $message=''; 
            $amount = $request->input('amount');
            $ask = 3.784;

            $validator=Validator::make(
            [
                '¿Cuanto dinero envias?' => trim($request->input('amount'))
            ],
            [
                '¿Cuanto dinero envias?' => ['required']
            ],
            [
                'required' => 'El campo ":Attribute" es requerido.'
            ]);

            if($validator->fails())
            {
                $errors=$validator->errors()->all();
    
                foreach($errors as $value)
                {
                    $message.=$value;
                }
                return response()->json(['data' => null, 'message'=>$message, 'errorCode'=>'1']);
            }

            /*$currencyRate = CurrencyRate::where('idCurrency', $currency)
                ->where('state', 1)
                ->first();

            if(count($currencyRate)>0)
            {
                return response()->json(['data' => null, 'message'=>'No existe ninguna moneda para el dia '.date("d/m/Y").'!', 'errorCode'=>1]);             
            }

            */

            $quotedAmount = round( $amount / $ask, 2, PHP_ROUND_HALF_DOWN);

            $data = [
                "quotedAmount" => $quotedAmount
            ];    

            return response()->json(['data' => $data , 'message'=>(strlen($message)>0 ? $message : 'Registro guardado correctamente'), 'errorCode'=>(strlen($message)>0 ? 1 : 0)]);
                
        }        
        catch(\Exception $e)
        {
            DB::rollback();
            return response()->json(['data' => null, 'message'=>'Ha ocurrido un error inesperado. Intente nuevamente: '.$e, 'errorCode'=>1]);     
        }
    }
}