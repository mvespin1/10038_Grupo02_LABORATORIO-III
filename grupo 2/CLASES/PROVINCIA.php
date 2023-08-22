<?php
/**
 * TODO Auto-generated comment.
 */
class Provincia {
    public $nombre;
    public $numeroCiudades;
    public $ciudades = array();
  
    public function __construct($nombre, $numeroCiudades) {
        $this->nombre = $nombre;
        $this->numeroCiudades = $numeroCiudades;
    }
  
    public function agregarCiudad($ciudad) {
        $this->ciudades[] = $ciudad;
    }
  }