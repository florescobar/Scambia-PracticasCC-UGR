<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class CurrencyRateTest extends TestCase
{
    public function test_that_amount_is_double(): void
    {
        $value = 3.565;
        $this->assertIsNumeric($value);
    }
}
