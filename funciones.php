<?php 

function guardar_registro($responsable, $psi, $fecha_registro, $numero_pozo){
    include 'componentes/conexion.php';

    $sql = "INSERT INTO registros (responsable, psi, fecha_registro, numero_pozo)
    VALUES ('$responsable', '$psi', '$fecha_registro', $numero_pozo)";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Se ha creado registro con exito');</script>";
    } 
    mysqli_close($conn);
 
}