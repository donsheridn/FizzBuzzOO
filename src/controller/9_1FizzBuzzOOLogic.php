<?php
/**
 * Created by PhpStorm.
 * User: Don
 * Date: 10/17/2015
 * Time: 1:53 PM
 */

namespace FizzBuzz\OOLogic;

class FizzBuzzOOLogic{

    public function logicAction($result){

        if ($result){

            $answer = "Answer: <b>$result</b> \n";

            return $answer;
        }
        else {

            $answer = "No number has been entered yet, please enter one and hit submit! \n";

            return $answer;
        }

    }

}