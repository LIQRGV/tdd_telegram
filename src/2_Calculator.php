<?php

class Calculator
{
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
                $tempResult = 1;
                for($i = 0;$i < $numB;$i++){
                    $tempResult = $tempResult * $numA;
                }
                return $tempResult;
        };
    }
}
