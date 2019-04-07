<?php

/*
### Task
In this kata you are required to, given a string, replace every letter with its position in the alphabet.
If anything in the text isn't a letter, ignore it and don't return it.
"a" = 1, "b" = 2, etc.

### Example Input/Output
alphabet_position("The sunset sets at twelve o' clock.")
Should return "20 8 5 19 21 14 19 5 20 19 5 20 19 1 20 20 23 5 12 22 5 15 3 12 15 3 11" as String

*/

function alphabet_position(string $s): string {
    
    $s = preg_replace('/[^a-zA-Z]/','', strtoupper($s)); // Only alphabetic
    $arr = str_split($s); // convert string to array
    $container=[]; // to collect each looping value

    if(!empty($s)){

        for ($i=0; $i < count($arr); $i++) { 
		    $container[]= ord($arr[$i])-ord('@'); // ord-> convert char to ASCII value
        
    }
    
        return '"'.implode($container,' ').'"'; // convert array into string format and separate it with space
} else 

    return false;
}

echo alphabet_position("aku ingin menjadi programmer yang baik");