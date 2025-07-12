<?php


class SolutionForceBrute {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {
        
        $totalItems = count($nums);

        if($totalItems <= 1 || $k===0 ){return $nums;}

        if($k>$totalItems){
            $k = $k%$totalItems;
        }

        $initialK = $k;
        for($i=$totalItems-1;$i >=0;$i--){
            $k--;
            if($k>=0){
                $nums[$i-$totalItems]=$nums[$i];
            }
            else{
                break;
            }
        }

        foreach($nums as $key => $value){
            $nums[$key + $initialK] = $value;
            if($key<0){
                unset($nums[$key]);
            }
            if($key + $initialK > $totalItems-1){
                unset($nums[$key + $initialK]);
            }
        }

        return $nums;
    }
}