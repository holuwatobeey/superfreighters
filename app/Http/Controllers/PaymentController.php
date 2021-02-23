<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Paystack;
use App\Services\OrderService;
use Session;
use Exception;
use Illuminate\Support\Facades\URL;

class PaymentController extends Controller
{

    protected $order;

    public function __construct(OrderService $order){
        $this->order = $order;
    }

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
            return Redirect::to(URL::previous() . "#getStarted")->with(['error' =>'The paystack token has expired. Please refresh the page and try again.']);
        }        
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        try{
            $paymentDetails = Paystack::getPaymentData();
            if ($paymentDetails['data']['status'] == 'success') { 

                //handle payment callback logic
                $this->order->create(Session::get('validatedData'));

                return Redirect::to('/' . "#getStarted")->with('success', 'Your order has been placed successfully and a mail containing the details has been sent');
            }else{
                return Redirect::to('/' . "#getStarted")->with(['error'=>'Sorry, Something went wrong.']);
            };
        }catch(Exception $e) {
            return Redirect::to('/' . "#getStarted")->with(['error'=>$e->getMessage()]);
        } 
        
    }
}
