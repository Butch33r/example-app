<?php

namespace App;

class Calculator
{
    public function add($num1, $num2)
    {
        return $num1 + $num2;
    }

    public function subtract($num1, $num2)
    {
        return $num1 - $num2;
    }

    public function multiply($num1, $num2): float|int
    {
        return $num1 * $num2;
    }

    public function divide($num1, $num2): float|int
    {
        if ($num2 == 0) {
            throw new \InvalidArgumentException('It cannot be divided by zero.'); //No se puede dividir por cero.
        }

        return $num1 / $num2;
    }
    
}