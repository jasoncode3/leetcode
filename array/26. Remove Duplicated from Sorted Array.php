<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    
    function removeDuplicates(&$nums) {
        $nums = array_unique($nums);
        $k = count($nums);
        return $k;
    }
}