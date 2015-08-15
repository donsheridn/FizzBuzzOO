<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<form action="9_1FizzBuzzOOControl.php" method="post">
    Enter a number: <input type="number" name="number" required autofocus placeholder="15"><br><br>
    and I will determine whether its a Fizz or Buzz...
    <input type="submit"><br><br>
</form>

<?php

        if ($result){
            echo "Answer: $result \n";
        }
        else {
            echo "No number has been entered yet, please enter one and hit submit! \n";
        }
?>
<br><br>
Lets see

</body>
</html>
