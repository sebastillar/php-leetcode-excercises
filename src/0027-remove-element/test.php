<?php

define('SOLUTION_CLASS', 'Solution');
require_once SOLUTION_CLASS . '.php';

function assertEquals($expected, $actual, $message = '') {
    if ($expected !== $actual) {
        echo "❌ Test failed: $message\n";
        echo "Expected: " . json_encode($expected) . "\\n";
        echo "Actual:   " . json_encode($actual) . "\\n";
        exit(1);
    } else {
        echo "✅ $message\\n";
    }
}

function testRemoveElement() {
    $className = SOLUTION_CLASS;
    $s = new $className();

    // Ejemplo 1
    $nums = [3, 2, 2, 3];
    $val = 3;
    $k = $s->removeElement($nums, $val);
    assertEquals(2, $k, 'Ejemplo 1: longitud');
    assertEquals([2, 2], array_slice($nums, 0, $k), 'Ejemplo 1: contenido');

    // Ejemplo 2
    $nums = [0,1,2,2,3,0,4,2];
    $val = 2;
    $k = $s->removeElement($nums, $val);
    assertEquals(5, $k, 'Ejemplo 2: longitud');
    assertEquals([0,1,3,0,4], array_slice($nums, 0, $k), 'Ejemplo 2: contenido');

    // Caso adicional: sin ocurrencias
    $nums = [1,2,3];
    $val = 4;
    $k = $s->removeElement($nums, $val);
    assertEquals(3, $k, 'Caso extra: sin ocurrencias');
    assertEquals([1,2,3], array_slice($nums, 0, $k), 'Caso extra: sin ocurrencias contenido');
}

testRemoveElement();