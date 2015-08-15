<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="vendor/twbs/bootstrap/docs/favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="vendor/twbs/bootstrap/docs/examples/starter-template/starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="vendor/twbs/bootstrap/docs/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="vendor/twbs/bootstrap/docs/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">FizzBuzz 3 or 5</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
<!--                <li class="active"><a href="#">Home</a></li>-->
<!--                <li><a href="#about">About</a></li>-->
<!--                <li><a href="#contact">Contact</a></li>-->
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">

    <div class="starter-template">
        <h1>Determine if a number: is a Fizz(multiple of 3)<br>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   or a Buzz(multiple of 5)</h1>
        <br><br>
        <p class="lead">Enter a number below and I will determine whether its a Fizz or Buzz...</p>
        <br>
<!--        <form action="9_1FizzBuzzOOControl.php" method="post">-->
<!--            <input type="number" name="number" required autofocus placeholder="15"><br><br>-->
<!--            <input type="submit"><br><br>-->
<!--        </form>-->

        <form class="navbar-form " action="9_1FizzBuzzOOControl.php" method="post" role="search">
            <div class="form-group">

                 <input type="number" class="form-control" name="number" required autofocus placeholder="15">

            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <br><br>

        <p class="lead">
        <?php

        if ($result){
            echo "Answer: <b>$result</b> \n";
//           echo $result;
        }
        else {
            echo "No number has been entered yet, please enter one and hit submit! \n";

            echo "<br><br>
            Lets see";
        }
        ?>

        </p>
    </div>

</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="vendor/twbs/bootstrap/docs/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
