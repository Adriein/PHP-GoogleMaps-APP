<?php
require_once("../DBConnection.php");
require_once("../Model/Locales.php");
require_once("../Model/Coordenadas.php");

class GoogleMapsDAO{

  private $connection;

  public function getLocales(){
    $this->connection = new DBConnection();
    $this->connection->executeQuery("select * from locales");

    foreach ($this->connection->getRows() as $local) {
       $allSites[] = new Locales($local['identificador'], $local['nombre']);

    }

    $this->connection->disconect();
    return $allSites;

  }

  public function searchPlace($local){
    $this->connection = new DBConnection();
    $this->connection->executeQuery("select * from coordenadas where locales =".$local);

    foreach ($this->connection->getRows() as $coordenada) {
      $allCoordenadas[] = new Coordenadas($coordenada['identificador'], $coordenada['coordenada'], $coordenada['locales']);

    }

    $this->connection->disconect();
    return $allCoordenadas;

  }
}
?>
