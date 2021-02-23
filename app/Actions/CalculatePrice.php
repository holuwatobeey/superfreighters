<?php

namespace App\Actions;

class CalculatePrice{
    public function run($request){
        $transport_by_air = 50000;
        $transport_by_sea = 15000;

        $weight_by_air = 10000;
        $weight_by_sea = 2000;

        $origin_us = 1500;
        $origin_uk = 800;

        if($request->origin_country == 'us'){
            $country_fee = $origin_us;
        }else{
            $country_fee = $origin_uk;
        }

        if($request->mode == 0){
            $mode_fee = $transport_by_air;
            $total_weight = $request->weight * $weight_by_air;
        }else{
            $mode_fee = $transport_by_sea;
            $total_weight = $request->weight * $weight_by_sea;
        }

        $total_price = $country_fee + $mode_fee + $total_weight;

        $tax = 0.1 * $total_price; 

        return $total_price + $tax;
    }
}