<?php

/**
 * TODO Auto-generated comment.
 */
require_once("CONTINENTE.php");

class OFC extends CONTINENTE
{
    public $sello;
    public $numPaises;
    public $paises = array();
  
    public function __construct($nombre, $maxPaises, $sello, $numPaises) {
        parent::__construct($nombre, $maxPaises);
        $this->sello = $sello;
        $this->numPaises = $numPaises;
    }
  
    public function agregarPais($pais) {
        $this->paises[] = $pais;
    }

    public function Imprimir()
    {
        $html = "";

        foreach ($this->paises as $pais) { // Usar $this->paises en lugar de $pais

        //PROVINCIAS Y CAPITALES
        $html .= '<div class="row">
                    <div class="d-flex flex-column">
                    <!-- TABLA  -->
                    <section class="intro">
                        <div class="bg-image h-100" style="background-color: #f5f7fa;">
                            <div class="mask d-flex align-items-center h-100">
                                <div class="container" style="padding:20px">
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body p-0">
                                                    <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative;">
                                                        <table class="table table-striped mb-0">
                                                            <thead style="background-color: #002d72;">
                                                                <tr>
                                                                    <th colspan="2" scope="colgroup" style="color: white; text-align: center; background-color: #002D72; cursor: pointer;" >' . $pais->getNombre() . '</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="nzTable">';
        foreach ($pais->getObjProvincia() as $provincia) {
            $html .= '<tr>';
            $html .=  '<th colspan="2" style="text-align: center; background-color: #EC7063;">' . $provincia->getNombre() . '</th>';
            $html .=  '</tr>';

            foreach ($provincia->getObjCiudades() as $ciudad) {
                $html .= '<tr>';
                $html .= '<td colspan="2">' . $ciudad->getNombre() . '</td>';
                $html .= '</tr>';
            }
        }
        $html .= '</tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>';

        // MONEDA
        $html .= '<section class="intro">
                <div class="bg-image h-100" style="background-color: #f5f7fa;">
                    <div class="mask d-flex align-items-center h-100">
                        <div class="container" style="padding:20px">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body p-0">
                                            <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative;">
                                                <table class="table table-striped mb-0">
                                                    <thead style="background-color: #002d72;">
                                                        <tr>
                                                            <th colspan="2" scope="colgroup" style="color: white; text-align: center; background-color: #002D72; cursor: pointer;">INFORMACION GENERAL</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>';

        $titulos = array("MONEDA");

        foreach ($titulos as $titulo) {
            $html .= '<tr>';
            $html .= '<th colspan="2" style="text-align: center; background-color: #EC7063;">' . $titulo . '</th>';
            $html .= '</tr>';

            $html .= '<tr>';
            $html .= '<td colspan="2">' . $pais->getMoneda() . '</td>';
            $html .= '</tr>';
        }

        $html .= '</tbody>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>';

        //BANDERA
        $html .=  '<section class="intro">
            <div class="bg-image h-100" style="background-color: #f5f7fa;">
                <div class="mask d-flex align-items-center h-100">
                    <div class="container" style="padding:20px">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative;">
                                            <table class="table table-striped mb-0">
                                                <tbody>';
        $bandera = array("BANDERA");

        foreach ($bandera as $titulo) {
            $html .= '<tr>';
            $html .= '<th colspan="2" style="text-align: center; background-color: #EC7063;">' . $titulo . '</th>';
            $html .= '</tr>';

            $html .= '<tr>';
            $html .= '<td colspan="2"><img src="' . $pais->getBandera() . '" alt="Bandera de Nueva Zelanda"></td>';
            $html .= '</tr>';
        }
        $html .= '</tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>';

        //PLATOS TIPICOS
        $html .= '<section class="intro">
                <div class="bg-image h-100" style="background-color: #f5f7fa;">
                    <div class="mask d-flex align-items-center h-100">
                        <div class="container" style="padding:20px">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body p-0">
                                            <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative;">
                                                <table class="table table-striped mb-0">
                                                    <tbody>';
        $platosTipicos = array("PLATOS TIPICOS");

        foreach ($platosTipicos as $titulo) {
            $html .= '<tr>';
            $html .= '<th colspan="2" style="text-align: center; background-color: #EC7063;">' . $titulo . '</th>';
            $html .= '</tr>';

            $html .= '<tr>';
            $html .= '<td colspan="2">';
            $html .= $pais->mostrarPlatosTipicos(); // Imprimir el carrusel de platos típicos
            $html .= '</td>';
            $html .= '</tr>';
        }
        $html .= ' </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </div>
            </div>';

    }

        echo $html;
    }
}
