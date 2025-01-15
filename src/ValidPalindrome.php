<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $s = strtolower(preg_replace("/[^a-zA-Z0-9]/", "", $s));
        if (strlen($s) === 1) { return true; }

        $j = strlen($s) - 1;

        for ($i = 0; $i < strlen($s) / 2; $i ++) {
            if ($s[$i] !== $s[$j]) {
                return false;
            }
            $j--;
        }

        return true;
    }
}

$solution = new Solution();
if($solution->isPalindrome("0P")) {
    echo "Yeah";
} else {
    echo "Oooh";
}
