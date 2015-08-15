<?php
/**
 * Created by PhpStorm.
 * User: Don
 * Date: 8/8/2015
 * Time: 4:55 PM
 */

namespace Number\Manipulation;

class Number{

    private $number = 0;

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function noNumber(){

        $display = "No number was entered, there is nothing to display yet!\n";
        return $display;
    }

    public function divideByThreeAndFive($number){

        $res = $number / 3;
        $res1 = $number /5;
        $display = "FizzBuzz, $number is a multiple of 3 and 5, because $number / 3 goes: $res times, while $number/5 goes: $res1 times\n";
        return $display;
    }

    public function divideByThree($number){

        $res = $number / 3;
        $display = "Fizz, $number is a multiple of 3, because $number / 3 goes: $res times\n";
        return $display;
    }

    public function divideByFive($number){

        $res = $number / 5;
        $display = "Buzz, $number is a multiple of 5, because $number / 5 goes: $res times\n";
        return $display;
    }

    public function neitherThreeNorFive($number){

        $display = "Neither, $number is neither a multiple of 3 nor 5 \n";
        return $display;
    }

}