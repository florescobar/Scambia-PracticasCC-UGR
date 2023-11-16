<?php

namespace Tests\Feature;

//use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CurrencyRateTest extends TestCase
{
    public function test_for_calculate_currency_required_fields()
    {
        $response = $this->post('api/currencyrate/calculate')
                        ->assertStatus(200)
                        ->assertJson([
                            'errorCode' => '1',
                            'message' => 'El campo "¿ cuanto dinero envias?" es requerido.'
                        ]);
    }

    public function test_get_currencyrate(): void
    {        
        $response = $this->get('api/currencyrate');

        $response->assertStatus(200);
    }

    public function test_calculate_amount(): void
    {
        
        $response = $this->post('api/currencyrate/calculate');

        $response->assertStatus(200);
    }
}
