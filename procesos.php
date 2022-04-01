<?php

require 'funciones.php';
require_once 'componentes/conexion.php';


if(isset($_POST['psi']) && isset($_POST['responsable']) && !empty($_POST['fecha_registro']) && isset($_POST['numero_pozo'])){
    
    $responsable = $_POST['responsable'];
    $psi = $_POST['psi'];
    $fecha_registro = $_POST['fecha_registro'];
    $numero_pozo = $_POST['numero_pozo'];
    //print_r($_POST);
    guardar_registro($responsable, $psi, $fecha_registro, $numero_pozo);

}