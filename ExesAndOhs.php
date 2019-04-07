<?php 

/*

### Task

Check to see if a string has the same amount of 'x's and 'o's. 
The method must return a boolean and be case insensitive. The string can contain any char.

### Example Input/Output:

XO("ooxx") => true
XO("xooxx") => false
XO("ooxXm") => true
XO("zpzpzpp") => true // when no 'x' and 'o' is present should return true
XO("zzoo") => false

*/

function XO($s) {

return substr_count(strtolower($s),'x') == substr_count(strtolower($s),'o') ? true : false ;

// convert to lowercase and count how many x
// convert to lowercase and count how many s
// if x dan s has same amount then print 'true' if not print 'false'

}

var_dump(XO('ooxxx')); // to see boolean output