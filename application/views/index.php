<html>
    <head>
        <?php $this->load->view('inc/head'); ?>
    </head>
    <body class="skin-blue">
        <div class="wrapper">
            <?php $this->load->view('inc/head2'); ?>
            <aside class="main-sidebar">
                <?php $this->load->view('inc/sidebar'); ?>
            </aside>
            <div class="content-wrapper">
                <section class="content-header">
                    <center>
                        <font color="#B22222">
                        <h3>
                            <b> Selamat Datang <?php echo $nama; ?> di Web Pengolahan Data Survei</b>
                            <br>
                        </h3>
                         <img src="<?php echo base_url(); ?>assets/img/Homelogin.png" />
                    </center>
                    <br>    
                </section>
            </div>
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                </div>
                <strong>Copyright &copy; 2017 <a href="#"></a></strong>
            </footer>
        </div>
        <?php $this->load->view('inc/footer', TRUE); ?>
    </body>
</html>