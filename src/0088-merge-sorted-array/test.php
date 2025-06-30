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

function testMergeSortedArray() {
    $className = SOLUTION_CLASS;
    $s = new $className();

    $nums1 = [1,2,3,0,0,0];
    $nums2 = [2,5,6];
    $s->merge($nums1, 3, $nums2, 3);
    assertArrayEquals([1,2,2,3,5,6], $nums1, 'Ejemplo 1');

    $nums1 = [1];
    $nums2 = [];
    $s->merge($nums1, 1, $nums2, 0);
    assertArrayEquals([1], $nums1, 'Ejemplo 2');

    $nums1 = [0];
    $nums2 = [1];
    $s->merge($nums1, 0, $nums2, 1);
    assertArrayEquals([1], $nums1, 'Ejemplo 3');
}

testMergeSortedArray();
