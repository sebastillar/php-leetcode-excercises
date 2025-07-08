<?php

define('SOLUTION_CLASS', 'SolutionOptimized');
require_once SOLUTION_CLASS . '.php';

function assertArrayEquals($expected, $actual, $message = '') {
    if ($expected !== $actual) {
        echo "❌ Test failed: $message\n";
        echo "Expected: " . json_encode($expected) . "\n";
        echo "Actual:   " . json_encode($actual) . "\n";
        exit(1);
    } else {
        echo "✅ $message\n";
    }
}

function testRotateArray() {
    $s = new SolutionOptimized();

    $nums = [1,2,3,4,5,6,7];
    $s->rotate($nums, 3);
    assertArrayEquals([5,6,7,1,2,3,4], $nums, 'Ejemplo 1');

    $nums = [-1,-100,3,99];
    $s->rotate($nums, 2);
    assertArrayEquals([3,99,-1,-100], $nums, 'Ejemplo 2');

    $nums = [1,2];
    $s->rotate($nums, 0);
    assertArrayEquals([1,2], $nums, 'Sin rotación');

    $nums = [1];
    $s->rotate($nums, 99);
    assertArrayEquals([1], $nums, 'Rotación en array de 1 elemento');
}

testRotateArray();
