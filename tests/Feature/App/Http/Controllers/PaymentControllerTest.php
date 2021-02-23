<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PaymentControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_paystack_redirects()
    {
        $this->withoutexceptionHandling();
        $data = [
            'email' => 'horluwatowbeey@gmail.com',
            'amount' => 1000,
            'quantity' => 1,
            'currency' => 'NGN'
        ];
        $response = $this->post(route('pay'), $data);
        $response->assertStatus(302);
    }
}
