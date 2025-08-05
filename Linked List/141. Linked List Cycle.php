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
    function hasCycle($head) {
        $arr = [];
        if ($head === null) {
            return false;
        }
        if (!isset($head->next)) {
            return false;
        }
        while ($head !== null) {
            $arr[] = $head;
            if (in_array($head, $arr, true)) {
                return true;
            }
            $head = $head->next;
        }
        return false;
    }
}

$head = new ListNode(1, new ListNode(2, new ListNode(7)));

$solution = new Solution;
print_r($solution->hasCycle($head));

