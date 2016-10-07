<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/weathermood.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <![endif]-->
</head>
<body>
<?php

include ('meteo.php');

?>
<div class="container">
    <div class="row">
        <h1>WeatherMood</h1>
    </div>

            <div class="echo">

    <?php
    $image = 'images/' . ($weather->weather->icon) . '.png';
        if ($temps == 'beau temps') {
            include ("playersun.php");
        }elseif ($temps == 'nuageux') {
            include ("playercloud.php");
        }elseif ($temps == 'pluvieux') {
            include ("playerrain.php");
        }elseif ($temps == 'orageux') {
            include ('playerstorm.php');
        }

    echo '<br/>';
    print '<img width="150px" height="150px" src="'.$image.'" alt="image_meteo" />';
    echo '<br/>';
    echo 'A  '.($weather->city->name) . '  ';
    echo 'la température est de    '.($weather->temperature->now). '  ';
    echo '   et le temps est  '.$temps. '</br>';

?>

    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>