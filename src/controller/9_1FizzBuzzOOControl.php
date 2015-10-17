<?php
/**
 * Created by PhpStorm.
 * User: Don
 * Date: 8/7/2015
 * Time: 2:24 PM
 */

use Number\Manipulation as aa;

include_once('9_1Number.php');

$number = (empty($_POST['number'])) ? 'default' : $_POST['number'];

$objnum = new aa\Number();
$objnum->setNumber($number);


if ($number === 'default'){

    $result = $objnum->noNumber();

}
elseif ($number % 3 === 0 && $number % 5 === 0){

    $result = $objnum->divideByThreeAndFive($number);

}
elseif ($number % 3 === 0){

    $result = $objnum->divideByThree($number);

}
elseif ($number % 5 === 0){

    $result = $objnum->divideByFive($number);

}
else {

    $result = $objnum->neitherThreeNorFive($number);

}

header("Location: http://fizzbuzz.vagrant.com:8000/?result=$result");
