<?php

$handle = fopen('day1.txt', 'r');
$total = 0;
while (($mass = fgets($handle)) !== false) {
    $tmp = floor($mass / 3);
    $total += ($tmp - 2);
}

echo $total;
