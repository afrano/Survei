<html>
    <head>
        <?php $this->load->view('inc/head'); ?>
    </head>
    <body class="skin-green" >
        <div class="wrapper">
            <?php $this->load->view('inc/head2'); ?>
            <aside class="main-sidebar">
                <?php $this->load->view('inc/sidebar'); ?>
            </aside>
            <div class="content-wrapper">
                <section class="content-header">
                    <center>
                        <font color="#008000">
                        <h3>
                            <b>                                
                               Home Pengumpulan data survei
                            <br>
                            <br><br>
                        </h3
                        <center>
                            <div style="width:90%">
                                <canvas id="chart-area" ></canvas>
                            </div>
                        </center>

                    </center>
                    <br>    
                </section>
            </div>
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                </div>
                <strong>Copyright &copy; 2017. &emsp14; PT Enseval Putera Megatrading Tbk.<a href="#"></a></strong>
            </footer>
        </div>
        <?php $this->load->view('inc/footer', TRUE); ?>
        <script src="<?php echo base_url(); ?>http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/Chart/Chart.bundle.js" type="text/javascript"></script>


    </body>
    <script>
        var randomScalingFactor = function () {
            return Math.round(Math.random() * 100);
        };
        var randomColorFactor = function () {
            return Math.round(Math.random() * 255);
        };
        var randomColor = function (opacity) {
            return 'rgba(' + randomColorFactor() + ',' + randomColorFactor() + ',' + randomColorFactor() + ',' + (opacity || '.3') + ')';
        };
        var config = {
            data: {
                datasets: [{
                        data: [
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                        ],
                        backgroundColor: [
                            "#F7464A",
                            "#46BFBD",
                            "#FDB45C",
                            "#949FB1",
                        ],
                        label: 'My dataset' // for legend
                    }],
                labels: [
                    "Apotek",
                    "Rumah Sakit",
                    "Subdis",
                    "Other"
                ]
            },
            options: {
                responsive: true,
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Channel outlet yang disurvei'
                },
                scale: {
                    ticks: {
                        beginAtZero: true
                    },
                    reverse: false
                },
                animation: {
                    animateRotate: false,
                    animateScale: true
                }
            }
        };

        window.onload = function () {
            var ctx = document.getElementById("chart-area");
            window.myPolarArea = Chart.PolarArea(ctx, config);
        };
    </script>
</html>