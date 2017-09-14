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
                <center><a href="<?php echo base_url(); ?>login/lupapassword"><font color="black">Lupa Password</font></a></center>
                <div class="row">
                    <div class="col-xs-4">
                        <input type="submit" name="login" value="Login" id="submit-login" class="btn btn-primary btn-block btn-flat" />
                    </div> 
                </div>
            </form>
        </div>
    </div>
</body>

<?php $this->load->view('inc/login'); ?>
<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>   
</html>