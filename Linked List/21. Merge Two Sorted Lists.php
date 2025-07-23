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
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists($list1, $list2) {
        if($list1== null) return $list2;
        if($list2== null) return $list1;
      if($list1->val < $list2->val) {
            $list1->next = $this->mergeTwoLists($list1->next, $list2);
            return $list1;
        } else {
            $list2->next = $this->mergeTwoLists($list2->next, $list1);
            return $list2;
        }
    }
}

$list1 = new ListNode(1, new ListNode(5, new ListNode(9)));
$list2 = new ListNode(1, new ListNode(2, new ListNode(7)));

$solution = new Solution;
print_r($solution->mergeTwoLists($list1, $list2));

// 1 < 2 → pick list1's 1
// Set list1->next = mergeTwoLists(list1->next, list2)

// 2 < 5 → pick list2's 2
// Set list2->next = mergeTwoLists(list1, list2->next)
