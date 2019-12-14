<?php

$data = file_get_contents('day3.txt');
$wires = explode("\n", $data);

function getPointsFromWire($wire)
{
    $x = $y = 0;
    $points = [];
    $steps = explode(',', $wire);

    foreach ($steps as $step) {
        $direction = strtolower($step[0]);
        $movement = (int) preg_replace('/[^0-9]/', '', $step);

        for ($i = 0; $i < $movement; $i++) {
            if($direction === 'd') {
                $x -= 1;
            } elseif($direction === 'u') {
                $x += 1;
            } elseif($direction === 'l') {
                $y -= 1;
            }elseif($direction === 'r') {
                $y += 1;
            } else {
                echo 'mistakes were made'; exit;
            }

            $key = $x . '-' . $y;

            if(!isset($points[$key])) {
                $points[$key] = ['x' => $x, 'y' => $y];
            }
        }
    }

    return $points;
}

$pointsA = getPointsFromWire($wires[0]);
$pointsB = getPointsFromWire($wires[1]);

$intersections = [];

$rememberA = array_keys($pointsA);
$rememberB = array_keys($pointsB);

foreach ($pointsA as $key => $position) {
    if (isset($pointsB[$key])) {
        $keyA = array_search($key, $rememberA);
        $keyB = array_search($key, $rememberB);
        $intersections[] = ($keyA + $keyB) + 2;
    }
}

echo min($intersections);
