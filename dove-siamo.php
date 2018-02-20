<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'head.php';?>
    <style>
      #map {
        height: 600px;
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
        var cheremule = {lat: 40.507710, lng: 8.726339};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: cheremule,
          mapTypeId: google.maps.MapTypeId.HYBRID
        });
        var contentString = '<h4>Sanna legno</h4><p>testo testo testo testo</p>';
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
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBnCMGOQvSAnDwPA4MFuBtmRjJW0_DRuM&callback=initMap">
    </script>
    

    
    <?php require 'footer.php';?>
    <?php require 'js.php';?>
</body>
</html>
