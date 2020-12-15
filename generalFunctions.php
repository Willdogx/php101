<?php

function redirectTo($to)
{
    header('location: ' . $to);
    die;
}
