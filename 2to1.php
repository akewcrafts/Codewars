<?php 

/*

Take 2 strings s1 and s2 including only letters from a to z. 
Return a new sorted string, the longest possible, containing distinct letters,
each taken only once - coming from s1 or s2.

##EXAMPLE

a = "xyaabbbccccdefww"
b = "xxxxyyyyabklmopq"
longest(a, b) -> "abcdefklmopqwxy"

a = "abcdefghijklmnopqrstuvwxyz"
longest(a, a) -> "abcdefghijklmnopqrstuvwxyz"

*/


function longest($a,$b) {

// Only Lowercase Alphabetic Char will be valid

if(!empty($a . $b) && ctype_lower($a . $b)){
        
        // merge (array) input and remove duplicate character
        
        $char = array_unique(array_merge(str_split($a . $b)));
        
        // sorting char
        
        sort($char);
        
        // array to string with no delimiter
        
        $result = implode('', $char);
        
        // get result from this function
        
        return $result;
        
    } else return false;

}

echo longest('aku','programmer');