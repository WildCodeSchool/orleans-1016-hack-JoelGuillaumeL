
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>WeatherMood</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/stylesheetindex.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="js/bootstrap.js">

    <!-- #########################scipt auto Google ###############################-->
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
                            <input type="text" class="form-control" placeholder="Text input" name="ville">
                          <!-- <input id="recherche-ville" type="text" placeholder="Entrez une ville" autocomplete="on"
                                    name="ville"> -->
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