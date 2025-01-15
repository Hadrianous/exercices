<?php

class Solution {
    public function climbStairs(int $n): int {

        if ($n === 1) { return 1; }

        $steps = [1, 1];

        for ($i = $n - 2; $i > 0; $i--) {
            $step1 = $steps[0];
            $steps[0] = $steps[0] + $steps[1];
            $steps[1] = $step1;
        }

        return $steps[0] + $steps[1];
    }
}

$solution = new Solution();
echo $solution->climbStairs(5);