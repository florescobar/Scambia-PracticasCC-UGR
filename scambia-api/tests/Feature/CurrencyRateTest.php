<?php

namespace Tests\Feature;
use Tests\TestCase;

class CurrencyRateTest extends TestCase
{
    /*
    public function test_result_calculate_amount(): void
    {
        $askPrice = 3.766000;
        $amount = 1000;
        $expected = round( $amount / $askPrice, 2, PHP_ROUND_HALF_DOWN);

        $data = [
            "amount" => 1000
        ];

        $response = $this->post('api/currencyrate/calculate', $data);

        $response->assertStatus(200)
        ->assertJson([
            'errorCode' => '0',
            'message' => '',
            'data'=> ['quotedAmount'=>$expected]
        ]);

    } 

    public function test_for_calculate_currency_type_field()
    {
        $data = [
            "amount" => "20045s"
        ];

        $response = $this->post('api/currencyrate/calculate', $data)
                        ->assertStatus(200)
                        ->assertJson([
                            'errorCode' => '1',
                            'message' => 'El campo "¿ cuanto dinero envias?" tiene que ser un número.'
                        ]);
    }

    public function test_for_calculate_currency_required_fields()
    {
        $response = $this->post('api/currencyrate/calculate')
                        ->assertStatus(200)
                        ->assertJson([
                            'errorCode' => '1',
                            'message' => 'El campo "¿ cuanto dinero envias?" es requerido.'
                        ]);
    }

    public function test_get_currencyrate_all(): void
    {        
        $response = $this->get('api/currencyrate');

        $response->assertStatus(200)
        ->assertJson([
            'errorCode' => '0',
            'message' => 'Ok',
        ]);
    }
    */

    public function test_calculate_amount(): void
    {
        
        $response = $this->post('api/currencyrate/calculate');

        $response->assertStatus(200);
    }

    public function test_get_currencyrate(): void
    {        
        $response = $this->get('api/currencyrate/1');

        $response->assertStatus(200);
    }
}
