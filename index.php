<?php

/*

https://cs.lmu.edu/~ray/notes/regex/
https://www.w3resource.com/python-exercises/re/
https://www.hackerrank.com/challenges/matching-specific-string/problem?isFullScreen=true
https://towardsdatascience.com/regular-expressions-clearly-explained-with-examples-822d76b037b4

*/

/* 
 Example #1
*/

$pattern = '/\$NAME\$/';  // find name with $NAME$
$string = 'My name is $NAME$';
echo 'Match Status '. preg_match($pattern, $string) . '<br>';

$output = preg_replace($pattern, 'Abdul Waheed', $string);
echo $output . '<br>';

/* 
 Example #1 End
*/


/* 
 Example #2
*/

// find any character in between $ symbol where "." means any char and "+" means one or more chars

$pattern = '/\$.+\$/';  
$string = 'My name is $NAme$';
echo 'Match Status '. preg_match($pattern, $string) . '<br>';

$output = preg_replace($pattern, 'Abdul Waheed', $string);
echo $output . '<br>';;

/* 
 Example #2 End
*/


/* 
 Example #3
*/

// find string having c chars in [eNAm] in between dollar symbol

$pattern = '/\$[eNAm]+\$/';  
$string = 'My name is $NAme$';
echo 'Match Status '. preg_match($pattern, $string) . '<br>';

$output = preg_replace($pattern, 'Abdul Waheed', $string);
echo $output . '<br>';;

/* 
 Example #3 End
*/


/* 
 Example #4
*/

// find only caps latter in between $ symbol

$pattern = '/\$[A-Z]+\$/';  
$string = 'My name is $ABCD$';
echo 'Match Status '. preg_match($pattern, $string) . '<br>';

$output = preg_replace($pattern, 'Abdul Waheed', $string);
echo $output . '<br>';;

/* 
 Example #4 End
*/


/* 
 Example #4
*/

// find lower and upper case latters in between $ symbol

$pattern = '/\$[A-Z, a-z]+\$/';  
$string = 'My name is $ABCDabc$';
echo 'Match Status '. preg_match($pattern, $string) . '<br>';

$output = preg_replace($pattern, 'Abdul Waheed', $string);
echo $output . '<br>';;

/* 
 Example #4 End
*/


/* 
 Example #5
*/

// find lower and upper case latters in between $ symbol

$pattern = '/https://[^\s]{3}/i';  
$string = 'www.google.com https://googe.com visit https://laragone.com';
preg_match_all($pattern, $string, $matches);
    print_r($matches);
  

/* 
 Example #5 End
*/



/* 

#1 find domain name from text like "www.google.com" or https://google.com or https://www.google.com
  /((www|https|http|ftp))([^\s]+(.com))/g

#2 find all string having stupid|bad|ediots
   /stupid|bad|ediots/i

   /stupid|bad|idiot(ic)?/ with ic as an optional
 

*/



$arr = [
    ['date' => '2020-02-01', 'amount' => 100],
    ['date' => '2020-02-02', 'amount' => 100],
    ['date' => '2020-02-03', 'amount' => 100],
    ['date' => '2020-02-04', 'amount' => 100],
    ['date' => '2020-03-01', 'amount' => 100],
    ['date' => '2020-03-01', 'amount' => 100]
];

$sum_arry = [];
for($i=1; $i<=12; $i++) {
    $pattern = "/\d{4}-".str_pad($i, 2, '0', STR_PAD_LEFT)."-\d{2}/i"; 
    array_push($sum_arry, find_sum($arr, $pattern));
}
sort($sum_arry);
print_r($sum_arry);

function find_sum($arr2, $pattern) {
    $sum = 0;
    foreach($arr2 as $d) {
        if(preg_match($pattern, $d['date'])) {
            $sum += $d['amount'];
        }
    }
    return $sum;
}
  

