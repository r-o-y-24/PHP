<?php
// readfile('abc.txt');

// fopen(),fread(),fclose()
// 1. fread()
$f1 = fopen('abc.txt', 'r');
$r1 = fread($f1, filesize('abc.txt'));
echo $r1;

// 2. fgets()
echo "<br><br>By using fgets() with multiple variables";
rewind($f1);
$r2 = fgets($f1);
echo "<br> $r2";

$r3 = fgets($f1);
echo "<br> $r3";

$r4 = fgets($f1);
echo "<br> $r4";

echo "<br><br>By using fgets() with While Loop";
rewind($f1);
while ($r2 = fgets($f1)) {
    echo "<br> $r2";
}

// 3. fgetc()
echo "<br><br>By using fgetc()<br>";
rewind($f1);
while ($r5 = fgetc($f1)) {
    if ($r5 === "\n") {
        echo "<br>";
    }
    echo $r5;
    if ($r5 == "r") {
        break;
    }
}
fclose($f1);
echo "<br>The File is Closed.";
$f1 = fopen('abc.txt', 'r');
echo "<br>The File is opened again.<br>";
while ($r5 = fgetc($f1)) {
    if ($r5 === "\n") {
        echo "<br>";
    }
    echo $r5;
    if ($r5 == "r") {
        break;
    }
}
