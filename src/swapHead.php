<?php

/**
 * Definition for a singly-linked list.
 */

class ListNode {
    public int $val = 0;
    public ?ListNode $next = null;
    public function __construct($val = 0, ?ListNode $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution {

    public function swapPairs(ListNode $head): ListNode {
        $dummy = new ListNode(0);
        $dummy->next = $head;
        $currentHead = $dummy;

        while ($currentHead->next !== null && $currentHead->next->next !== null) {
            $first = $currentHead->next;
            $second = $currentHead->next->next;

            $first->next = $second->next;
            $second->next = $first;
            $currentHead->next = $second;
            $currentHead = $first;
        }

        return $dummy->next;
    }
}

$node1 = new ListNode(4);
$node2 = new ListNode(3, $node1);
$node3 = new ListNode(2, $node2);
$node4 = new ListNode(1, $node3);

$solution = new Solution();
$head = $solution->swapPairs($node4);

while ($head !== null) {
    print_r($head->val);
    $head = $head->next;
}

print_r("<br>Done");


