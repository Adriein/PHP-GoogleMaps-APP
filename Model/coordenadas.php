<?php

class Coordenadas{

  private $id;
  private $coordenadas;
  private $local;

  public function __construct($id, $coordenadas, $local){
    $this->id = $id;
    $this->coordenadas = $coordenadas;
    $this->local = $local;

  }

  public function getId(){
    return $this->id;

  }

  public function getCoordenadas(){
    return $this->coordenadas;

  }

  public function getLocal(){
    return $this->local;

  }
}


?>
