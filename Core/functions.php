<?php

function dd($value)
{
    echo "<pre>";
        print_r($value);
    echo "</pre>";
    
    die();
}

function price($distance, $percentage = 0)
{
    $total = $distance * 1;
    $increasePercentage = $percentage;
    $increaseAmount = $total * ($increasePercentage / 100);
    $newTotal = $total + $increaseAmount;

    return $newTotal;
}