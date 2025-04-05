<?php

$nums = [1,3,5,6];
$target = -1;

function searchInsert($nums, $target) {

    $index = 0;
    
    foreach($nums as $number) {
        if ( ($number === $target) || ($target < $nums[0]) ) {
            return $index;
        }

        else if ( ( isset($nums[$index-1]) ) && ($nums[$index] > $target) ) {
                    return $index;
        }

        $index += 1;
    }
    return $index;
}

echo searchInsert($nums, $target);

