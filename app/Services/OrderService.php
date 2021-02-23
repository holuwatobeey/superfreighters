<?php

namespace App\Services;

use App\Repositories\OrderRepository;
use Session;
use App\Jobs\SendUserEmailJob;
use App\Jobs\SendAdminEmailJob;


class OrderService{
    public function __construct(OrderRepository $order){
        $this->order = $order;
    }

    public function create($data){
        // collect details
        $details = Session::get('validatedData');
        //Dispatach email job for users(delay for 5 seconds)
        SendUserEmailJob::dispatch($details)->delay(now()->addSeconds(5));

        //Dispatach email job for admins(delay for 5 seconds)
        SendAdminEmailJob::dispatch($details)->delay(now()->addSeconds(5));
        return $this->order->create($data);
    }

}