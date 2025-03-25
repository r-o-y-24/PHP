<?php

session_start();
$a1="abc@gmail.com";
$b1="12345";
$_SESSION['usName']=$a1;
$_SESSION['usPass']=$b1;
echo "Our session is started.";

?>