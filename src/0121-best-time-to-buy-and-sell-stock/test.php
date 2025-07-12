<?php

define('SOLUTION_CLASS', 'SolutionOptimized');
require_once SOLUTION_CLASS . '.php';

function assertEquals($expected, $actual, $message = '') {
    if ($expected !== $actual) {
        echo "❌ Test failed: $message\n";
        echo "Expected: $expected\n";
        echo "Actual:   $actual\n";
        exit(1);
    } else {
        echo "✅ $message\n";
    }
}

function testMaxProfit() {
    $s = new SolutionOptimized();

    assertEquals(5, $s->maxProfit([7,1,5,3,6,4]), 'Ejemplo 1');
    assertEquals(0, $s->maxProfit([7,6,4,3,1]), 'Ejemplo 2');
    assertEquals(3, $s->maxProfit([2,1,4]), 'Ganancia entre días 1 y 2');
    assertEquals(0, $s->maxProfit([2,2,2,2]), 'Sin ganancia');
}

testMaxProfit();