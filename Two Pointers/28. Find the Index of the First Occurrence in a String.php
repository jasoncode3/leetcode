<?php

class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
            $index = strpos($haystack, $needle);
            if ($index === false) {
                return -1;
            }
            return $index;
    }

    function strString($haystack, $needle) {
    
        $haystackLength = strlen($haystack);
        $needleLength = strlen($needle);
    
        for($i=0;$i<$haystackLength; $i++){
            if($haystack[$i]===$needle[0]){
                $checkWord = substr($haystack, $i, $needleLength);
                if($checkWord===$needle){
                    return $i;
                }
            }
        }
        return -1;
    }
}

