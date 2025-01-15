<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs(int $n): int {

        if ($n === 1) { return 1; }

        $result = 0;

        $this->doStep($n -1, $result);
        $this->doStep($n -2, $result);

        return $result;
    }

    private function doStep(int $stepsLeft, int &$result) {
        if ($stepsLeft < 0) {
            return;
        }

//        print("left $stepsLeft");

        if (in_array($stepsLeft, [0, 1])) {
            $result++;
            return;
        }

        $this->doStep($stepsLeft -1, $result);
        $this->doStep($stepsLeft -2, $result);
    }
}

$solution = new Solution();
echo $solution->climbStairs(38);
if (assert(3 === $solution->climbStairs(38))) {
    echo "Done";
} else {
    echo "Failed";
}