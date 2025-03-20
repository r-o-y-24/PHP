<?php

$str1 = "Our PHP Class Today.";
echo "Length is=" . strlen($str1);

echo "<br>Total words is:" . str_word_count($str1);

echo "<br>Reversed:" . strrev($str1);

$find_word = "Class";
echo "<br>The index of " . $find_word . " is:" . strpos($str1, $find_word) . "<br>";

echo var_dump(strpos($str1, $find_word));

echo "<br> The repeat para is:" . str_repeat($str1, 6);

$rep_var = "MySQL";
echo "<br>Our new string is:" . str_replace("PHP", $rep_var, $str1);

$str2 = "Today is the class";
echo "<br> $str2";
echo "<br><pre>$str2</pre>";

echo "The ".$str1." Var";
echo "<br><pre>$str2 <br> " . ltrim($str2). "<br> " . rtrim($str2). "<br> " . trim($str2). "</pre>"

?>



<!-- Q.write a php script to reflect the total number of words present in a string as well as print word by word from the string.
Q.write a php script to reverse a string by words. -->