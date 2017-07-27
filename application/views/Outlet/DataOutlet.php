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
                <section class="content-header">
                    <center><h1> <i class="fa fa-database"></i>
                            <b>DATA OUTLET</b>
                        </h1></center>
                </section>
                <section class="content">
                    <div class="box">
                        <div class="box-title">
                        </div>
                       <div class="box-header">
                            <i class="fa fa-database"></i>
                            <h3 class="box-title">Detail Data Outlet</h3>
                        </div>
                        <div class="box-body chat" id="chat-box">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">ID Outlet</label>
                                    <input type="text" readonly="" class="form-control" value="<?php echo $id_outlet; ?>" id="" name="nama_outlet" >                        
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Outlet</label>
                                    <input type="text" readonly="" class="form-control" value="<?php echo $nama_outlet; ?>" id="" name="nama_outlet" >                        
                                </div>
                                <div class="form-group">
                                    <label for="">Cabang</label> 
                                    <input type="text" readonly="" class="form-control" value="<?php echo $id_cabang; ?>" id="" name="nama_outlet" >                        

                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Channel</label>
                                    <input type="text" readonly="" class="form-control" value="<?php echo $channel; ?>" id="" name="nama_outlet" >                        
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat </label>
                                    <input type="text" class="form-control" readonly="" value="<?php echo $alamat; ?>" id="" name="alamat_outlet" >                        
                                </div>
                                <div class="form-group">
                                    <label for="">No Telpon</label>
                                    <input type="number" class="form-control" readonly="" value="<?php echo $telpon; ?>" id="" name="telpon_outlet" >                        
                                </div>
                                <br><br><br><br><br><br>
                            </div>
                        </div>
                        <div class="row">
                        </div>
                    </div>
                    </form>
                </section>
            </div>
        </div>
        <?php $this->load->view('inc/footer'); ?>
        <script src="<?php echo base_url(); ?>assets/dist/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/dist/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    </body>
</html>