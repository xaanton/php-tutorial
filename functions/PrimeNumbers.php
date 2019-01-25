<?php

/**
 * Created by PhpStorm.
 * User: xearts
 * Date: 2019-01-24
 * Time: 16:18
 */

class PrimeNumbers
{
    // Return array of all prime numbers < limit
    public static function findPrimeNumbers($limit)
    {
        if (!is_numeric($limit)) {
            throw new Exception("Limit value must be numeric");
        }

        $result = array();

        for ($i = 0; $i <= $limit; $i++ ) {
            if (PrimeNumbers::isPrimeNumber($i)) {
                array_push($result, $i);
            }
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

        for ($i = 2; $i < $number_half; $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }
}