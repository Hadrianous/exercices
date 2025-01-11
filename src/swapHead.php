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
        $newStartHead = $head->next;
        $currentHead = $head;
        while ($currentHead->next !== null) {
            $currentHead = $currentHead->next;
            $this->swapHead($head);
            print_r($currentHead->val);
        }

        return $newStartHead;
    }

    private function swapHead(?ListNode $head) {
        if ($head === null || $head->next == null) {return;}
        $nextNode = $head->next;
        $head->next = $nextNode->next;
        $nextNode->next = $head;
    }
}

$node1 = new ListNode(2);
$node2 = new ListNode(1, $node1);
$node3 = new ListNode(4, $node2);
$node4 = new ListNode(3, $node3);

$solution = new Solution();
$head = $solution->swapPairs($node4);

while ($head->next == null) {
    print_r($head->val);
    $head = $head->next;
}

print_r("Done");


