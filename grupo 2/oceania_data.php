<?php

include "CLASES/CONTINENTE.php";
include "CLASES/OFC.php";
include "CLASES/PAIS.php";
include "CLASES/PROVINCIA.php";
include "CLASES/CIUDAD.php";

// Leer el contenido del archivo JSON
$jsonData = file_get_contents('datos.json');

// Decodificar el JSON en un array asociativo
$data = json_decode($jsonData, true);

// Crear instancias de OFC utilizando los datos del JSON
$oceanicConfederationData = $data['OFC'][0];

// Crear instancias de continentes, países, provincias y ciudades utilizando los datos del array asociativo
$oceanicConfederation = new OFC('Confederación de Fútbol de Oceanía', $oceanicConfederationData['continentes']['oceania']['numPaises'], $oceanicConfederationData['sello'], $oceanicConfederationData['continentes']['oceania']['numPaises']);

// Acceder a las propiedades sello y maxPaises
$sello = $oceanicConfederation->sello;
$maxPaises = $oceanicConfederation->maxPaises;

// Utilizar la instancia de Continente para crear las instancias de países, provincias y ciudades
foreach ($oceanicConfederationData['continentes']['oceania']['paises'] as $paisData) {
  $provincias = array();

  foreach ($paisData['provincias'] as $provinciaData) {
      $ciudades = array();

      foreach ($provinciaData['ciudades'] as $ciudadData) {
          $ciudad = new Ciudad($ciudadData['nombre'], $ciudadData['codigoPostal']);
          $ciudades[] = $ciudad;
      }

      $numeroCiudades = count($ciudades); // Número de ciudades
      $provincia = new Provincia($provinciaData['nombre'], $numeroCiudades);
      $provincia->ciudades = $ciudades;

      $provincias[] = $provincia;
  }

  $pais = new Pais($paisData['nombre'], $paisData['platosTipicos'], $paisData['moneda'], $paisData['bandera']);
  $pais->provincias = $provincias;

  $oceanicConfederation->agregarPais($pais);
}

?>
