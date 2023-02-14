<?php
/*
we get the usual * / + - % += *= -= /= %= when it comes to math, but here is an interesting feat:
*/

$a = 2;
// by using ++ after the variable you will increase 'a's value by 1, but $b will
// be what a was before it changed
$b = $a++; //b = 2; a = 3

$c = 2;
// you can use ++ before the var to change both variables to the new number
$d = ++$c; //$c = 3; $b = 3
?>