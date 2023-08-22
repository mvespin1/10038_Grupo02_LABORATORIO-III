<?php
/**
 * TODO Auto-generated comment.
 */
require_once("CONTINENTE.php");
require_once("ORGANIZACION.php");
require_once("CIUDAD.php"); // Agregar las clases necesarias

class AFC extends CONTINENTE implements ORGANIZACION {
    private $sello;
    private $numPais;

    // Atributos específicos de la organización
    private Continentes $lugar;
    private Ciudad $sede;
    private ONG $tipo;

    public function __construct($nombreConti, $maxPaises, $sello, $numPais, Continentes $lugar, Ciudad $sede, ONG $tipo) {
        parent::__construct($nombreConti, $maxPaises);
        $this->sello = $sello;
        $this->numPais = $numPais;
        $this->lugar = $lugar;
        $this->sede = $sede;
        $this->tipo = $tipo;
    }

    public function afiliacion()
    {
        
    }

    public function Imprimir(){

    }

}