<?php

class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */
    function generateParenthesis($n) {

        $result = [];
        $this->addParenthesis($n - 1, $n, "(", $result);

        return $result;
    }

    private function addParenthesis(int $remainingOpen, int $remainingClose, string $combination, array &$result) {
        if ($remainingOpen === 0 && $remainingClose === 0) {
            $result[] = $combination;
        }

        if ($remainingOpen < $remainingClose) {
            $this->addParenthesis($remainingOpen, $remainingClose - 1, $combination . ")", $result);
        }

        if ($remainingOpen > 0) {
            $this->addParenthesis($remainingOpen - 1, $remainingClose, $combination . "(", $result);
        }
    }
}

$solution = new Solution();
$solution->generateParenthesis(3);
print_r($solution->generateParenthesis(3));
