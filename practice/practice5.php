<?php

/**
 * Write a function colorString that accepts 2 string parameters, the first one is the phrase and the second the name of the color, which can be blue, red, or purple.
 * If the second parameter is blue, this function should call the function named colorBlue passing the the string to color, if its red, call and return the result of colorRed, and if its purple, do the same with colorPurple.
 * 
 * If done correctly, all lines will be colored correctly in screen
 */

$tests = [
    [
        'actual' => ['This line should be blue!', 'blue'],
        'expected' => '<span style="color: blue;">This line should be blue!</span>'
    ],
    [
        'actual' => ['This line should be red!', 'red'],
        'expected' => '<span style="color: red;">This line should be red!</span>'
    ],
    [
        'actual' => ['This line should be purple!', 'purple'],
        'expected' => '<span style="color: purple;">This line should be purple!</span>'
    ]
];

function colorBlue(string $string): string
{
    return "<span style=\"color: blue;\">$string</span>";
}

function colorRed(string $string): string
{
    return "<span style=\"color: red;\">$string</span>";
}

function colorPurple(string $string): string
{
    return "<span style=\"color: purple;\">$string</span>";
}

// write your function here!
$color = ['blue', 'red', 'purple'];

function colorString($string, $color) {
        if ($color === 'blue') {
            return colorBlue($string);
        } elseif ($color === 'red') {
            return colorRed($string);
        } else {
            return colorPurple($string);
        }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenges!!!</title>
</head>

<body>
    <ul>
        <?php foreach ($tests as $test):
            $result = call_user_func_array('colorString', $test['actual']);
        ?>
            <li><?= $result === $test['expected'] ? $result : $test['actual'][0] ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>