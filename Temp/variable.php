<?php
//variable
$abc=10;

echo "The variable is $abc";

echo "<br>The variable is " . $abc . " Okay";
?>

<?php
//constant
define("a1",20);

echo "<br>The variable is " . a1;
echo "<br> My Constant is =" .constant('a1');

const b1=30;
$abc+=10;
echo "<br>My Constant is =" . b1;
echo "<br> My Constant is =" .constant('b1');
?>

<?php
//arithmetic operator
$a=20;
$b=10;
$sum=$a+$b;
echo "<br><br>The sum is $sum";
$diff=$a-$b;
echo "<br>The difference is $diff";
$product=$a*$b;
echo "<br>The product is $product";
$div=$a/$b;
echo "<br>The division is $div";
?>

<?php
//comparison
$c=50;
$d=20;
if($c>$d){
    echo "<br><br>" . $c . " is greater";
}
else{
    echo "<br>" . $d . " is greater";
}

//increment
$x=10;
$x=++$x;
echo "<br><br>Value of x is $x";

//decrement
$y=10;
$y=--$y;
echo "<br>Value of y is $y";

//checking if equal to 
$p=20;
$q=20;
if($p==$q){
    echo "<br><br>Both are equal";
}
else{
    echo "<br>Both are not equal";
}

//checking if not equal to
$m=30;
if($m!=40){
    echo "<br><br>" . $m ." is not equal to 40";
}

//xor operator
$var1=50;
$var2=80;
if($var1==50 xor $var2==40){
    echo "<br><br>Hello World";
}

$var3=true;
$var4=false;
//and operator
echo "<br> The and op  ";
print var_dump($var3 && $var4);

echo "<br> The or op  ";
print var_dump($var3 || $var4);

echo "<br> The not op  ";
print var_dump(!$var3);

?>

