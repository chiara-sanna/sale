<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'head.php';?>
    <style>
      #map {
        height: 500px;
      }
    </style>
</head>
<body>
    <header>
        <img src="img/header-bg.png">
    </header>
    <?php require 'navigation.php';?>

    <section class="page-section clearfix">
        <div class="container">
               <div id="map"></div>
          </div>

      </section>
    <script>



      function initMap() {
        var cagliari = {lat: 39.214187, lng: 9.111982};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 20,
          center: cagliari
        });

        var contentString = '<h4>Sanna legno</h4><p>testo testo testo testo</p>';

        var infowindow = new google.maps.InfoWindow({
          content: contentString,
          maxWidth: 200
        });

        var marker = new google.maps.Marker({
          position: cagliari,
          map: map,
          title: 'Cagliari sanna'
        });
        infowindow.open(map, marker);
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBnCMGOQvSAnDwPA4MFuBtmRjJW0_DRuM
&callback=initMap">
    </script>
    <?php require 'footer.php';?>
    <?php require 'js.php';?>
</body>
</html>
