<?php

$num = 8;

switch ($num % 2) {
    case 0:
        echo $num . " Is Even";
        break;
    case 1:
        echo $num . " Is Odd";
        break;
    default:
        echo "Invalid Number";
        break;
}
