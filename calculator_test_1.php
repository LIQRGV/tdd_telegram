<?php
require 'calculator.php';

function test_plus(){
    assert(calculate(2, '+', 1) == 3);
}

function test_minus(){
    assert(calculate(2, '-', 1) == 1);
}

function test_division(){
    assert(calculate(4, ':', 2) == 2);
}

function test_multiply(){
    assert(calculate(2, 'x', 2) == 4);
}

test_plus();
test_minus();
test_division();
test_multiply();
