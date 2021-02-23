<?php

namespace Tests\Feature\App\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OrderControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_order_is_not_stored_without_name()
    {
        $data = [
            // name input is missing

            // 'name' => 'George Michael',
            'email' => 'horluwatowbeey@gmail.com',
            'origin_country' => 'Nigeria',
            'origin_city' => 'Yaba',
            'destination_country' => 'United Kingdom',
            'destination_city' => 'Maryland',
            'parcels' => mt_rand(1,5),
            'weight' => mt_rand(5,50),
            'mode' => mt_rand(1,2),
        ];
        $response = $this->post(route('confirm'), $data);

        $response->assertStatus(302);
        
        
        $response->assertSessionHasErrors(['name' => 'The name field is required.']);
    }

    public function test_that_order_is_not_stored_without_email()
    {
        $data = [
            // email input is missing

            'name' => 'George Michael',
            // 'email' => 'horluwatowbeey@gmail.com',
            'origin_country' => 'Nigeria',
            'origin_city' => 'Yaba',
            'destination_country' => 'United Kingdom',
            'destination_city' => 'Maryland',
            'parcels' => mt_rand(1,5),
            'weight' => mt_rand(5,50),
            'mode' => mt_rand(1,2),
        ];
        $response = $this->post(route('confirm'), $data);

        $response->assertStatus(302);
        
        $response->assertSessionHasErrors(['email' => 'The email field is required.']);
    }

    public function test_that_order_is_not_stored_without_a_valid_email()
    {
        $data = [
            'name' => 'George Michael',
            'email' => 'horluwatowbeey',//missing email pattern
            'origin_country' => 'Nigeria',
            'origin_city' => 'Yaba',
            'destination_country' => 'United Kingdom',
            'destination_city' => 'Maryland',
            'parcels' => mt_rand(1,5),
            'weight' => mt_rand(5,50),
            'mode' => mt_rand(1,2),
        ];
        $response = $this->post(route('confirm'), $data);

        $response->assertStatus(302);
        
        $response->assertSessionHasErrors(['email' => 'The email must be a valid email address.']);

    }

    public function test_that_order_is_not_stored_without_origin_country()
    {
        $data = [
            // origin_country input is missing

            'name' => 'George Michael',
            'email' => 'horluwatowbeey@gmail.com',
            // 'origin_country' => 'Nigeria',
            'origin_city' => 'Yaba',
            'destination_country' => 'United Kingdom',
            'destination_city' => 'Maryland',
            'parcels' => mt_rand(1,5),
            'weight' => mt_rand(5,50),
            'mode' => mt_rand(1,2),
        ];
        $response = $this->post(route('confirm'), $data);

        $response->assertStatus(302);
        
        
        $response->assertSessionHasErrors(['origin_country' => 'The origin country field is required.']);

    }

    public function test_that_order_is_not_stored_without_origin_city()
    {
        $data = [
            // origin_city input is missing

            'name' => 'George Michael',
            'email' => 'horluwatowbeey@gmail.com',
            'origin_country' => 'Nigeria',
            // 'origin_city' => 'Yaba',
            'destination_country' => 'United Kingdom',
            'destination_city' => 'Maryland',
            'parcels' => mt_rand(1,5),
            'weight' => mt_rand(5,50),
            'mode' => mt_rand(1,2),
        ];
        $response = $this->post(route('confirm'), $data);

        $response->assertStatus(302);
        
        $response->assertSessionHasErrors(['origin_city' => 'The origin city field is required.']);

    }


    public function test_that_order_is_not_stored_without_destination_city()
    {
        $data = [
            // destination_city input is missing

            'name' => 'George Michael',
            'email' => 'horluwatowbeey@gmail.com',
            'origin_country' => 'Nigeria',
            'origin_city' => 'Yaba',
            'destination_country' => 'United Kingdom',
            // 'destination_city' => 'Maryland',
            'parcels' => mt_rand(1,5),
            'weight' => mt_rand(5,50),
            'mode' => mt_rand(1,2),
        ];
        $response = $this->post(route('confirm'), $data);

        $response->assertStatus(302);
        
        $response->assertSessionHasErrors(['destination_city' => 'The destination city field is required.']);

    }

    public function test_that_order_is_not_stored_without_parcels()
    {
        $data = [
            // parcels input is missing

            'name' => 'George Michael',
            'email' => 'horluwatowbeey@gmail.com',
            'origin_country' => 'Nigeria',
            'origin_city' => 'Yaba',
            'destination_country' => 'United Kingdom',
            'destination_city' => 'Maryland',
            // 'parcels' => mt_rand(1,5),
            'weight' => mt_rand(5,50),
            'mode' => mt_rand(1,2),
        ];
        $response = $this->post(route('confirm'), $data);

        $response->assertStatus(302);
        
        $response->assertSessionHasErrors(['parcels' => 'The parcels field is required.']);
    }

    public function test_that_order_is_not_stored_without_weight()
    {
        $data = [
            // weight input is missing

            'name' => 'George Michael',
            'email' => 'horluwatowbeey@gmail.com',
            'origin_country' => 'Nigeria',
            'origin_city' => 'Yaba',
            'destination_country' => 'United Kingdom',
            'destination_city' => 'Maryland',
            'parcels' => mt_rand(1,5),
            // 'weight' => mt_rand(5,50),
            'mode' => mt_rand(1,2),
        ];
        $response = $this->post(route('confirm'), $data);

        $response->assertStatus(302);
        
        $response->assertSessionHasErrors(['weight' => 'The weight field is required.']);
    }

    public function test_that_order_is_not_stored_without_mode()
    {
        $data = [
            // mode input is missing

            'name' => 'George Michael',
            'email' => 'horluwatowbeey@gmail.com',
            'origin_country' => 'Nigeria',
            'origin_city' => 'Yaba',
            'destination_country' => 'United Kingdom',
            'destination_city' => 'Maryland',
            'parcels' => mt_rand(1,5),
            'weight' => mt_rand(5,50),
            // 'mode' => mt_rand(1,2),
        ];
        $response = $this->post(route('confirm'), $data);

        $response->assertStatus(302);
        
        $response->assertSessionHasErrors(['mode' => 'The mode field is required.']);
    }

    public function test_that_order_is_not_stored_with_all_required_data()
    {
        $data = [
            'name' => 'George Michael',
            'email' => 'horluwatowbeey@gmail.com',
            'origin_country' => 'Nigeria',
            'origin_city' => 'Yaba',
            'destination_country' => 'United Kingdom',
            'destination_city' => 'Maryland',
            'parcels' => mt_rand(1,5),
            'weight' => mt_rand(5,50),
            'mode' => mt_rand(1,2),
        ];
        $response = $this->post(route('confirm'), $data);

        $response->assertStatus(200);

        $response->assertViewIs('order.confirm');
    
        $response->assertSessionHasNoErrors();
    }
}
