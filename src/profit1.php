<?php

//class Solution {
//
//    /**
//     * @param Integer[] $prices
//     * @return Integer
//     */
//    function maxProfit($prices) {
//        if (count($prices) <= 1) {
//            return 0;
//        }
//
//        $profit = 0;
//        for($day = 0; $day < count($prices); $day++) {
//            for ($nextDay = $day + 1; $nextDay < count($prices); $nextDay++) {
//                $possibleProfit = $prices[$nextDay] - $prices[$day];
//                if ($possibleProfit > $profit) {
//                    $profit = $possibleProfit;
//                }
//            }
//        }
//
//        return $profit;
//    }
//}

class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        if (count($prices) <= 1 || count($prices) >= 10**5) {
            return 0;
        }

        $min = $prices[0];
        $profit = 0;
        for($day = 0; $day < count($prices); $day++) {
            $currentPrice = $prices[$day];

            if ($min > $currentPrice) {
                $min = $currentPrice;
            }

            $profit = max($profit, $currentPrice - $min);
        }

        return $profit;
    }
}

$solution = new Solution();
//echo " result ";
//echo $solution->maxProfit([7,1,5,3,6,4]);
//echo " result ";
//echo $solution->maxProfit([2,1,2,1,0,1,2]);
echo " result ";
echo $solution->maxProfit([6,9,1,1,4]);
