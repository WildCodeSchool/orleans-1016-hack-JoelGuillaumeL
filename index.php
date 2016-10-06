
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/weathermood.css" type="text/css" rel="stylesheet">
    <link href="css/weathermood.css" type="text/css" rel="stylesheetindex">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places" type="text/javascript"></script>
    <script type="text/javascript">


        function initialize() {

            var options = {
                types: ['(cities)'],
            };

            var input = document.getElementById('recherche-ville');
            var autocomplete = new google.maps.places.Autocomplete(input, options);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

</head>
<body>

        <div class="container">
            <div class="row">
                <div class="col-xs-6">
        <form action="weathermood.php" method="post">
            <div>
                <input id="recherche-ville" type="text" placeholder="Entrez une ville" autocomplete="on" name="ville">
            </div>
            <div>
                <a href="weathermood.php"><imput type="submit" class="btn btn-default" value="validé">Frog</imput></a>
            </div>
        </form>
                </div>
            </div>
        </div>

</body>
</html>