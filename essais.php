<!DOCTYPE html>
<html>
<head>
    <title>Recherchez une ville</title>

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
<div>
    <input id="recherche-ville" type="text" placeholder="Entrez une ville" autocomplete="on">
</div>
</body>
</html>