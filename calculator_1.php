<?php

function calculate($numA, $opr, $numB) {
    switch($opr){
        case '+':
            return $numA + $numB;
            break;
        case '-':
            return $numA - $numB;
            break;
        case ':':
            return $numA / $numB;
            break;
        case 'x':
            return $numA * $numB;
            break;
    };
}
