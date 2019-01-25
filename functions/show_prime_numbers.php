<?php
/**
 * Created by PhpStorm.
 * User: xearts
 * Date: 2019-01-25
 * Time: 12:41
 */

function findPrimeNumbers()
{

    $i = 0;
    while (true) {

        if (isPrimeNumber($i)) {
            echo $i . PHP_EOL;
        }
        $i += 1;
    }

}

// Check if $number is a prime number
function isPrimeNumber($number)
{

    if ($number === 0 || $number === 1) {
        return false;
    }

    if ($number == 2) {
        return true;
    }

    if($number == 3){
        return true;
    }

    if ($number % 2 == 0) {
        return false;
    }

    if ($number % 3 == 0) {
        return false;
    }

    $i = 5;
    $w = 2;

    while ($i * $i <= $number) {
        if ($number % $i == 0) {
            return false;
        }

        $i += $w;
        $w = 6 - $w;
    }
    return true;
}

findPrimeNumbers();