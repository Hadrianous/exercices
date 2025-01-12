<?php

class Solution {

    /**
     * @param String $str1
     * @param String $str2
     * @return String
     */
    function gcdOfStrings($str1, $str2) {
        $divisor = [];
        $charCount = [];
        for ($i=0; $i < max(strlen($str1), strlen($str2)); $i++) {
            if (!empty($str1[$i]) && $str1[$i] === $str2[$i]) {
                $charCount[$str1[$i]] = ($charCount[$str1[$i]] ?? 0) + 1;
            }
        }
        print_r($charCount);

        foreach ($charCount as $char => $value) {
            if ($value < 2) {
                break;
            }
            $divisor[] = $char;
        }

        return implode($divisor);
    }
}

$str1 = "ABCABC";
$str2 = "ABC";

$solution = new Solution();
print_r($solution->gcdOfStrings($str1, $str2));