<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0">
    <title>Maps</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 50%;
        width:50%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <form action="index.php" method="post">
      <select class="" name="allLocales">
        <?php
          require_once("../Controller/Controller.php");
          $controller = new Controller();
          $allLocales = $controller->getLocales();

          foreach ($allLocales as $local) {
            echo"<option value=".$local->getId().">".$local->getNombre()."</option>";
          }
        ?>
      </select>
      <input type="submit" name="submit" value="Buscar">
    </form>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        var barcelona = {lat: 41.387388, lng: 2.153975}
        map = new google.maps.Map(document.getElementById('map'), {
          center: barcelona,
          zoom: 13
        });

        <?php
          if(isset($_POST['submit'])){
            require_once("../Controller/Controller.php");
            $controller = new Controller();
          $allCoordenadas = $controller->searchPlace($_POST['allLocales']);
          //echo var_dump($allCoordenadas);
            foreach ($allCoordenadas as $coordenadas) {

        ?>
        var site = {<?php echo$coordenadas->getCoordenadas()?>}
        var marker = new google.maps.Marker({
          position: site,
          map: map,
          title:'adri'
        });
        <?php
            }
          }
         ?>
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKIfc1y_We_ziNNpMf0rm-XneFBFpCF2M&callback=initMap"
    async defer></script>
  </body>
</html>
