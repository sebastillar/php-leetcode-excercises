<?php

class SolutionOptimized {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $minPrice = PHP_INT_MAX;
        $maxProfit = 0;

    foreach ($prices as $price) {
        if ($price < $minPrice) {
            $minPrice = $price;
        } else {
            $maxProfit = max($maxProfit, $price - $minPrice);
        }
    }

    return $maxProfit;
}

}