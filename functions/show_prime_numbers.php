<?php
/**
 * Created by PhpStorm.
 * User: xearts
 * Date: 2019-01-25
 * Time: 12:41
 */

include_once('PrimeNumbers.php');

parse_str(implode('&', array_slice($argv, 1)), $_GET);

//$limit = $_GET['limit'];

print_r(PrimeNumbers::findPrimeNumbers());