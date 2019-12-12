<?php

$handle = fopen('day1.txt', 'r');
$total = 0;
while (($mass = fgets($handle)) !== false) {
    while ((($mass / 3) - 2) > 0) {
        $mass = floor(($mass / 3) - 2);
        $total += $mass;
    }
}

echo $total;
