<?php
// Problem 1:
// Given a list of integers, find the minimum of their absolute values. 
// Note:
// 'Absolute values' means the non-negative value without regard to its sign. For example, the Absolute value of 123 is 123, and the Absolute value of -123 is also 123. 

// Sample input 1:
// 10 12 15 189 22 2 34
// Sample output 1: 
// 2

// Sample input 2:
// 10 -12 34 12 -3 123
// Sample output 2:
// 3
$list = [10, 12, 15, 189, 22, 2, 34];
$list2 = [10, -12, 34, 12, -3, 123];
$number = $list2;
foreach($number as $key=>$value){
    $number[$key] = abs($value);
}
echo min($number);
echo "\n";
echo "\n";
echo "\n";

// Problem 2:
// Given a few paragraphs in a file, read the file and count how many words are there. 
// For example, if there is a file with the following contents:

// Nunc ex lorem, ullamcorper ut eleifend ac, pellentesque non dolor.  

// You need to output: 10

// Because there are 10 words. 
// Note: There can be multiple paragraphs. You need to count all of the words from all of the paragraphs. 
// You need to read the data from a file. 



$file = file_get_contents("text.txt");
$wcount = str_word_count($file);
echo $wcount;
echo "\n";
echo "\n";

// Problem 3:
// Given a sentence, keep the order of the words same, but reverse the characters of each word. 
// For example, if the given sentence is: ‘I love programming’ 
// The result should be: ‘I evol gnimmargorp’

// Here the order of the words is the same as the given sentence, but the order of the characters in the words is reversed. 

$sample = 'I love programming';

$val = explode(" ",$sample);
var_dump($val);
foreach($val as $key=>$value){
    $val[$key] = strrev($value);
}
$val = implode(" ", $val);
var_dump($val);
echo "\n";
echo "\n";
echo "\n";
// Problem 4:
// Print the following pattern based on the given number n (can be any number). 
// Sample input: 5 
// Sample output: 
//     *
//    ***
//   *****
//  *******
// *********
$n = 5;

for($i=1;$i<=$n;$i++){
    // for blanks 
    for ($j = 1; $j <= $n - $i; $j++) {
        echo " ";
    }

    // Print stars
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }

    // Move to the next line
    echo "\n";
    
}



// Problem 5:
// Given an integer n, find the sum of the digits of the integer.

// Sample input 1:
// 62343
// Sample output 1: 
// 18

// Sample input 2:
// 1000
// Sample output 2: 
// 1
$n = 62343;
$str = str_split($n,1);
// $stre = implode(" ",$str);
$sum = 0;
foreach($str as $add){
    $sum += (int)$add;
}

echo $sum;
