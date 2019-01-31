<?php
/**
 * Created by PhpStorm.
 * User: xearts
 * Date: 2019-01-31
 * Time: 10:12
 */

$array = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

$command_abbs = str_split($argv[1]);

$matrix = new Matrix();

$command = new Command("l");

$matrix->rotate($command);
$matrix->rotate($command);
$matrix->rotate($command);


foreach($command_abbs as $command_abb)
{
    $matrix->rotate(new Command($command_abb));
}

$matrix->printMatrix();

Class Matrix
{
    private $array;

    public function __construct() {
        $this->array = array(
            array(1, 2, 3),
            array(4, 5, 6),
            array(7, 8, 9)
        );
    }

    public function rotate(Command $command) {
        if($command->isHorizontal()) {
            $this->rotate_horizontal($command);
        } else {
            $this->rotate_vertical($command);
        }
    }

    private function rotate_horizontal(Command $command) {
        $temp_array = $this->array;
        if($command->isReverse()){
            $this->array[$command->getIndex()][0] =
                $temp_array[$command->getIndex()][count($temp_array[$command->getIndex()])-1];

            for($i = 1; $i < count($temp_array[$command->getIndex()]); $i++) {
                $this->array[$command->getIndex()][$i] =
                    $temp_array[$command->getIndex()][$i-1];
            }
        } else {
            $this->array[$command->getIndex()][count($temp_array[$command->getIndex()])-1] =
                $temp_array[$command->getIndex()][0];

            for($i = count($temp_array[$command->getIndex()])-2; $i >= 0; $i--) {
                $this->array[$command->getIndex()][$i] =
                    $temp_array[$command->getIndex()][$i+1];
            }
        }
    }

    private function rotate_vertical(Command $command) {
        $temp_array = $this->array;
        if($command->isReverse()){
            $this->array[0][$command->getIndex()] =
                $temp_array[count($temp_array)-1][$command->getIndex()];

            for($i = 1; $i < count($temp_array); $i++) {
                $this->array[$i][$command->getIndex()] =
                    $temp_array[$i-1][$command->getIndex()];
            }
        } else {
            $this->array[count($temp_array)-1][$command->getIndex()] =
                $temp_array[0][$command->getIndex()];

            for($i = count($temp_array)-2; $i >= 0; $i--) {
                $this->array[$i][$command->getIndex()] =
                    $temp_array[$i+1][$command->getIndex()];
            }
        }
    }

    public function printMatrix(){
        foreach ($this->array as $ar){
            foreach ($ar as $val){
                echo $val;
            }
            echo PHP_EOL;
        }
    }

}

Class Command
{
    private $command_code = '';
    private $index = -1;
    private $is_horizontal = false;
    private $is_reverse = false;

    public function __construct($command_code) {
        $this->command_code = $command_code;
        $this->setCommandDetails($command_code);
    }

    private function setCommandDetails($command_code) {
        switch ($command_code) {
            case "a":
                $this->index = 0;
                $this->is_horizontal = true;
                $this->is_reverse = false;
                break;
            case "b":
                $this->index = 1;
                $this->is_horizontal = true;
                $this->is_reverse = false;
                break;
            case "c":
                $this->index = 2;
                $this->is_horizontal = true;
                $this->is_reverse = false;
                break;
            case "i":
                $this->index = 0;
                $this->is_horizontal = true;
                $this->is_reverse = true;
                break;
            case "h":
                $this->index = 1;
                $this->is_horizontal = true;
                $this->is_reverse = true;
                break;
            case "g":
                $this->index = 2;
                $this->is_horizontal = true;
                $this->is_reverse = true;
                break;
            case "l":
                $this->index = 0;
                $this->is_horizontal = false;
                $this->is_reverse = false;
                break;
            case "k":
                $this->index = 1;
                $this->is_horizontal = false;
                $this->is_reverse = false;
                break;
            case "j":
                $this->index = 2;
                $this->is_horizontal = false;
                $this->is_reverse = false;
                break;
            case "d":
                $this->index = 0;
                $this->is_horizontal = false;
                $this->is_reverse = true;
                break;
            case "e":
                $this->index = 1;
                $this->is_horizontal = false;
                $this->is_reverse = true;
                break;
            case "f":
                $this->index = 2;
                $this->is_horizontal = false;
                $this->is_reverse = true;
                break;
        }
    }

    public function getIndex() {
        return $this->index;
    }

    public function isHorizontal() {
        return $this->is_horizontal;
    }

    public function isReverse() {
        return $this->is_reverse;
    }

    public function printDetails() {
        echo 'Code = ' . $this->command_code . '; Index = ' . $this->index
            . '; is_reverse = ' . $this->is_reverse . '; is_horizontal = ' . $this->is_horizontal;
    }
}