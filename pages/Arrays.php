<?php
/**
 * Created by PhpStorm.
 * User: xearts
 * Date: 2019-01-23
 * Time: 11:53
 */
// add the even_numbers array here
$even_numbers = [2,4,6,8,10];

$male_names = ["Jake", "Eric", "John"];
$female_names = ["Jessica", "Beth", "Sandra"];

// join the male and female names to one array
$names = array_merge($male_names, $female_names);

print_r($even_numbers);
echo("<br>");
print_r($names);