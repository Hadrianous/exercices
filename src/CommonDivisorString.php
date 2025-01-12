<?php

class Solution {

    function gcdOfStrings(string $str1, string $str2): String {

        if ($str1 . $str2 !== $str2 . $str1) {
            return "";
        }

        $dividend = max(strlen($str1), strlen($str2));
        $divisor = min(strlen($str1), strlen($str2));

        $gcd = $this->getGCD($dividend, $divisor);

        return substr($str1, 0, $gcd);
    }

    private function getGCD(int $x, int $y): int {
        if ($y === 0) {
            return $x;
        }

        return $this->getGCD($y, $x % $y);
    }
}

$str1 = "TAUXXTAUXXTAUXXTAUXXTAUXX";
$str2 = "TAUXXTAUXXTAUXXTAUXXTAUXXTAUXXTAUXXTAUXXTAUXX";

$solution = new Solution();
print_r($solution->gcdOfStrings($str1, $str2));
