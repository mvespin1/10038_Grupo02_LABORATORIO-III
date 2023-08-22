<?php
/**
 * TODO Auto-generated comment.
 */
require_once("PAIS.php");
require_once("ORGANIZACION.php");

class CONCACAF extends Pais implements Organizacion {
    private $sello;
    private $numPais;

    // Atributos específicos de la organización
    private Continentes $lugar;
    private Ciudad $sede;
    private ONG $tipo;

    public function __construct($nombrePais, $platotipico, $moneda, $bandera, $sello, $numPais, Continentes $lugar, Ciudad $sede, ONG $tipo) {
        parent::__construct($nombrePais, $platotipico, $moneda, $bandera);
        $this->sello = $sello;
        $this->numPais = $numPais;
        $this->lugar = $lugar;
        $this->sede = $sede;
        $this->tipo = $tipo;
    }

    public function afiliacion() {
        // Implementar lógica de afiliación
    }
}
