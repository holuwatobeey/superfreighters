<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\OrderService;
use App\Http\Requests\OrderRequest;

class OrderController extends Controller
{

    protected $order;

    public function __construct(OrderService $order){
        $this->order = $order;
    }

    public function confirm(OrderRequest $request)
    {
        try{ 
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
    public function store(OrderRequest $request)
    {
        try{
            $order = $this->order->create($request); 
 
            return redirect()->back()->with('success', 'Your order has been placed successfully and a mail containing the details has been sent');
            
        }catch(Exception $e){
            return response()->json(['message' => $e->getMessage()]);
        }
    }

}
