<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class ExchangeController extends Controller
{
    public function index()
    {
        return view("loggedin.exchange");
    }

    public function calculate(Request $request){
        $apiKey = env("EXCHANGE_RATE_API_KEY");
        $from = $request->from;
        $to = $request->to;
        $amount = $request->amount;

        $response = Http::get("https://v6.exchangerate-api.com/v6/{$apiKey}/pair/{$from}/{$to}/{$amount}");
        if($response->successful()){
            $result = number_format($response->json()["conversion_result"], 2, '.', '');

            return back()->with([
                'result' =>  $result,
                'amount' => $amount,
                'from' => $from,
                'to' => $to
            ]);
        }
        return back()->with(['error', 'Something went wrong with the API service']);
    }

}
