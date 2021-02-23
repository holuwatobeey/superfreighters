<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'origin_country',
        'origin_city',
        'destination_country',
        'destination_city',
        'parcels',
        'weight',
        'mode',
        'amount',
        'payment_channel'
    ];
}
