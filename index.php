<?php require_once 'componentes/conexion.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Manometro</title>
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/estilos.css"  />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <!--navegador-->
        <?php include 'componentes/nav.php'; ?>
        <!--formulario-->
        <?php include 'componentes/formulario.php'; ?>
        <!--footer-->
        <?php include 'componentes/footer.php'; ?>
        <!--procesos-->
        <?php include 'procesos.php';?>
    </body>
    <!--scripts-->
    <?php include 'componentes/scripts.php'; ?>
</html>