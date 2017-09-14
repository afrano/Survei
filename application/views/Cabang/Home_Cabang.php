<html>
    <head>
        <link href="<?php echo base_url(); ?>assets/dist/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <?php $this->load->view('inc/head'); ?>
    </head>
    <body class="skin-green">
        <div class="wrapper">
            <?php $this->load->view('inc/head2User'); ?>
            <aside class="main-sidebar">
                <?php $this->load->view('inc/sidebarMenu_C'); ?>
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        <b>Menu</b>
                    </h1>
                </section>
                <!-- Main content -->
                <section class="content">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>Site MOM</h3>
                                    <p><b></b></p>
                                </div>
                                <a href="#" class="small-box-footer">Masuk <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>Site Survei</h3>
                                    <p><b></b></p>
                                </div>
                                <a href="<?php echo base_url(); ?>Cabang/indexa" class="small-box-footer">Masuk <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->
                    <!-- Main row -->


                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <!-- <b>Version</b> 2.0 -->
                </div>
                <strong>Copyright &copy; 2015 <a href="#"></a></strong>
            </footer>
        </div><!-- ./wrapper -->
        <?php $this->load->view('inc/footer', TRUE); ?>
    </body>
</html>