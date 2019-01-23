<?php
/**
 * Created by PhpStorm.
 * User: xearts
 * Date: 2019-01-23
 * Time: 14:09
 */

function makeLink($pagename, $number){
    echo("<a href=\"" . $GLOBALS['PAGES_DIRECTORY'] . "/"
        . $pagename . "\"> " . $number . "." . getTitle($pagename) . " exercise
            </a><br>");
}

function getTitle($pagename){
    return explode('.', $pagename)[0];
}

function squared_sum($array){
    return pow(array_sum($array),2);
}

function start($notify)
{
    callback_test(1, $notify);
}

function callback_test($step, $notify){
    if($step < 10){
        callback_test($step+1, $notify);
    } else if($step === 10) {
        $notify($step);
    }
}

