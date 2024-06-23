<?php

// Data types
// int,float,string,array,object 

$a = 10; //int
$b = 10.40; //float
$c = $a + $b;
echo $c;

$arr = [0,10,100,122];
echo PHP_EOL;
echo $arr[3];

// boolean 
echo var_dump(false).PHP_EOL;
$narr = [10,"hello",false];
print_r($narr);
echo var_dump(null).PHP_EOL;
$emtstr = "";
var_dump($emtstr);
echo PHP_EOL;echo PHP_EOL;

// Type hinting and type jugling in php 
// type juggling
$time = "10";
echo 10+$time;