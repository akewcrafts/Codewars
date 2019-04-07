<?php 

/* 

### Task

Given a string str, reverse it omitting all non-alphabetic characters.

### Example Input/Output :

For str = "krishan", the output should be "nahsirk".
For str = "ultr53o?n", the output should be "nortlu".
For str = "Kmz!Way98%aa", the output should be "aayaWzmK".

*/

function reverseLetter($str){

  return strrev(preg_replace('/[^a-zA-Z*]/','',$str));
  // Sanitize input (only alphabetic)
  // reverse letter in a string

}

echo reverseLetter('Kmz!Way98<aa');