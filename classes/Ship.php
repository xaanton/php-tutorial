<?php
/**
 * Created by PhpStorm.
 * User: xearts
 * Date: 2019-01-23
 * Time: 15:22
 */

include_once('../interfaces/Printable.php');

class Ship implements Printable
{
    private $size;
    private $direction;

    public function __construct($size, $direction)
    {
        $this->size = $size;
        $this->direction = $direction;
    }

    public function print_details()
    {
        echo $this->make_sentance();
    }

    private function make_sentance(){
        return 'This is ' . $this->size . ' metres big ship, following to ' . $this->direction;
    }
}