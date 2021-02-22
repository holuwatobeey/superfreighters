@extends('layout.main_layout')

@section('content')
@include('layout.partials.nav')
<div class="container mb-5" id="getStarted">

    <h3 class="text-center">Schedule A Delivery</h3>

    <div class="row">
        <div class="offset-md-3 col-md-6">
                <div class="row">
                    <div class="col-md-6 bg-primary p-3"> </div>
                    <div class="col-md-6 bg-dark p-3"> </div>

                    <div class="card card-body col-md-12 shadow">
                       <form action="">

                            <div class="form-row mb-4">
                                <div class="col">
                                <label for="">Full Name</label>
                                <input type="text" class="form-control" placeholder="Full Name">
                                </div>
                                <div class="col">
                                <label for="">Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address">
                                </div>
                            </div>

                            <div class="form-row mb-4">
                                <div class="col">
                                <label for="">Origin Country</label>
                                <input disabled class="form-control" value="Nigeria">
                                </div>
                                <div class="col">
                                <label for="">Origin City</label>
                                <input type="text" class="form-control" placeholder="Origin City">
                                </div>
                            </div>

                            <div class="form-row mb-4">
                                <div class="col">
                                <label for="">Destination Country</label>
                                <select name="" id="" class="form-control">
                                    <option selected>--Select Country--</option>
                                    <option value="uk">United Kingdom(UK)</option>
                                    <option value="us">United State(US)</option>
                                </select>
                                </div>
                                <div class="col">
                                <label for="">Destination City</label>
                                <input type="text" class="form-control" placeholder="Origin City">
                                </div>
                            </div>

                            <div class="form-row mb-4">
                                <div class="col">
                                <label for=""># Parcels</label>
                                <input type="text" class="form-control" placeholder="Number Of Parcels">
                                </div>
                                <div class="col">
                                <label for="">Weight(KG)</label>
                                <input type="text" class="form-control" placeholder="Weight In Kilograms">
                                </div>
                            </div>
                            <label for="">Mode Of Transportation</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="mode"  value="air" checked>
                                <label class="form-check-label" for="mot">
                                    Air
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="mode" value="sea">
                                <label class="form-check-label" for="mot">
                                    Sea
                                </label>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary shadow">Confirm Schedule</button>
                            </div>
                       </form>
                    </div>
                </div>                
        </div>
        
    </div>

</div>
@endsection