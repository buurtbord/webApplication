<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../images/favicon.ico" type="image/x-icon"/>

    <title>Buurtbord</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="{{elixir('css/app.css')}}" type="text/css">
</head>

<body id="app-layout">
    

    @yield('content')

    <!-- JavaScripts -->

    <script>
        console.log ("werkt wel");

        function initMap() {
          var latlng = {
            lat: 51.913801, lng: 4.477917
        };
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 19,
            center: latlng,
            mapTypeId: 'satellite'
          });
          var marker = new google.maps.Marker({
            position: latlng,
            map: map
          });
        }
    </script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWeTzYEtS3-cLmr-YRkTVeP2hNcgTEsWk&callback=initMap" type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <script>

        $('#mening_btn').click(function() {
            $('#content_wrapper_sub').show();
        });
        
        $('#mening_btn').click(function() {
            $('#content_wrapper').hide();
        });

        $('#plan_btn').click(function() {
            $('#content_wrapper').show();
        });
        
        $('#plan_btn').click(function() {
            $('#content_wrapper_sub').hide();
        });


    </script>

</body>
</html>
