<?php

session_start();
echo 'Username is:'. $_SESSION['usName'] . "<br>";
echo 'Password is:'. $_SESSION['usPass'];

?>