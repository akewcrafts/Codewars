<?php

/*

## Task

In this little assignment you are given a string of space separated numbers, and have to return the highest and lowest number.

## Example 

highAndLow("1 2 3 4 5");  // return "5 1"
highAndLow("1 2 -3 4 5"); // return "5 -3"
highAndLow("1 9 3 4 -5"); // return "9 -5"  

*/

function highAndLow($numbers)
{

  $numbers = explode(' ',$numbers);
  rsort($numbers);
  $res []  = reset($numbers);
  $res [] += end($numbers);

  return implode(' ',$res);

  // best practice -> return max($numbers).' '.min($numbers);  

}

echo(highAndLow("1 2 3 4 5 -6"));