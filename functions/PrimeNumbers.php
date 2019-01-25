<?php

/**
 * Created by PhpStorm.
 * User: xearts
 * Date: 2019-01-24
 * Time: 16:18
 */

class PrimeNumbers
{
    // Print prime numbers
    public static function findPrimeNumbers()
    {

        $result = array();
        $i = 0;
        while (true) {

            if (PrimeNumbers::isPrimeNumber($i)) {
                echo $i . PHP_EOL;
            }
            $i += 1;
        }

        return $result;
    }

    // Check if $number is a prime number
    public static function isPrimeNumber($number)
    {
        if (!is_numeric($number)) {
            return false;
        }

        if ($number === 0 || $number === 1) {
            return false;
        }
        $number_half = $number/2;

        for ($i = 2; $i <= $number_half; $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }
}