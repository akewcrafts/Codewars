<?php 

/*
## Task

Write a function called repeatStr which repeats the given string string exactly n times

## Example Input/Output

repeatStr(6, "I") // "IIIIII"
repeatStr(5, "Hello") // "HelloHelloHelloHelloHello"

*/

function repeatStr(Int $n, String $str)
{
    return str_repeat($str, $n);
}

echo repeatStr(3, 'ngoding');