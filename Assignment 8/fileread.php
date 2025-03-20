<?php

//readfile() is responsible for scanning/reading entire content from the text file and print the same without using echo keyword.
// readfile('abc.txt');

//The three major functions to be used to read in a systematic way : fopen(), fread(), fclose().
//without fopen() we cannot read or work with a specific function.
//fread() is responsible for reading the file content by it's length.
//fclose() closes the opened file and after it's executed we cannot work any more function inside it, if want to use fopen() again.
//fopen() should have some specific operation such as r-(read),w-(write),a-(append).

// 1st way: fread()
$f1=fopen('abc.txt', 'r');
$r1=fread($f1,filesize('abc.txt'));
echo $r1;

//2nd way : fgets()
echo " <br><br>By using fgets() with Multiple Variables: <br>";
rewind($f1);
$r2=fgets($f1);
echo "<br> $r2";

$r3=fgets($f1);
echo "<br> $r3";

$r4=fgets($f1);
echo "<br> $r4";

echo "<br><br>By using fgets() with While Loop: <br>";

rewind($f1);
while($r2 = fgets($f1)){
    echo "<br> $r2";
}

//3rd way : fgetc()
echo "<br><br>By using fgetc() with While Loop: <br>";
rewind($f1);
$i=0;
while($r2 = fgetc($f1)){
    echo "<br> $r2";
    $i++;
    if($i==11){
        break;
    }
}

$f1= fopen("abc.txt","r");
if ($f1){
    while (($char = fgetc($f1)) !== false){
        if ($char == "\n"){
            echo "<br>";
        } else{
            echo "$char";
        }
    }
}


?>