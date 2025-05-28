<?php

// 145. Binary Tree Postorder Traversal

class TreeNode {
    public $val = null;
    public $left = null;
    public $right = null;
    function __construct($val = 0, $left = null, $right = null) {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}


class Solution {

    /**
     * @param TreeNode $root
     * @return Integer[]
     */

    public $arr = [];

    function postorderTraversal($root) {

        if(isset($root->left)){
            $this->postorderTraversal($root->left);
        }

        if(isset($root->right)){
            $this->postorderTraversal($root->right);
        }
        
        $this->arr[] = $root->val;

        return $this->arr;
    }
}

$treeNode3 = new TreeNode(3, null, null);
$treeNode2 = new TreeNode(2, null, $treeNode3);
$tree = new TreeNode(1, null, $treeNode2);

$solution = new Solution;
print_r($solution->postorderTraversal($tree));