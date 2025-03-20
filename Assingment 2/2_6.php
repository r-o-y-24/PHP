<?php
$num1=20;
$num2=30;
$num3=50;

if ($num1 >= $num2){
    if ($num1 >= $num3){
        echo "The largest number is $num1";
    }
    else{
        echo "The largest number is $num3";
    }
}
else{
    if ($num2 >= $num3){
        echo "The largest number is $num2";
    }
    else{
        echo "The largest number is $num3";
    }
}
?>