<?php

/**
 * Created by PhpStorm.
 * User: xearts
 * Date: 2019-01-24
 * Time: 16:18
 */
function find_prime_numbers($limit)
{
    $result = array();
    for($i = 0; $i <= $limit; $i++ ){
        if(is_prime_number($i))array_push($result, $i);
    }
    return $result;
}

function is_prime_number($number)
{
    if($number === 0 || $number === 1)return false;

    $number_half = $number/2;

    for($i = 2; $i < $number_half; $i++)
        if($number % $i == 0)return false;

    return true;
}
