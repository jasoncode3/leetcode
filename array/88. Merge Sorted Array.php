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
        $count = 0;
        $nums1 = array_merge($nums1, $nums2);
        sort($nums1);
        foreach($nums1 as $number) {
            if ($number === 0) {
                $count += 1;
            }
        }
        $nums1 = array_slice($nums1, $count);
    }
}

