<?php

class Solution {
    function removeDuplicates(&$nums) {
        if (count($nums) === 0) return 0;

        $k = 1;

        for ($i = 1; $i < count($nums); $i++) {
            if ($nums[$i] !== $nums[$k - 1]) {
                $nums[$k] = $nums[$i];
                $k++;
            }
        }

        return $k;
    }
}
