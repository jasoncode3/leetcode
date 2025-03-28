<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        sort($nums);
        $index=0;

        $valueC = array_count_values($nums);
        $cutL = $valueC[$val]; 

        foreach ($nums as $number) {
            if ($number === $val) {
                break; 
            }
            $index += 1;
        }
        array_splice($nums, $index, $cutL);
    }
}