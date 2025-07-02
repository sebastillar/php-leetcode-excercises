<?php

class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        $k = 0;
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] !== $val) {
                $nums[$k++] = $nums[$i];
            }
        }
        return $k;
    }
}