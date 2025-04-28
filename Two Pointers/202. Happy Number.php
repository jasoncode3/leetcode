<?php

// 202

class Solution {

    // https://leetcode.com/problems/happy-number/solutions/5964403/simple-solution/

    function happy($n) {

        $seen = [];

        while($n!=1 && !isset($seen[$n])){
            $seen[$n] = true;
            
            $n = array_sum(array_map(function($digit){
                return $digit * $digit;
            }, str_split($n)));
        } 
        return $n==1;
    }
}

$n = 19;
$solution = new Solution;
$solution->happy($n);


