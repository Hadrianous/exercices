<?php


class Solution {

    static function longestCommonPrefix($strs) {
        
        sort($strs);
        $firstWord = $strs[0];
        $lastWord = end($strs);
        $longestPrefix = "";

        $i = 0;
        while(true) {
            if (
                empty($firstWord[$i])
                || empty($lastWord[$i])
                || $firstWord[$i] !== $lastWord[$i]
            ) {
            echo $firstWord[$i];
                return $longestPrefix;
            }
            
            $longestPrefix .= $firstWord[$i];
            $i++;
        }

        return $longestPrefix;
    }
}

$strings = ["flower","flow","flight"];
echo Solution::longestCommonPrefix($strings);
