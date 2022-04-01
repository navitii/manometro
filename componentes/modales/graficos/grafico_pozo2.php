<script>
    const labels_b = [
        <?php
                    $sql = "SELECT * FROM registros where numero_pozo = 2";
                    $resultado = $conn->query($sql);
                    while($obj = $resultado->fetch_object()){
                ?>
                '<?php echo $obj->fecha_registro ?>',
           <?php }; ?>
    ];
    const data_b = {
        labels: labels,
        datasets: [{
            label: 'Grafico Pozo 2',
            data: [
                <?php
                        $sql = "SELECT * FROM registros where numero_pozo = 2";
                        $resultado = $conn->query($sql);
                        while($obj = $resultado->fetch_object()){
                    ?>
                    '<?php echo $obj->psi ?>',
            <?php }; ?>],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
            ],
            borderWidth: 1
        }]
    };
</script>

<div>
    <canvas id="myChart_b"></canvas>
</div>
