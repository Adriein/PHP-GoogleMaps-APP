<?php

class Coordenadas{

  private $coordenadas;
  private $nombreLocal;

  public function __construct($coordenadas, $nombreLocal){

    $this->coordenadas = $coordenadas;
    $this->nombreLocal = $nombreLocal;

  }

  public function getCoordenadas(){
    return $this->coordenadas;

  }

  public function getNombreLocal(){
    return $this->nombreLocal;

  }
}


?>
