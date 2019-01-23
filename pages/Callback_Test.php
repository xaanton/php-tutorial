<?php
/**
 * Created by PhpStorm.
 * User: xearts
 * Date: 2019-01-23
 * Time: 16:30
 */

include('../functions/Functions.php');

$notify = function($step){
    echo 'Step count reached ' . $step;
};
start($notify);