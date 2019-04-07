<?php 
/*
### Task

Reverse word in a sentenced

### Example Input/Output

"Good Programmer " should be "dooG remmargorP"

*/
function reverseWords(String $str) : String {

    $rev = strrev(preg_replace('/[^a-zA-Z *]/','', strtolower($str)));
    $strx = array_reverse(explode(' ',$rev));
    return implode(' ',$strx);

}

echo reverseWords('saya ingin jadi programmer yang baik');