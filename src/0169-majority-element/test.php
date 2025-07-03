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

function testMajorityElement() {
    $s = new SolutionOptimized();

    assertEquals(3, $s->majorityElement([3,2,3]), 'Ejemplo 1');
    assertEquals(2, $s->majorityElement([2,2,1,1,1,2,2]), 'Ejemplo 2');
    assertEquals(1, $s->majorityElement([1,1,1,1,2,3,4]), 'Caso extra: mayoría clara');
    assertEquals(5, $s->majorityElement([5,5,5]), 'Caso extra: todos iguales');
}

testMajorityElement();