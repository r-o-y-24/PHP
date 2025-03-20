<?php

$n = 5;
$fact = 1;
$i = 1;

do {
    $fact *= $i;
    $i++;
} 
while ($i <= $n);
echo "The factorial of $n is:" . $fact;

?>