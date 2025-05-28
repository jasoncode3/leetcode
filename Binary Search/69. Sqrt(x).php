<?php

// 69. Sqrt(x)

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function mySqrt($x) {

        $num = 0;

        while (($num*$num) <= $x) {
            $num++;
        }
        return $num-1;
    }
}

$solution = new Solution;
$x = 8;
echo $solution->mySqrt($x);
