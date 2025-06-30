<?php
class SolutionBruteForce {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        $aux = [];

        if(!count($nums2)){
            return $nums1;
        }

        if(!count($nums2)){
            return $nums2;
        }

        while(count($nums2)){

            if( $nums1[0] == 0){
                array_push($aux, $nums2[0]);
                array_shift($nums1);
                array_shift($nums2);
                continue;
            }

            if($nums1[0] < $nums2[0] ){
                array_push($aux, $nums1[0]);
                array_shift($nums1);
            }
            else{
                array_push($aux, $nums2[0]);
                array_shift($nums2);                
            }
        }
        $nums1 = $aux;
  
    }
}