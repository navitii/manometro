<main>
    <div class="container">
        <div class="row">
            <div class="col s8 margin">
                <div class="card horizontal">
                    <div class="card-stacked">
                        <div class="card-content">
                            <span class="card-title">Historial del Manometro</span>
                            <table class="striped display" id="mi_tabla" >
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>RESPONSABLE</th>
                                        <th>PSI</th>
                                        <th>POZO</th>
                                        <th>FECHA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $sql = "SELECT * FROM registros";
                                    if ($resultado = $conn->query($sql)):
                                        while ($obj = $resultado->fetch_object()):
                                    ?>
                                    <tr>
                                        <td><?php echo $obj->id; ?></td>
                                        <td><?php echo $obj->responsable; ?></td>
                                        <td><?php echo $obj->psi; ?></td>
                                        <td><?php echo $obj->numero_pozo; ?></td>
                                        <td><?php echo $obj->fecha_registro; ?></td>
                                        
                                    </tr>
                                
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>   
                    </div>
                </div>
            </div>
            <div class="col s4 margin">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Graficas</span>
                        <div class="row">
                            <div class="col s12 padding-bottom"><a class="waves-effect waves-light btn modal-trigger light-blue darken-2 button_fix" href="#modal_pozo1">Grafica del pozo 1</a></div>
                            <div class="col s12 padding-bottom"><a class="waves-effect waves-light btn modal-trigger light-blue darken-2 button_fix" href="#modal_pozo2">Grafica del pozo 2</a></div>
                            <div class="col s12"><a class="waves-effect waves-light btn modal-trigger light-blue darken-2 button_fix" href="#modal_pozo3">Grafica del pozo 3</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include 'modales/modal_pozo1.php'; ?>
<?php include 'modales/modal_pozo2.php'; ?>
<?php include 'modales/modal_pozo3.php'; ?>

