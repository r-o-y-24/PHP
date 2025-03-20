<?php

date_default_timezone_set('Asia/Kolkata');
$currentDateTime= date('Y-m-d H:i:s');
echo "Current Date & Time in Asia/Kolkata is:" . $currentDateTime;

$t1= date('h:i A');
echo "<br> Time:" . $t1;

$t2 = date('d-m-y D');
echo "<br> Time & Date:" . $t2 . " it is.";

$t3= date('H');
echo "<br> Time & Date:" . $t3;

?>