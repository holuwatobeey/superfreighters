<?php

namespace App\Repositories;

use App\Models\Order;

class OrderRepository{

    protected $order;
    
    public function __construct(Order $order){
        $this->order = $order;
    }

    public function create($data){
        try{
            return $this->order->create($data);
        }catch(\Exception $e) {
            return redirect()->back()->with(['error'=>$e->getMessage()]);
        } 
    }

}