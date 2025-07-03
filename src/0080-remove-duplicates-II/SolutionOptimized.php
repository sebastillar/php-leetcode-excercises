<?php

class SolutionOptimized {
    function removeDuplicates(&$nums) {
        $k = 0;

        foreach ($nums as $num) {
            if ($k < 2 || $num !== $nums[$k - 2]) {
                $nums[$k++] = $num;
            }
        }

        return $k;
    }
}
