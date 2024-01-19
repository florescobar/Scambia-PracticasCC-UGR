<?php

namespace Tests\Feature;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /*
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->post('api/currencyrate/calculate')
                    ->assertStatus(200)
                    ->assertJson([
                        'errorCode' => '1',
                        'message' => 'El campo "¿ cuanto dinero envias?" es requerido.'
                    ]);
    }
    */

    public function test_calculate_amount(): void
    {
        $response = $this->post('api/currencyrate/calculate');

        $response->assertStatus(200);
    }
}
