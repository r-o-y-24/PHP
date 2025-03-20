<?php

$n=10;
$num1=0;
$num2=1;

echo "Fibonacci series upto $n numbers:";

for ($i =1; $i <= $n; $i++){
    echo "$num1 ";
    $temp = $num1;
    $num1 = $num2;
    $num2 = $temp + $num2;
}

?>