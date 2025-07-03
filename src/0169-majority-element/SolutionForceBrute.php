<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {

        $k = 0;
        $aux = [];
        $max = 0;

        foreach($nums as $num){
            ++$aux[$num];
    
            if($aux[$num]>$max){
                $max = $aux[$num];
                $k = $num;
            }            
        }

        return $k;
    }
}