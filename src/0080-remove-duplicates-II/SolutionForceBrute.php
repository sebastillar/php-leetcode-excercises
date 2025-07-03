<?php

class SolutionForceBrute {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        if(count($nums) <= 2 ) return count($nums);
        
        $k=1;
        $aux = [$nums[0]];

        for($i=1; $i<count($nums); $i++){
            if($nums[$i] !== $nums[$k-1]){
                $nums[$k] = $nums[$i];
                $k++;
                $aux=[$nums[$k]];
            }
            else{
                array_push($aux,$nums[$i]);

                if(count($aux) <= 2){
                    $nums[$k] = $nums[$i];
                    $k++;
                }                
            }
        }
        return $k;
    }
}