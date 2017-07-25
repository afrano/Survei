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

                <section class="content">
                    <form  role="form" action="<?php echo base_url(); ?>Cabang/SaveCabang" method="POST" enctype="multipart/form-data">
                        <div class="box">
                            <span id="pesan-flash"><?php echo $this->session->flashdata('sukses'); ?></span>
                            <span id="pesan-error-flash"><?php echo $this->session->flashdata('alert'); ?></span>
                            <div class="box-title">
                                <br>
                                <center>
                                    <font color="#008000">
                                    <h2><b>PT ENSEVAL PUTERA MEGATRADING Tbk.</b> <br></h2>
                                    <hr color="black">
                                    <h4><b>Form Input Data Cabang</b>
                                    </h4> <hr color="black">
                                    </font><br>
                                </center>
                            </div>
                            <div class="box-body chat" id="chat-box">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <?php $tahun = getdate(); ?>
                                        <label for="">Tahun Survei</label>
                                        <input type="number"  class="form-control" value="<?php echo $tahun['year']; ?>" id="" readonly="" >
                                    </div>
                                    <div class="form-group">
                                        <label for="">ID Cabang</label>
                                        <input type="text" class="form-control" value="" id="" name="id_cabang" placeholder="Masukan ID Cabang" required>                        
                                    </div>
                                    <div class="form-group">
                                        <label for="">Alamat </label>
                                        <input type="text" class="form-control" value="" id="" name="alamat_cabang" placeholder="Masukan Alamat Cabang" >                        
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">No Telpon</label>
                                        <input type="number" class="form-control" value="" id="" name="telpon_cabang" placeholder="Masukan No Telpon" >                        
                                    </div>
                                    <div class="form-group">
                                        <label for="">Regional</label>
                                        <select name="regional" class="form-control" required="">
                                            <option value="">Pilih Regional</option>
                                            <option value="Timur">Timur</option>
                                            <option value="Tengah">Tengah</option>
                                            <option value="Barat">Barat</option>
                                        </select> 
                                    </div>
                                    <br><br> <br><br><br><br><br> <br><br><br><div class="col-lg-6">
                                        <div>
                                            <button type="reset" class="btn btn-warning btn-block btn-flat"> <i <i class="fa fa-close"></i>  Batal</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <button type="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-save"></i>  Simpan</button>
                                        </div> 
                                    </div>
                                </div>  
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <br><br><br><br>
                                </div>

                            </div>
                        </div>
                    </form>
                </section>
            </div>
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                </div>
                <strong>Copyright &copy; 2017. &emsp14; PT Enseval Putera Megatrading Tbk.<a href="#"></a></strong>
            </footer>
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
</html>
