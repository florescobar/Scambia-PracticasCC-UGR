<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Models\CurrencyRate;

class CurrencyRateController extends Controller
{
    public function getAll()
    {
        try {
            $currencies = CurrencyRate::all();
            $data = [
                "currencies" => $currencies
            ];
            return response()->json(['data' => $data, 'message'=>'Ok', 'errorCode'=>'0']);
        } catch (\Exception $e) {
            return response()->json(['data' => null, 'message'=>'Ha ocurrido un error inesperado. Intente nuevamente: '.$e, 'errorCode'=>1]);     
        }
    }

    public function getById($idCurrencyRate)
    {
        try {
            $currencyRate = CurrencyRate::where('idCurrencyRate', $idCurrencyRate)->get();

            $data = [
                "currencies" => $currencyRate
            ];

            return response()->json(['data' => $data, 'message'=>'Ok', 'errorCode'=>'0']);  

        } catch (\Exception $e) {
            return response()->json(['data' => null, 'message'=>'Ha ocurrido un error inesperado. Intente nuevamente: '.$e, 'errorCode'=>1]);     
        }
    }

    public function getActive($active = true)
    {
        try {
        
            $currencyRate = CurrencyRate::where('status', $active)->first();

            $data = [
                "currencyRate" => $currencyRate
            ];

            return response()->json(['data' => $data, 'message'=>'Ok', 'errorCode'=>'0']);  

        } catch (\Exception $e) {
            return response()->json(['data' => null, 'message'=>'Ha ocurrido un error inesperado. Intente nuevamente: '.$e, 'errorCode'=>1]);     
        }
    }

    public function calculateExchange(Request $request)
    {
        try
        {  
            $message=''; 
            $amount = $request->input('amount');

            $currencyRate = CurrencyRate::where('status', 1)->first();

            $ask = $currencyRate->askPrice;

            $validator=Validator::make(
            [
                '¿Cuanto dinero envias?' => trim($request->input('amount'))
            ],
            [
                '¿Cuanto dinero envias?' => ['required', 'numeric']
            ],
            [
                'required' => 'El campo ":Attribute" es requerido.',
                'numeric' => 'El campo ":Attribute" tiene que ser un número.'
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

            $quotedAmount = round( $amount / $ask, 2, PHP_ROUND_HALF_DOWN);

            $data = [
                "quotedAmount" => $quotedAmount
            ];    

            return response()->json(['data' => $data , 'message'=>(strlen($message)>0 ? $message : ''), 'errorCode'=>(strlen($message)>0 ? 1 : 0)]);
                
        }        
        catch(\Exception $e)
        {
            DB::rollback();
            return response()->json(['data' => null, 'message'=>'Ha ocurrido un error inesperado. Intente nuevamente: '.$e, 'errorCode'=>1]);     
        }
    }
}