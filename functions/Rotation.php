<?php
/**
 * Created by PhpStorm.
 * User: xearts
 * Date: 2019-01-25
 * Time: 16:24
 */
echo(sizeof($argv));

function shift_array_cus($array, $command){
    $temp_array = $array;
    switch ($command) {
        case "a":
            $array[0][0] = $temp_array[0][1];
            $array[0][1] = $temp_array[0][2];
            $array[0][2] = $temp_array[0][0];
            break;
        case "b":
            $array[1][0] = $temp_array[1][1];
            $array[1][1] = $temp_array[1][2];
            $array[1][2] = $temp_array[1][0];
            break;
        case "c":
            $array[2][0] = $temp_array[2][1];
            $array[2][1] = $temp_array[2][2];
            $array[2][2] = $temp_array[2][0];
            break;
        case "i":
            $array[0][0] = $temp_array[0][2];
            $array[0][1] = $temp_array[0][0];
            $array[0][2] = $temp_array[0][1];
            break;
        case "h":
            $array[1][0] = $temp_array[1][2];
            $array[1][1] = $temp_array[1][0];
            $array[1][2] = $temp_array[1][1];
            break;
        case "g":
            $array[2][0] = $temp_array[2][2];
            $array[2][1] = $temp_array[2][0];
            $array[2][2] = $temp_array[2][1];
            break;
        case "l":
            $array[0][0] = $temp_array[1][0];
            $array[1][0] = $temp_array[2][0];
            $array[2][0] = $temp_array[0][0];
            break;
        case "k":
            $array[0][1] = $temp_array[1][1];
            $array[1][1] = $temp_array[2][1];
            $array[2][1] = $temp_array[0][1];
            break;
        case "j":
            $array[0][2] = $temp_array[1][2];
            $array[1][2] = $temp_array[2][2];
            $array[2][2] = $temp_array[0][2];
            break;
        case "d":
            $array[0][0] = $temp_array[2][0];
            $array[1][0] = $temp_array[0][0];
            $array[2][0] = $temp_array[1][0];
            break;
        case "e":
            $array[0][1] = $temp_array[2][1];
            $array[1][1] = $temp_array[0][1];
            $array[2][1] = $temp_array[1][1];
            break;
        case "f":
            $array[0][2] = $temp_array[2][2];
            $array[1][2] = $temp_array[0][2];
            $array[2][2] = $temp_array[1][2];
            break;
    }

    return $array;
}

$commands = str_split($argv[1]);

$array = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

foreach($commands as $command)
{
    $array = shift_array_cus($array, $command);
    //echo "$command\n";
}




//array_shift($array[0]);
foreach ($array as $ar){
    foreach ($ar as $val){
       echo $val;
    }
    echo PHP_EOL;
}




