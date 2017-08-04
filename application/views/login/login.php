<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Halaman Login | Survei Enseval</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
        <link href="<?php echo base_url(); ?>assets/dist/css/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
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
                        <li class="active"><?php echo anchor('login', '<b>Login</b>') ?></li>
                        <li ><a href="<?php echo base_url(); ?>site/Aktivasi"><b>Aktivasi</b></a><li>
                    </ul>   					
                </div>
            </div>			
        </nav> 
    </header>
</head>

<body class="login-page" style=" background-image: url(assets/img/hero.jpg);background-position: center center;background-repeat: no-repeat;background-size: cover;padding: 0;">
    <div class="login-box">
        <div class="login-logo">
            <b><font color="000000"><br></b>
        </div>
        <div class="login-box-body">
            <center><b><font color="191970">Form Login Enseval</b></center>
            <p class="login-box-msg" class="uppercase"><?php echo $info; ?></p>
            <form action="<?php echo base_url(); ?>login/proseslog" id="form-login" method="post" accept-charset="utf-8">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="nama_user" id="nama_user" placeholder="ID Pengguna" required/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" value="" name="pass_user" id="pass_user" placeholder="Password" required/>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <input type="submit" name="login" value="Login" id="submit-login" class="btn btn-primary btn-block btn-flat" />
                    </div> 
                </div>
            </form>
        </div>
    </div>
</body>

<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>   
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