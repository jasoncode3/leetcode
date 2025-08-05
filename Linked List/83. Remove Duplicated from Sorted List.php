<?php

class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}
 
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function deleteDuplicates($head) {
        $current = $head;

        while($current !== null && $current->next !== null) {
            if ($current->val === $current->next->val) {
                $current->next = $current->next->next;
            }
            else {
                $current = $current->next;
            }
        }

        print_r($head);

        return $head;
    }
}

$head = new ListNode(1, new ListNode(2, new ListNode(7)));

$solution = new Solution;
print_r($solution->deleteDuplicates($head));
