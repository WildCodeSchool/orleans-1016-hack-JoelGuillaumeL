
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


 <center><div  class="vcenter">

                               <form action="weathermood2.php" method="post">


                                    <div>
                                        <div>


                                    <div class="rechechbar">
                                        <input id="recherche-ville" type="text" placeholder="Entrez une ville" autocomplete="on" name="ville">

                                        <a href="weathermood2.php"><button type="submit" class="btn btn-default" value="validé">WeatherMood</button></a>
                                    </div>

                                </form>
            </div></center>



</body>
</html>