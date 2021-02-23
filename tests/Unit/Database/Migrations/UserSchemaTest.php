<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserSchemaTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_that_orders_schema_has_all_expected_columns()
    {
        $this->assertTrue(Schema::hasColumns('users', ['id', 'name', 'email', 'is_admin', 'email_verified_at', 'password']), 1);
    }
}