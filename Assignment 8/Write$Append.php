<?php

$f2= fopen('mnp.txt', 'w');
fwrite($f2, "okay its our 18th class !\n");
fwrite($f2, "Good Enough\n");

echo "Content changed sucessfully";
fclose($f2);
echo"<br>File writing mode is closed";

$f3= fopen('mnp.txt', 'a');
fwrite($f3, "okay its our 18th class !\n");
fwrite($f3, "Good Enough\n");

echo "<br>Content apended sucessfully";
fclose($f3);
?>