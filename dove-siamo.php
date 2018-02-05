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
        var cheremule = {lat: 40.5043241, lng: 8.72621};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 20,
          center: cheremule
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
    
    <div style= "height:100px; width:250px">
    <?php require 'contact_form.php';?>
    </div>
    <?php require 'footer.php';?>
    <?php require 'js.php';?>
</body>
</html>
