<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;


/* 
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('order.index');
});

Route::match(['get', 'post'],'confirm-schedule', [OrderController::class, 'confirm'])->name('confirm');

Route::group(['prefix' => 'payment'], function(){
    Route::post('/', [PaymentController::class , 'redirectToPaystack'])->name('pay');
    Route::get('/callback', [PaymentController::class , 'handleGatewayCallback'])->name('callback');
});

