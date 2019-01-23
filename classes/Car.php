<?php
/**
 * Created by PhpStorm.
 * User: xearts
 * Date: 2019-01-23
 * Time: 14:52
 */

include_once('../interfaces/Printable.php');

class Car implements Printable
{
    private static $instance_count = 0;
    private $car_name;
    private $year;

    public function __construct($car_name, $year)
    {
        $this->car_name = $car_name;
        $this->year = $year;
        Car::$instance_count += 1;
    }

    public function print_details(){
        echo $this->make_sentance();
    }

    private function make_sentance(){
        return 'This car is ' . $this->year . ' ' .  $this->car_name . '<br>';
    }

    public static function display_instace_count(){
        echo 'Car class instance count = ' . Car::$instance_count . '<br>';
    }
}