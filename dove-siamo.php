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
        var cheremule = {lat: 40.507720, lng: 8.726245};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 20,
          center: cheremule
        });

        var contentString = '<h4>Sannalegno</h4><p>Vieni a trovarci!</p>';

        var infowindow = new google.maps.InfoWindow({
          content: contentString,
          
        });

        var marker = new google.maps.Marker({
          position: cheremule,
          map: map,
          title: 'Cheremule Sanna'
        });
        infowindow.open(map, marker);
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
      }
    </script>
    <script async defer
    src="https://www.google.it/maps/place/07040+Cheremule+SS/@40.5063203,8.7261201,156a,35y,45t/data=!3m1!1e3!4m5!3m4!1s0x12dc45b58627e347:0xc275d41cc0d92923!8m2!3d40.5043176!4d8.7261675">
    </script>
    
    <div style= "height:470px; width:250px">
    </div>
    <?php require 'footer.php';?>
    <?php require 'js.php';?>
</body>
</html>
