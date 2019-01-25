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

        if ($number === 0 || $number === 1) {
            return false;
        }

        for ($i = 2; $i * $i <= number; $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }
}