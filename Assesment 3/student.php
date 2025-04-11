<?php
$students = ["Adam", "John", "Charlie", "Daniel", "Eve"];

$f = fopen('students.txt', 'w');
foreach ($students as $s) fwrite($f, "$s\n");
fclose($f);

$f = fopen('students.txt', 'r');
foreach (array_reverse(file('students.txt')) as $n) echo $n;
fclose($f);
?>
