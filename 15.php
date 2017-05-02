<?php

$a = $_POST ['a'];
$b = $_POST ['b'];
$operator = $_POST ['operator'];
//echo $a;
//echo $b;
//echo $operator;
if ($b==0 and $operator=='/'){
    echo "на 0 делить нельзя";
}else {
    if ($operator == '+') {$result=$a + $b; }
    if ($operator == '-') {$result=$a - $b;}
    if ($operator =='/')  {$result=$a / $b;}
    if ($operator == '*') {$result=$a * $b;}
    if ($operator == '%') {$result=$a % $b;}
    echo $a .$operator .$b .'='  .$result;
}

?>

