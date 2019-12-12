<?php

$data = file_get_contents('day2.txt');
$originalLines = $lines = explode(',', $data);

for($i = 0; $i < 99; $i++) {
    for($y = 0; $y < 99; $y++) {
        $lines = $originalLines;
        $lines[1] = $i;
        $lines[2] = $y;
        $lines = handleLines($lines);

        if($lines[0] == 19690720) {
            break 2;
        }
    }
}

function handleLines($lines) {
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

    return $lines;
}

echo 100 * $i + $y;