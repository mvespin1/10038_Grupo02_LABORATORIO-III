<?php
/**
 * TODO Auto-generated comment.
 */
abstract class Continente {
  public $nombre;
  public $maxPaises;

  public function __construct($nombre, $maxPaises) {
      $this->nombre = $nombre;
      $this->maxPaises = $maxPaises;
  }

  abstract function Imprimir();
}
