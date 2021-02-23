<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Paystack;
use Session;

class PaymentController extends Controller
{
    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToPaystack(Request $request)
    {
        try{

            $getDetails = Session::get('validatedData');// Fetch session data

            //merge new values to incoming request
            $request->merge(['amount' => ($getDetails['amount'] * 100), 'email' => $getDetails['email'], 'quantity' => 1, 'currency' =>'NGN', 'reference'=> Paystack::genTranxRef()]);
            
            //redirect to paystack checkout to handle payment
            return Paystack::getAuthorizationUrl()->redirectNow();

        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }        
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}
