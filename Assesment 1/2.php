<?php
function countCharacterOccurrences($inputString) {
    $inputString = str_replace(" ", "", $inputString);
    $inputString = strtolower($inputString);
    $charCounts = array_count_values(str_split($inputString));
    foreach ($charCounts as $char => $count) {
        echo "$char occurs $count " . ($count > 1 ? "times" : "time") . "." . PHP_EOL;
    }
}
$inputString = "The class remains suspended.";
countCharacterOccurrences($inputString);
?>