<?php
/**
 * Created by PhpStorm.
 * User: xearts
 * Date: 2019-01-23
 * Time: 15:08
 */

include('../classes/Car.php');
include('../classes/Ship.php');

Car::display_instace_count();

$toyota = new Car('Toyota', 2016);

$toyota->print_details();

Car::display_instace_count();

$car1 = new Car('Car1', 2000);
$car2 = new Car('Car2', 2000);
$car3 = new Car('Car3', 2000);

$car3->print_details();

Car::display_instace_count();

$ship1 = new Ship(100, 'East');
$ship1->print_details();