<?php

/*

Challenge:

Given a two-dimensional array of integers, return the flattened version of the array with all the integers in the sorted (ascending) order.

Example:

Given [[3, 2, 1], [4, 6, 5], [], [9, 7, 8]], your function should return [1, 2, 3, 4, 5, 6, 7, 8, 9].

*/

function flatten_and_sort($array) {

    $array = new RecursiveIteratorIterator(new RecursiveArrayIterator($array));
    
    $temp   = [];
    
    foreach($array as $v) {
    
        $temp[]+= $v;
    }

    $temp = array_unique($temp);
    sort($temp);
    return $temp;    
}

print_r(flatten_and_sort([[8],[3,2,1],[6,4,5],[],[7,8,9]]));