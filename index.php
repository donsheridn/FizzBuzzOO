<?php

namespace FizzBuzz;

use FizzBuzz\OOLogic;

include_once('src/controller/9_1FizzBuzzOOLogic.php');

include_once 'src/view/9_1FizzBuzzHeader.php';
include_once 'src/view/9_1FizzBuzzBody.php';

$result = $_GET['result'];

$logic = new OOLogic\FizzBuzzOOLogic();

$result = $logic->logicAction($result);

echo $result;

include_once 'src/view/9_1FizzBuzzFooter.php';
