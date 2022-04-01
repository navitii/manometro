<?php require_once 'componentes/conexion.php'; ?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Historial</title>
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/estilos.css"  />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    </head>
    <body>
        <!--navegador-->
        <?php include 'componentes/nav.php'; ?>
        <!--tabla-->
        <?php include 'componentes/tabla.php';?>
        <!--footer-->
        <?php include 'componentes/footer.php'; ?>
    </body>
    <!--scripts-->
    <?php include 'componentes/scripts.php'; ?>
</html>