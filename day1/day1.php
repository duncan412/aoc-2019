<?php

$handle = fopen('day1.txt', 'r');
$total = 0;
while (($mass = fgets($handle)) !== false) {
    $fuel = floor($mass / 3);
    $total += ($fuel - 2);
}

echo $total;
