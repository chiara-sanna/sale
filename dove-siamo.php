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

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3033.6860899293315!2d8.724021315117882!3d40.50432405823187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12dc45ca764e865f%3A0x11bba73a27315f59!2sSanna+Legno+Srl!5e0!3m2!1sen!2sit!4v1517776525485" 
        width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

      function initMap() {
        var cheremule = {lat: 40.507728, lng: 8.726293};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 20,
          center: cheremule
        });

        var contentString = '<h4>Sanna legno</h4><p>testo testo testo testo</p>';

        var infowindow = new google.maps.InfoWindow({
          content: contentString,
          maxWidth: 200
        });

        var marker = new google.maps.Marker({
          position: Cheremule,
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
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBnCMGOQvSAnDwPA4MFuBtmRjJW0_DRuM
&callback=initMap">
    </script>
    <?php require 'footer.php';?>
    <?php require 'js.php';?>
</body>
</html>
