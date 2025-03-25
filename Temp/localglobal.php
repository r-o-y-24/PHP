<?php
$a=10;
$b=20;
echo "The Sum is=" . ($a+$b);
function fun1(){
    global $a;
    $a1=40;
    $c=50;
    echo "The Sum is=  " . ($a1 + $GLOBALS['a'] + $GLOBALS['b'] + $c);
}
//Function name is not case-sensitive
FuN1();
//it signifies that GLOBALS is a super global array in which 'a' denotes the index of that array

echo "<br> The req value is= " . $a1;
echo "<br> The req value is= " . $a;
?>


Assign a variable with some value outside the function and use that function to calculate the factorial of that value and print the factorial outside of the function