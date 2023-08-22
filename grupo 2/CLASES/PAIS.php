<?php
/**
 * TODO Auto-generated comment.
 */
class Pais {
    public $nombre;
    public $platoTipico;
    public $moneda;
    public $bandera;
    public $provincias = array();
  
    public function __construct($nombre, $platoTipico, $moneda, $bandera) {
        $this->nombre = $nombre;
        $this->platoTipico = $platoTipico;
        $this->moneda = $moneda;
        $this->bandera = $bandera;
    }
  
    public function agregarProvincia($provincia) {
        $this->provincias[] = $provincia;
    }
  
    public function mostrarPlatosTipicos() {
      $html = '<div id="miSlider" class="carousel slide" data-bs-ride="carousel">
                  <ol class="carousel-indicators">';
  
      $active = true;
      foreach ($this->platoTipico as $index => $plato) {
          $html .= '<li data-bs-target="#miSlider" data-bs-slide-to="' . ($index) . '" class="' . ($active ? 'active' : '') . '"></li>';
          $active = false;
      }
  
      $html .= '</ol>
                <div class="carousel-inner">';
  
      $active = true;
      foreach ($this->platoTipico as $index => $plato) {
          $html .= '<div class="carousel-item ' . ($active ? 'active' : '') . '">
                      <img src="' . $plato['imagen'] . '" class="d-block w-100" alt="' . $plato['nombre'] . '">
                  </div>';
          $active = false;
      }
  
      $html .= '</div>
                <a class="carousel-control-prev" href="#miSlider" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#miSlider" role="button" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </a>
              </div>';
  
      return $html;
  }
  
  }