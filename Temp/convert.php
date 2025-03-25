<?php

$seconds=3665;
$hour = floor($seconds/3600);
$minutes = floor(($seconds % 3600) / 60);
$seconds = $seconds % 60;

echo "$hour hours,$minutes minutes, $seconds seconds";

?>