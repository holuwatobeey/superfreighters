<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Exception;
use App\Http\Requests\OrderRequest;
use App\Actions\CalculatePrice;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class OrderController extends Controller
{
    public function confirm(OrderRequest $request)
    {
        try{ 

            $amount = (new CalculatePrice())->run($request);

            $request->merge(['amount' => $amount, 'payment_channel' => 'Paystack', 'delivery_date' => ($request->mode == 0) ? Carbon::now()->addDays(2)->toDateString() : Carbon::now()->addDays(20)->toDateString()]);
            
            Session::put('validatedData', '');

            Session::put('validatedData', $request->all());

            return view('order.confirm', compact('request'));

        }catch(Exception $e){
            return Redirect::to(URL::previous() . "#getStarted")->with(['error' => $e->getMessage()]);
        }
    }
}
