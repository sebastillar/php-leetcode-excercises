<?php

class SolutionOptimized {
    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {
        $n = count($nums);
        $k = $k % $n;

        $this->reverse($nums, 0, $n - 1);
        $this->reverse($nums, 0, $k - 1);
        $this->reverse($nums, $k, $n - 1);
    }

    private function reverse(&$arr, $start, $end) {
        while ($start < $end) {
            $temp = $arr[$start];
            $arr[$start] = $arr[$end];
            $arr[$end] = $temp;
            $start++;
            $end--;
        }
    }
}