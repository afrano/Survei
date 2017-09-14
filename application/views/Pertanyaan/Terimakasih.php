<html>
    <head>
        <link href="<?php echo base_url(); ?>assets/dist/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <?php $this->load->view('inc/head'); ?>
    </head>
    <body class="skin-green">
        <div class="wrapper">
            <?php $this->load->view('inc/head2User'); ?>
            <aside class="main-sidebar">
                <?php $this->load->view('inc/sidebarUser'); ?>
            </aside>
            <div class="content-wrapper">
                
                <section class="content">
                    <div class="box">
                        <span id="pesan-flash"><?php echo $this->session->flashdata('sukses'); ?></span>
                        <span id="pesan-error-flash"><?php echo $this->session->flashdata('alert'); ?></span>
                        <div class="box-title">
                            <br>
                            <center>
                                <font color="black">
                                <h3><b>PT ENSEVAL PUTERA MEGATRADING Tbk.</b> <br></h3>
                                </font><br>
                            </center>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box">
                                    <br>
                                    <div class="box-title">
                                        <center><h5><b>Bapak/Ibu yang terhormat,</b><br></h5>
                                         <h5>Terimakasih atas partisipasi anda dalam mengisi kuesioner kepuasan pelanggan.</h5> </center>
                                    </div><br>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <?php $this->load->view('inc/footer'); ?>
        <script src="<?php echo base_url(); ?>assets/dist/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/dist/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    </body>
    <script type="text/javascript">
                                                        $(function () {
                                                            $('#pesan-flash').delay(4000).fadeOut();
                                                            $('#pesan-error-flash').delay(5000).fadeOut();
                                                        });
    </script>
    <script type="text/javascript">
        function TampilKuesioner(param)
        {
            if (param == 1)
                document.getElementById("Kategoti1").style.visibility = 'visible';
            else
                document.getElementById("Kategoti1").style.visibility = 'hidden';
        }
    </script>
</html>