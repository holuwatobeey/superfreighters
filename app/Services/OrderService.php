<?php

namespace App\Services;

use App\Repositories\OrderRepository;
use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;

class OrderService{
    public function __construct(OrderRepository $order){
        $this->order = $order;
    }

    public function create(Request $request){
        $data = $request->all();

        return $this->order->create($data);
    }

}