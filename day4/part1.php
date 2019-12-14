<?php


$lowest = 245182;
$highest = 790572;
$numbers = [];
$count = 0;
$range = range(0, 5);

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
        $count++;
    }
}

echo $count;
