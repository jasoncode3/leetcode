<?php

// 219

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Boolean
     */
    function containsNearbyDuplicate($nums, $k) {
        $seen = [];
        foreach($nums as $key => $value) {
            if(isset($seen[$value]) && ($key - $seen[$value] <= $k) ) {
                return true;
            }
            $seen[$value] = $key;
        }
        return false;
    }
}

$nums = [1,2,0,3,3,1,2];
$k = 3;
$solution = new Solution;
echo $solution->containsNearbyDuplicate($nums, $k);
