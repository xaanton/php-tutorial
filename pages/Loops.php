<?php
/**
 * Created by PhpStorm.
 * User: xearts
 * Date: 2019-01-23
 * Time: 12:23
 */

$even_numbers = [2,4,6,8,10,12,14,16,18,20];

echo "<h3>Foreach loop(print all)</h3><br>";

foreach ($even_numbers as $even_number){
    echo "$even_number<br>";
}

$numbers = [56, 65, 26, 86, 66, 34, 78, 74, 67, 18, 34, 73, 45, 67, 75, 10, 60, 80, 74, 16, 86, 34, 12, 23, 42, 72, 36, 3, 73, 9, 92, 81, 94, 54, 97, 74, 45, 55, 70, 94, 96, 81, 86, 86, 84, 4, 32, 8, 96, 86, 87, 18, 84, 87, 59, 48, 32, 90, 17, 22, 82, 79, 66, 28, 17, 14, 80, 83, 66, 36, 21, 89, 68, 2, 51, 65, 20, 87, 48, 5, 1, 16, 60, 53, 84, 90, 16, 2, 37, 73, 57, 70, 57, 69, 68, 1, 24, 40, 72, 97];

echo "<h3>While loop(only even numbers)</h3><br>";

$counter = 0;

while($counter < sizeof($numbers)){

    if($numbers[$counter] % 2 == 0){
        echo "$numbers[$counter]<br>";
    }

    $counter += 1;

}