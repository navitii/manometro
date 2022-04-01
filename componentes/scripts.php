<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
        $('#mi_tabla').DataTable();
    } );

    $(document).ready(function(){
        $('select').formSelect();
    });
    
    $(document).ready(function(){
        $('.modal').modal();
    });
    const config = {
        type: 'bar',
        data: data,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        },
    };

    const config_b = {
        type: 'bar',
        data: data_b,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        },
    };
    const config_c = {
        type: 'bar',
        data: data_c,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        },
    };

    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
    const myChart_b = new Chart(
        document.getElementById('myChart_b'),
        config_b
    );
    const myChart_c = new Chart(
        document.getElementById('myChart_c'),
        config_c    
    );
    
</script>