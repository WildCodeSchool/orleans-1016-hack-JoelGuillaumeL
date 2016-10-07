<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <title>WeatherMood</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/stylesheetindex.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="js/bootstrap.js">
    <link href="css/weathermood.css" type="text/css" rel="stylesheet">





</head>
<body>
<?php


include ('meteo.php');
?>
<div class="echo">

<?php
        $image = 'images/' . ($weather->weather->icon) . '.png';
        if ($temps == 'Beau temps') {
            include ("playersun.php");
        }elseif ($temps == 'Nuageux') {
            include ("playercloud.php");
        }elseif ($temps == 'Pluvieux') {
            include ("playerrain.php");
        }elseif ($temps == 'Orageux') {
            include ('playerstorm.php');
        }


?>

</div>


<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1>WeatherMood</h1>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1><?php echo ($weather->city->name) ?></h1>
        </div>


    <div class="row">
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 inter">

        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 tuile">
            <div><?php echo '<img class="imges" src="'.$image.'"  /><br/>' . ($temps); ?>
            </div>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 inter">
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 tuile">
            <?php echo '<img class="imges" src="images/icontemp.png"><br/>' . $weather->temperature->now; ?>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 inter">
        </div>
    </div>
</div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 inter">
            </div>
        </div>
    </div>

            <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 inter ">

                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 tuile">
                    <div>
                        <?php echo '<img class="imges" src="images/iconvent.png"><br/>' . $weather->wind->speed->getValue() . ' mètre par seconde'; ?>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 inter">
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 tuile">
                    <?php echo '<img class="imges" src="images/iconhumidite.png"><br/>' . $weather->humidity->getValue() . ' % d\'humiditée'; ?>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 inter">
                </div>
            </div>






    <div class="container">
    </div>





</div>

</body>
</html>