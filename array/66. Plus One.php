<?php

class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $number = implode('', $digits);

        $number += 1;

        $number = str_split($number, 1);

        return $number;
    }
}