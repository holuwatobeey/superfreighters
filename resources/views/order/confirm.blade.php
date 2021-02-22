@extends('layout.main_layout')

@section('content')
@include('layout.partials.default-nav')
<div class="container mb-5" id="getStarted">
    <h3 class="text-center mb-4">Shipping Details</h3>

    <div class="row">
        <div class="offset-md-3 col-md-6">
                <div class="row">
                    <div class="card card-body col-md-12 shadow">
                    <h5 class="text-center">Summary</h5>

                        <div class="row col-md-12">
                            <span class="col-md-6 text-left">Full name</span>
                            <span class="col-md-6 text-right">George Michael</span>
                        </div><hr/>

                        <div class="row col-md-12">
                            <span class="col-md-6 text-left">Email Address</span>
                            <span class="col-md-6 text-right">horluwatowbeey@gmail.com</span>
                        </div><hr/>

                        <div class="row col-md-12">
                            <span class="col-md-6 text-left">Origin Country</span>
                            <span class="col-md-6 text-right">Nigeria</span>
                        </div><hr/>

                        <div class="row col-md-12">
                            <span class="col-md-6 text-left">Origin City</span>
                            <span class="col-md-6 text-right">Yaba</span>
                        </div><hr/>

                        <div class="row col-md-12">
                            <span class="col-md-6 text-left">Destination Country</span>
                            <span class="col-md-6 text-right">Nigeria</span>
                        </div><hr/>

                        <div class="row col-md-12">
                            <span class="col-md-6 text-left">Destination City</span>
                            <span class="col-md-6 text-right">Yaba</span>
                        </div><hr/>

                        <div class="row col-md-12">
                            <span class="col-md-6 text-left">Parcel(s)</span>
                            <span class="col-md-6 text-right">2</span>
                        </div><hr/>

                        <div class="row col-md-12">
                            <span class="col-md-6 text-left">Weight Of parcel(s)</span>
                            <span class="col-md-6 text-right">20KG</span>
                        </div><hr/>

                        <div class="row col-md-12">
                            <span class="col-md-6 text-left">Mode Of Transportation</span>
                            <span class="col-md-6 text-right">Air</span>
                        </div><hr/>

                        <div class="row col-md-12">
                            <span class="col-md-6 text-left">Shipping Cost</span>
                            <span class="col-md-6 text-right">N 5,700</span>
                        </div><hr/>

                        <div class="row col-md-12">
                            <span class="col-md-6 text-left">Customs Tax</span>
                            <span class="col-md-6 text-right">N 570</span>
                        </div><hr/>

                        <div class="row col-md-12">
                            <b class="col-md-6 text-left">Total Payment</b>
                            <b class="col-md-6 text-right">N 6,270</b>
                        </div>


                        <div class="text-center">
                            <button class="btn btn-primary shadow">Proceed To Payment</button>
                        </div>
                    </div>
                </div>                
        </div>
    </div>

</div>
@endsection