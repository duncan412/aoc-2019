<?php

$lowest = 245182;
$highest = 790572;
$numbers = [];
$count = 0;
$range = range(0, 5);

function part2($i, &$count)
{
    $numbers = $segments = [];
    $count2 = 0;

    foreach (range(0, 5) as $y) {
        $numbers[$y] = substr($i, $y, 1);
    }

    $segments[0] = $numbers[0];

    for ($i = 1; $i < 6; $i++) {
        if ($numbers[$i - 1] == $numbers[$i]) {
            $segments[$count2] .= $numbers[$i];
        } else {
            $count2++;
            $segments[$count2] = $numbers[$i];
        }
    }
    $hasDouble = false;
    foreach ($segments as $value) {
        if (strlen($value) === 2) {
            $hasDouble = true;
        }
    }
    if ($hasDouble === true) {
        $count++;
    }
}

for ($i = $lowest; $i < $highest; $i++) {
    foreach ($range as $y) {
        $numbers[$y] = (int) substr($i, $y, 1);
    }

    $decrease = false;
    $double = false;

    for ($j = 1; $j < 6; $j++) {
        if ($numbers[$j - 1] > $numbers[$j]) {
            $decrease = true;
        }
        if ($numbers[$j - 1] == $numbers[$j]) {
            $double = true;
        }
    }
    if (($decrease === false) && ($double === true)) {
        part2($i, $count);
    }
}
echo $count;
