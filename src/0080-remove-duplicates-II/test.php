<?php

define('SOLUTION_CLASS', 'SolutionOptimized');
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
    $nums = [1,1,1,2,2,3];
    $k = $s->removeDuplicates($nums);
    assertEquals(5, $k, 'Ejemplo 1: longitud');
    assertEquals([1,1,2,2,3], array_slice($nums, 0, $k), 'Ejemplo 1: contenido');

    // Ejemplo 2
    $nums = [0,0,1,1,1,1,2,3,3];
    $k = $s->removeDuplicates($nums);
    assertEquals(7, $k, 'Ejemplo 2: longitud');
    assertEquals([0,0,1,1,2,3,3], array_slice($nums, 0, $k), 'Ejemplo 2: contenido');

    // Caso adicional
    $nums = [1,1,1,1];
    $k = $s->removeDuplicates($nums);
    assertEquals(2, $k, 'Caso extra: solo dos permitidos');
    assertEquals([1,1], array_slice($nums, 0, $k), 'Caso extra: contenido');
}

testRemoveDuplicates();