<?php

namespace App\Services;

use App\Repositories\OrderRepository;

class OrderService{
    public function __construct(OrderRepository $order){
        $this->order = $order;
    }

    public function create($data){
        $data = $request->all();

        return $this->order->create($data);
    }

}