<?php
declare(strict_types=1);
#Scalar Types

    # Boolean
$completed = true;
    # Integer
$score = 75;
    # Float
$price = 0.99;
    # String
$greeting = "Hello Saba";

echo '<pre>'; 

echo $completed . '<br/>';
var_dump($completed);
echo '<br/>';

echo $score . '<br/>';
var_dump($score);
echo '<br/>';

echo $price . '<br/>';
var_dump($price);
echo '<br/>';

echo $greeting . '<br/>';
var_dump($greeting);
echo '<br/>';

echo gettype($completed);
echo '</pre>';


#Compound types

    # array
$companies = [1,2,3,0.2,0.9,-0.7, true,'A' , 'b'];


#object
#callable
#iterable

# 2 Special Types

    # resource 


function sum($x, $y){
    return $x + $y;
}

$sum = sum(2,3);;

echo $sum . '<br />';

var_dump($sum);