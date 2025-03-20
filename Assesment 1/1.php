<?php
function printStarPattern($starCount) {
    $n = 1;
    while (($n * ($n + 1)) / 2 <= $starCount) {
        $n++;
    }
    $n--; 
    if (($n * ($n + 1)) / 2 == $starCount) {
        for ($i = 1; $i <= $n; $i++) {
            echo str_repeat(" ", $n - $i);
            echo str_repeat("* ", $i);
            echo PHP_EOL;
        }
    } else {
        echo "The desired pattern can't be formed!" . PHP_EOL;
    }
}

$starCount = 15;
printStarPattern($starCount);
?>