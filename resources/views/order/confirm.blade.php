@extends('layout.main_layout')

@section('content')
@include('layout.partials.default-nav')
@php
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
        $end_date = Carbon\Carbon::now()->addDay(2)->endOfDay()->diffForHumans();
    }else{
        $mode_fee = $transport_by_sea;
        $total_weight = $request->weight * $weight_by_sea;
        $end_date = Carbon\Carbon::now()->addDay(20)->endOfDay()->diffForHumans();
    }

    $total_price = $country_fee + $mode_fee + $total_weight;
    $tax = 0.1 * $total_price;
@endphp
<div class="container mb-5" id="getStarted">
    <h3 class="text-center mb-4">Shipping Details</h3>

    <div class="row">
        <div class="offset-md-3 col-md-6">
                <div class="row">
                    <div class="card card-body col-md-12 shadow">
                    <h5 class="text-center mb-2">Summary</h5>

                        <div class="row col-md-12">
                            <span class="col-md-6 text-left">Full name</span>
                            <span class="col-md-6 text-right">{{$request->name}}</span>
                        </div><hr/>

                        <div class="row col-md-12">
                            <span class="col-md-6 text-left">Email Address</span>
                            <span class="col-md-6 text-right">{{$request->email}}</span>
                        </div><hr/>

                        <div class="row col-md-12">
                            <span class="col-md-6 text-left">Origin Country</span>
                            <span class="col-md-6 text-right">{{($request->origin_country == 'uk') ? 'United Kingdom(UK)' : 'United State(US)'}}</span>

                        </div><hr/>

                        <div class="row col-md-12">
                            <span class="col-md-6 text-left">Origin City</span>
                            <span class="col-md-6 text-right">{{$request->origin_city}}</span>
                        </div><hr/>

                        <div class="row col-md-12">
                            <span class="col-md-6 text-left">Destination Country</span>
                            <span class="col-md-6 text-right">Nigeria</span>
                        </div><hr/>

                        <div class="row col-md-12">
                            <span class="col-md-6 text-left">Destination City</span>
                            <span class="col-md-6 text-right">{{$request->destination_city}}</span>
                        </div><hr/>

                        <div class="row col-md-12">
                            <span class="col-md-6 text-left">Parcel(s)</span>
                            <span class="col-md-6 text-right">{{$request->parcels}}</span>
                        </div><hr/>

                        <div class="row col-md-12">
                            <span class="col-md-6 text-left">Weight Of parcel(s)</span>
                            <span class="col-md-6 text-right">{{$request->weight}}KG</span>
                        </div><hr/>

                        <div class="row col-md-12">
                            <span class="col-md-6 text-left">Mode Of Transportation</span>
                            <span class="col-md-6 text-right">{{($request->mode == 0) ? 'Air' : 'Sea'}}</span>
                        </div><hr/>

                        <div class="row col-md-12">
                            <span class="col-md-6 text-left">Expected Delivery Date</span>
                            <span class="col-md-6 text-right">{{$end_date}}</span>
                        </div><hr/>

                        <div class="row col-md-12">
                            <span class="col-md-6 text-left">Shipping Cost</span>
                            <span class="col-md-6 text-right">&#8358; {{number_format($total_price)}} </span>
                        </div><hr/>

                        <div class="row col-md-12">
                            <span class="col-md-6 text-left">Customs Tax</span>
                            <span class="col-md-6 text-right">&#8358; {{number_format($tax)}}</span>
                        </div><hr/>

                        <div class="row col-md-12">
                            <b class="col-md-6 text-left">Total Payment</b>
                            <b class="col-md-6 text-right">&#8358; {{number_format($total_price + $tax)}} </b>
                        </div>


                        <div class="text-center mt-2">
                            <button class="btn btn-primary shadow">Proceed To Payment</button>
                        </div>
                    </div>
                </div>                
        </div>
    </div>

</div>
@endsection