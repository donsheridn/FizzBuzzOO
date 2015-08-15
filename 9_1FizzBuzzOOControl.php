<?php
/**
 * Created by PhpStorm.
 * User: Don
 * Date: 8/7/2015
 * Time: 2:24 PM
 */

//to access this go to http://localhost:8000/3ObjectOriented-Ex-Ans/9_1FizzBuzzOOView.html

use Number\Manipulation as aa;

require_once('9_1Number.php');

//header('Content-type: text/plain');

$number = (empty($_POST['number'])) ? 'default' : $_POST['number'];

$objnum = new aa\Number();
$objnum->setNumber($number);


if ($number === 'default'){

//    echo $objnum->noNumber();
    $result = $objnum->noNumber();
//    echo $result;

}
elseif ($number % 3 === 0 && $number % 5 === 0){

//    echo $objnum->divideByThreeAndFive($number);
    $result = $objnum->divideByThreeAndFive($number);
//    echo $result;

}
elseif ($number % 3 === 0){

//    echo $objnum->divideByThree($number);
    $result = $objnum->divideByThree($number);
//    echo $result;


}
elseif ($number % 5 === 0){

//    echo $objnum->divideByFive($number);
    $result = $objnum->divideByFive($number);
//    echo $result;

}
else {

//    echo $objnum->neitherThreeNorFive($number);
    $result = $objnum->neitherThreeNorFive($number);
//    echo $result;

}

require_once '9_1FizzBuzzOOView.php';
