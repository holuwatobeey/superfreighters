<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OrderSchemaTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_that_orders_schema_has_all_expected_columns()
    {
        $this->assertTrue(Schema::hasColumns('orders', ['id', 'name', 'email', 'destination_country', 'destination_city', 'parcels', 'weight', 'mode', 'amount', 'payment_channel', 'delivery_date']), 1);
    }
}
