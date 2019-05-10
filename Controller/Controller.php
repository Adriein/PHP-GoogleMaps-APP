<?php
require_once("../DAO/GoogleMapsDAO.php");

class Controller{

  private $googleMapsDAO;

  public function __construct(){
    $this->googleMapsDAO = new GoogleMapsDAO();

  }

  public function getLocales(){
    return $this->googleMapsDAO->getLocales();

  }

  public function searchPlace($local){
    return $this->googleMapsDAO->searchPlace($local);

  }

}
?>
