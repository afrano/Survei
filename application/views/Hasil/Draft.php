<!DOCTYPE html>
<html>
    <head>
        <link href="<?php echo base_url(); ?>assets/dist/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <?php $this->load->view('inc/head'); ?>
    </head>
    <body class="skin-green">
        <div class="wrapper">
            <?php $this->load->view('inc/head2'); ?>
            <aside class="main-sidebar">
                <?php $this->load->view('inc/sidebar'); ?>
            </aside>
            <div class="content-wrapper">
                <section class="content-header">
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box" >
                                    <div class="box-body" >
                                        <table id="example2" class="table table-bordered table-striped">
                                            <thead>
                                            <center><h4><b>Grafik Outlet yang disurvei</b></h4></center>
                                            <tr><center>
                                                <div style="width:70%">
                                                    <canvas id="chart-area"></canvas>
                                                </div></center>
                                            </tr>
                                            </thead>
                                        </table>                                    
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <center><h4><b>Tabel Data Outlet yang disurvei</b></h4></center>
                                        <tr>
                                            <th>NO</th>
                                            <th>Row Labels</th>
                                            <th>Count of Nama Outlet</th>
                                            <th>AKSI</th>
                                        </tr>
                                        <tr>
                                            <th>1</th>
                                            <th>Apotek</th>
                                            <th>10</th>
                                            <th>Detail</th>
                                        </tr>
                                        <tr>
                                            <th>2</th>
                                            <th>Rumah Sakit</th>
                                            <th>10</th>
                                            <th>Detail</th>
                                        </tr>
                                        <tr>
                                            <th>3</th>
                                            <th>Subdin</th>
                                            <th>10</th>
                                            <th>Detail</th>
                                        </tr>
                                        <tr>
                                            <th>4</th>
                                            <th>Other</th>
                                            <th>10</th>
                                            <th>Detail</th>
                                        </tr>
                                        <tr>
                                            <th>Grand Total</th>
                                            <th>Total Keseluruhan Outlet yang dilakukan survei</th>
                                            <th></th><th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>                               
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <footer class="main-footer">
                <strong>Copyright &copy; 2017 <a href="#"></a></strong>
            </footer>
        </div> <script src=""></script>
        <?php $this->load->view('inc/footer'); ?>
        <script src="<?php echo base_url(); ?>http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/Chart/Chart.bundle.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/dist/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/dist/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
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