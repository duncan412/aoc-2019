<?php

$data = file_get_contents('day2.txt');
$lines = explode(',', $data);

// Restore 1202
$lines[1] = 12;
$lines[2] = 2;

for($i = 0; $i < count($lines); $i = $i +  4) {
    if($lines[$i] == 1) {
        $lines[$lines[$i + 3]] = $lines[$lines[$i + 1]] + $lines[$lines[$i + 2]];
    } elseif($lines[$i] == 2) {
        $lines[$lines[$i + 3]] = $lines[$lines[$i + 1]] * $lines[$lines[$i + 2]];
    } elseif($lines[$i] == 99) {
        break;
    } else {
        echo 'mistakes were made. <br> i = ' . $i . '<br>Line = ' . $lines[$i]; exit;
    }
}

echo $lines[0];