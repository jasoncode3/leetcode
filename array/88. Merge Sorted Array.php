<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        $merged = array_merge(array_slice($nums1, 0, $m), $nums2);
        sort($merged);
    
        for ($i = 0; $i < $m + $n; $i++) {
            $nums1[$i] = $merged[$i];
        }
    }
}

