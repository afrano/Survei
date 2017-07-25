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
                    <form  role="form" action="<?php echo base_url(); ?>User/SaveOutlet" method="POST" enctype="multipart/form-data">
                        <div class="box">
                            <span id="pesan-flash"><?php echo $this->session->flashdata('sukses'); ?></span>
                            <span id="pesan-error-flash"><?php echo $this->session->flashdata('alert'); ?></span>
                            <div class="box-title">
                                <br>
                                <center>
                                    <font color="#008000">
                                    <h2><b>PT ENSEVAL PUTERA MEGATRADING Tbk.</b> <br></h2>
                                    <hr color="black">
                                    <h4><b>Form Input Data Outlet</b>
                                    </h4>
                                    </font><br>
                                </center>
                            </div>
                            <div class="box-body chat" id="chat-box">
                                <div class="box-body chat" id="chat-box">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Nama Outlet</label>
                                            <input type="text" class="form-control" value="" id="" name="nama_outlet" placeholder="Masukan Nama Outlet" required>                        
                                        </div>
                                        <div class="form-group">
                                            <label for="">Cabang</label> 
                                            <select name="cabang_outlet" class="form-control" required="">
                                                <option value="">Pilih Cabang</option>
                                                <option value="BAC">Banda Aceh</option>
                                                <option value="BD2">Bandung 2</option>
                                                <option value="BDG">Bandung</option>
                                                <option value="BDL">Bandar Lampung</option>
                                                <option value="BGR">Bogor</option>
                                                <option value="BKL">Bengkulu</option>
                                                <option value="BKS">Bekasi</option>
                                                <option value="BMS">Banjarmasin</option>
                                                <option value="BPP">BalikPapan</option>
                                                <option value="BTM">Batam</option>
                                                <option value="CRB">Cirebon</option>
                                                <option value="DPS">Denpasar</option>
                                                <option value="JBI">Jambi</option>
                                                <option value="JBR">Jember</option>
                                                <option value="JK1">Jakarta 1</option>
                                                <option value="JK2">Jakarta 2</option>
                                                <option value="JK3">Jakarta 3</option>
                                                <option value="JPU">Jayapura</option>
                                                <option value="KDR">Kediri</option>
                                                <option value="KDS">Kudus</option>
                                                <option value="KPG">Kupang</option>
                                                <option value="LSE">Lhokseumawe</option>  
                                                <option value="MDN">Medan</option>
                                                <option value="MKS">Makasar</option>
                                                <option value="MLG">Malang</option>
                                                <option value="MNO">Manado</option>
                                                <option value="MTR">Mataram</option>
                                                <option value="PDG">Padang</option>
                                                <option value="PJT">Pejaten</option>
                                                <option value="PKB">Pekanbaru</option>
                                                <option value="PKP">Pangkalpinang</option>
                                                <option value="PLB">Palembang</option>
                                                <option value="PLU">Palu</option>
                                                <option value="PMS">Pematangsiantar</option>
                                                <option value="PTK">Pontianak</option>
                                                <option value="PWK">Purwokerto</option>
                                                <option value="SB1">Surabaya 1</option>
                                                <option value="SB2">Surabaya 2</option>
                                                <option value="SKI">Sukabumi</option>  
                                                <option value="SLO">Solo</option>
                                                <option value="SMD">Samarinda</option>
                                                <option value="SMG">Semarang</option>
                                                <option value="TGL">Tegal</option>
                                                <option value="TGR">Tangerang</option>
                                                <option value="TSK">Tasikmalaya</option>
                                                <option value="YOG">Yogyakarta</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Channel</label>
                                            <select name="channel" class="form-control" required="">
                                                <option value="">Pilih Channel</option>
                                                <option value="Apotek">Apotek</option>
                                                <option value="Rumah Sakit">Rumah Sakit</option>
                                                <option value="Subdis">Subdis</option>
                                                <option value="other">Other</option>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Alamat </label>
                                            <input type="text" class="form-control" value="" id="" name="alamat_outlet" placeholder="Masukan Alamat Outlet" required>                        
                                        </div>
                                        <div class="form-group">
                                            <label for="">No Telpon</label>
                                            <input type="number" class="form-control" value="" id="" name="telpon_outlet" placeholder="Masukan No Telpon" required>                        
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">

                                    <br><br><br> <br><br><br><div class="col-lg-6">
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
