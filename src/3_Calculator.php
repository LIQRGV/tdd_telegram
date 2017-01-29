<?php

class Calculator
{
    function _pow($numA, $numB) {
        if($numB == 0) return 1;
        if($numB == 1) return $numA;
        $halfPow = $this->_pow($numA, $numB /2);

        if($numB % 2 == 1) {
            return $numA * $halfPow * $halfPow;
        } else {
            return $halfPow * $halfPow;
        }
    }

    function calculate($numA, $opr, $numB) {
        switch($opr){
            case '+':
                return $numA + $numB;
            case '-':
                return $numA - $numB;
            case ':':
                return $numA / $numB;
            case 'x':
                return $numA * $numB;
            case '^':
                return $this->_pow($numA, $numB);
        };
    }
}
