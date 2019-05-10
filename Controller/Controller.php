<?php
require_once("../DAO/GoogleMapsDAO");

class Controller{

  private $googleMapsDAO;

  public function __construct(){
    $this->googleMapsDAO = new GoogleMapsDAO();

  }

  public function getLocales(){
    return $this->googleMapsDAO->getLocales();

  }

}
?>
