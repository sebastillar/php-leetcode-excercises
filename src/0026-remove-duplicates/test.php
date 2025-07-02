<?php

define('SOLUTION_CLASS', 'Solution');
require_once SOLUTION_CLASS . '.php';

function assertEquals($expected, $actual, $message = '') {
    if ($expected !== $actual) {
        echo "❌ Test failed: $message\n";
        echo "Expected: " . json_encode($expected) . "\n";
        echo "Actual:   " . json_encode($actual) . "\n";
        exit(1);
    } else {
        echo "✅ $message\n";
    }
}

function testRemoveDuplicates() {
    $className = SOLUTION_CLASS;
    $s = new $className();

    // Ejemplo 1
    $nums = [1,1,2];
    $k = $s->removeDuplicates($nums);
    assertEquals(2, $k, 'Ejemplo 1: longitud');
    assertEquals([1,2], array_slice($nums, 0, $k), 'Ejemplo 1: contenido');

    // Ejemplo 2
    $nums = [0,0,1,1,1,2,2,3,3,4];
    $k = $s->removeDuplicates($nums);
    assertEquals(5, $k, 'Ejemplo 2: longitud');
    assertEquals([0,1,2,3,4], array_slice($nums, 0, $k), 'Ejemplo 2: contenido');

    // Caso adicional: vacío
    $nums = [];
    $k = $s->removeDuplicates($nums);
    assertEquals(0, $k, 'Caso vacío');
}

testRemoveDuplicates();