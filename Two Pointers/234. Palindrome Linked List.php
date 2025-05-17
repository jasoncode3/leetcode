<?php

// 234. Palindrome Linked List

class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

function isPalindrome($head) {
    $val = "";
    while ($head !== null) {
        $val .= $head->val;
        $head = $head->next;
    }

    if ($val===strrev($val)) {
        return true;
    } else {
        return false;
    }
}

function palindromeCheck($head) {
    $val = "";
    $valB = "";
    while ($head !== null) {
        $val .= $head->val;
        $head = $head->next;

    }

    for($i=strlen($val)-1; $i >= 0; $i--) {
        $valB .= $val[$i];
    }

    if ($val === $valB) {
        return true;
    } else {
        return false;
    }
}

function palindromeCheckArr($head) {
    $arr = [];
    while($head){
        $arr[] = $head->val;
        $head = $head->next;
    }
    return $arr === array_reverse($arr);
}


$head = new ListNode(1, new ListNode(2, new ListNode(2, new ListNode(1))));
// isPalindrome($head);
// palindromeCheck($head);
palindromeCheckArr($head);

