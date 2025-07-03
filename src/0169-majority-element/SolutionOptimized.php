<?php
// Optimized solution for the Majority Element problem using Boyer-Moore Voting Algorithm
class SolutionOptimized {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $count = 0;
        $candidate = null;

        foreach ($nums as $num) {
            if ($count === 0) {
                $candidate = $num;
            }
            $count += ($num === $candidate) ? 1 : -1;
        }

        return $candidate;
    }
}