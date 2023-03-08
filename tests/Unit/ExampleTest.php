<?php

namespace Tests\Unit;

use App\Calculator;
use Exception;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        //correción
        $this->assertTrue(true);
    }

    public function testAdd()
    {


        $calculator = new Calculator();

        $result = $calculator->add(2, 2);

        $this->assertEquals(4, $result);
    }

    public function testSubtract()
    {
        $calculator = new Calculator();

        $result = $calculator->subtract(5, 3);

        $this->assertEquals(2, $result);
    }

    public function testMultiply()
    {
        $calculator = new Calculator();

        $result = $calculator->multiply(2.5, 4);

        $this->assertEquals(10, $result);
    }

    public function testDivide()
    {
        $calculator = new Calculator();

        $result = $calculator->divide(10, 2);

        $this->assertEquals(5, $result);
    }
}
