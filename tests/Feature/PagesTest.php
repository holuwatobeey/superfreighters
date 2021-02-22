<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PagesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_home_page()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertViewIs('order.index');
    }

    public function test_order_details_page()
    {
        $response = $this->get('confirm-schedule');

        $response->assertStatus(200);
        $response->assertViewIs('order.confirm');
    }
}
