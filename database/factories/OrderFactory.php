<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'origin_country' => $this->faker->country,
            'origin_city' => $this->faker->country,
            'destination_country' => $this->faker->country,
            'destination_city' => $this->faker->country,
            'parcels' => mt_rand(1,5),
            'weight' => mt_rand(5,50),
            'mode' => mt_rand(1,2),
            'amount' =>  3500,
            'payment_channel' => 'Paystack',
            'delivery_date' => \Carbon\Carbon::now()->addDays(2)
        ];
    }
}
