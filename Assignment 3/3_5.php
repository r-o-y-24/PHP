<!--without function

<?php
$number = 146511208;
$temp = $number;
$sum = 0;
$digits = 0;
$n = $number;

while ($n > 0) {
    $n = (int)($n / 10);
    $digits++;
}

while ($temp > 0) {
    $digit = $temp % 10;
    $sum += pow($digit, $digits);   
    $temp = (int)($temp / 10);
}

if ($sum == $number) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}
?>
