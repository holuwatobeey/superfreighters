<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\OrderService;
use Session;
use Exception;
use App\Http\Requests\OrderRequest;
use App\Actions\CalculatePrice;
use Carbon\Carbon;

class OrderController extends Controller
{

    protected $order;

    public function __construct(OrderService $order){
        $this->order = $order;
    }

    public function confirm(OrderRequest $request)
    {
        try{ 

            $amount = (new CalculatePrice())->run($request);

            $request->merge(['amount' => $amount, 'payment_channel' => 'Paystack', 'delivery_daate' => ($request->mode == 0) ? Carbon::now()->addDays(2) : Carbon::now()->addDays(20)]);

            Session::put('validatedData', $request->all());

            return view('order.confirm', compact('request'));

        }catch(Exception $e){
            return response()->json(['message' => $e->getMessage()]);
        }
    }

    /**
     * Store a newly created order.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        try{
            $order = $this->order->create($request); 
 
            return redirect()->back()->with('success', 'Your order has been placed successfully and a mail containing the details has been sent');
            
        }catch(Exception $e){
            return response()->json(['message' => $e->getMessage()]);
        }
    }

}
