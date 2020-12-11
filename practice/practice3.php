<?php

/**
 * Write a function named reorderPhrase that accepts 1 string and returns the same spring reordered by lenght of words.
 * The order goes from longest to shortest word
 * In each case the program will output which cases were actually completed and which ones are wrong. Good luck!
 */

$tests = [
    [
        'actual' => 'Elephant in the room',
        'expected' => 'Elephant room the in'
    ],
    [
        'actual' => 'php is really easy',
        'expected' => 'really easy php is'
    ],
    [
        'actual' => 'Yoda twists the phrases',
        'expected' => 'phrases twists Yoda the'
    ]
];

echo '<pre>';


foreach ($tests as $i => ['actual' => $actual, 'expected' => $expected]) {
    $result = reorderPhrase($actual);
    if ($result === $expected) {
        echo "case $i: Solved!" . PHP_EOL;
    } else {
        echo "case $i: Incomplete - Expected: $expected - Returned: $result" . PHP_EOL;
    }
}

// write your function here!

// FUNCTION'S SINTAXIS:
function reorderPhrase($tests) {
    return $tests;
}