<?php

/**
 * Write a function findHighest that accepts an array of numbers and returns the highest number
 */

$tests = [
    [
        'actual' => [1, 2, 3, 4],
        'expected' => 4
    ],
    [
        'actual' => [5, 1, 32, 0],
        'expected' => 32
    ],
    [
        'actual' => [6, 4, 2, 0],
        'expected' => 6
    ]
];

echo '<pre>';

foreach ($tests as $i => $test) {
    $result = findHighest($test['actual']);
    if ($result === $test['expected']) {
        echo "case $i: Solved!" . PHP_EOL;
    } else {
        echo "case $i: Incomplete - Expected: {$test['expected']} - Returned: $result" . PHP_EOL;
    }
}

// With the max() function: 
function findHighest($tests) {
    return max($tests);
}

// With a for loop:
function findHighestFor($numbers) {
    $highestNumber = 0; 
    for ($i=0; $i < count($numbers); $i++) {
        if ($numbers[$i]> $highestNumber) {
            $highestNumber = $numbers[$i];
        }
    }
    return $highestNumber;
}

// With a foreach loop:
function findHighestForeach($numbers) {
    $highestNumber = 0; 
    foreach ($numbers as $val) {
        if ($val > $highestNumber) {
            $highestNumber = $val;
        }
    }
    return $highestNumber;
}
    

