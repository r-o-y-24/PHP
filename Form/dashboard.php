<?php

echo "<h1> Welcome To Dashboard Page</h1>";
session_start();
echo "HI " . $_SESSION['uNAME'] . "<br> Please verify the deatails:
    <br> Father Name=" . $_SESSION['uFather'] . "
    <br> DOB=" . $_SESSION['uDOB'];


?>