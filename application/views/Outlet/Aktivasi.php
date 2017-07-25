<html>
    <head>
        <link href="<?php echo base_url(); ?>assets/dist/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <?php $this->load->view('inc/head'); ?>
    </head>
    <header class="site-header">	
        <nav class="navbar navbar-default">		
            <div class="container">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-bars"></i>
                </button>
                <a href="index.php" class="navbar-brand">
                    <img src="<?php echo base_url(); ?>assets/img/Logoen.png" alt="" width="90" high="90" alt="Post" >
                </a>
                <div class="collapse navbar-collapse" id="bs-navbar-collapse">
                    <ul class="nav navbar-nav main-navbar-nav">
                        <li ><?php echo anchor('index.php', '<b>Home</b>') ?></li>
                        <li><?php echo anchor('http://www.enseval.com/tentang-kami/tata-kelola-perusahaan/struktur/', '<b>About Us</b>') ?></li>
                        <li><?php echo anchor('login', '<b>Login</b>') ?></li>
                        <li class="active"><a href="<?php echo base_url(); ?>Aktivasi"><b>Aktivasi</b></a><li>
                    </ul>   					
                </div>
            </div>			
        </nav> 
    </header>
    <body class="skin-green">
        <section class="content">
            <form  role="form" action="<?php echo base_url(); ?>Aktivasi/SaveData" method="POST" enctype="multipart/form-data">
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
                                    <label for="">ID Outlet</label>
                                    <input type="text" class="form-control" value="" id="" name="id_outlet" placeholder="Masukan ID Outlet" required>                        
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control" value="" id="" name="pass_user" placeholder="Masukan Password" required>                        
                                </div>
                                <div class="form-group">
                                    <label for="">Konfirmasi Password </label>
                                    <input type="password" class="form-control" value="" id="" name="pass_user1" placeholder="Konfirmasi Password" required>                        
                                </div>
                            </div>
                            <div class="col-lg-6">

                                <div class="form-group">
                                    <label for="">Alamat </label>
                                    <input type="text" class="form-control" value="" id="" name="alamat_outlet" placeholder="Masukan Alamat Outlet" required>                        
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
        <?php $this->load->view('incsite/footer'); ?>
        <script src="<?php echo base_url(); ?>assets/dist/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/dist/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    </body>
    <script type="text/javascript">
        $(function () {
            $('#pesan-flash').delay(4000).fadeOut();
            $('#pesan-error-flash').delay(5000).fadeOut();
        });
    </script>
    <style>
        * {outline:none;}
        html, body {height: 100%;}
        body {font-family: 'Open Sans', sans-serif;font-size: 13px;line-height: 1.6;color: #8c8c8c;background-color: #008000;}
        h1, h2, h3, h4, h5, h6 {font-family: 'Open Sans', sans-serif;}
        a {color: #FFFFFF;}
        a:hover {color: #FFFFFF;transition-property: all;transition-duration: 0.3s;transition-timing-function: linear;}
        a.none:hover {text-decoration: none;}

        /* Header */
        .top {background-color: #32CD32;padding: 5px 0;color: #fff;}
        .top p {margin: 0;}
        .top ul {margin: 0;padding: 0;}
        .top li i {color: #fff;}
        .top li a {color: #fff;}
        .top li a:hover {text-decoration: none;}
        .top li a:hover,.top li a:hover i {color: #005FA6;transition-property: all;transition-duration: 0.3s;transition-timing-function: linear;}

        /* Navigation */
        .navbar {-moz-border-radius: 0;-webkit-border-radius: 0;border-radius: 0;margin-bottom: 0;}
        .navbar .container {position: relative;}
        .navbar-default {-moz-transition: all 0.3s ease-out;-o-transition: all 0.3s ease-out;-webkit-transition: all 0.3s ease-out;transition: all 0.3s ease-out;width: 100%;border: none;border-bottom: 1px solid #e7e7e7;background-color: #32CD32 ;} /*Menu Warna*/
        .navbar-default .navbar-nav > li > a {color: #404040;font-weight: normal;font-size: 15px;} /*Tulisan*/
        .navbar-default .navbar-nav > li > a:hover {background-color: #32CD32;color: #FFFFFF;} /*Warna Pada pilihan*/
        .navbar-default .navbar-nav > .open > a,.navbar-default .navbar-nav > .open > a:hover,.navbar-default .navbar-nav > .open > a:focus {background-color: transparent;color: #005FA6;}
        .navbar-default .navbar-nav .active > a,.navbar-default .navbar-nav .active > a:hover,.navbar-default .navbar-nav .active > a:focus {color: #FFFFFF;background-color: transparent;}
        .navbar-default .navbar-toggle {margin: 10px 0 0 15px;}
        .navbar-default .navbar-toggle,.navbar-default .navbar-toggle:hover,.navbar-default .navbar-toggle:focus {border: none;background: #32CD32;}
        .navbar-default .navbar-toggle i {font-size: 31px;}
        .navbar-default .navbar-collapse {float: right;border-top: none;padding-left: 0;padding-right: 0;}
        .navbar-brand>img {padding: 5px;}

        @media screen and (max-width: 768px) {.navbar-default .navbar-collapse {padding-left: inherit;padding-right: inherit;}}
        @media screen and (max-width: 992px) {.navbar-default .navbar-collapse {width: 100%;margin-left: 0;margin-right: 0;max-height: none;}}
        @media (min-width:768px) {.navbar>.container .navbar-brand,.navbar>.container-fluid .navbar-brand {margin-left: 0;}}

        .main-navbar-nav {-moz-transition: all 0.3s linear;-o-transition: all 0.3s linear;-webkit-transition: all 0.3s linear;transition: all 0.3s linear;}
        .main-navbar-nav > li > a {padding-top: 30px;padding-bottom: 30px;line-height: 1;}
        .main-navbar-nav li > .dropdown-menu {-moz-transition: all 0.3s ease-out;-o-transition: all 0.3s ease-out;-webkit-transition: all 0.3s ease-out;transition: all 0.3s ease-out;min-width: 225px;border: none;border-top: 2px solid #005FA6;}
        .main-navbar-nav li > .dropdown-menu > li > a {padding: 10px;position: relative;color: #32CD32;line-height: 1.12857143;font-size: 12px;}
        .main-navbar-nav li > .dropdown-menu > li > a:hover,.main-navbar-nav li > .dropdown-menu > li > a:focus {color: #005FA6;background-color: transparent;}
        .main-navbar-nav li > .dropdown-menu > li > a i {position: absolute;right: 20px;top: 50%;margin-top: -8px;font-size: 16px;}

        @media screen and (min-width: 993px) {.main-navbar-nav .dropdown:hover > .dropdown-menu {display: block;}.main-navbar-nav .dropdown:hover > .dropdown-menu .dropdown:hover .dropdown-menu {left: 225px;top: 0;margin-top: -2px;}}
        @media screen and (max-width: 992px) {.main-navbar-nav > li {border-bottom: 1px solid #f3f3f3;}.main-navbar-nav > li:last-child {border-bottom: none;}.main-navbar-nav > li > a {padding-top: 12px;padding-bottom: 12px;}}

        .navbar-brand {height: auto;padding: 0;}

        #copyright {background: #008000;color: #ccc;padding: 0px 0;font-size: 12px;margin-top: 20px;}
        #copyright p, #copyright ul {margin: 0;float: left;font-size: 12px;}
        #copyright a {color: #fff;font-size: 22px;}

    </style>
</html>
