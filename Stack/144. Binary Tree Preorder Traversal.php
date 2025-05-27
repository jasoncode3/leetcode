<?php

// 144. Binary Tree Preorder Traversal

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

    function preorderTraversal($root) {

        $this->arr[] = $root->val;

        if(isset($root->left)){
            $this->preorderTraversal($root->left);
        }
        if(isset($root->right)){
            $this->preorderTraversal($root->right);
        }
        return $this->arr;
    }
}

$treeNode3 = new TreeNode(3, null, null);
$treeNode2 = new TreeNode(2, $treeNode3, null);
$tree = new TreeNode(1, null, $treeNode2);

$solution = new Solution;
print_r($solution->preorderTraversal($tree));