<header class="site-header">	
    <nav class="navbar navbar-default">		
        <div class="container">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <i class="fa fa-bars"></i>
            </button>
            <a href="index.php" class="navbar-brand">
                <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="" width="100" high="100" alt="Post">
            </a>
            <div class="collapse navbar-collapse" id="bs-navbar-collapse">
                <ul class="nav navbar-nav main-navbar-nav">
                    <li class="active"><a href="index.php" title=""><b>HOME</b></a></li>
                    <li><a href="#" title=""><b>About Us</b></a></li>
                    <li><?php echo anchor('login', '<b>Login</b>') ?></li>
                </ul>   					
            </div>
        </div>			
    </nav> 
</header>
<style>
    /* Base */

    * {outline:none;}
    html, body {height: 100%;}
    body {font-family: 'Open Sans', sans-serif;font-size: 13px;line-height: 1.6;color: #8c8c8c;background-color: #008000;}
    h1, h2, h3, h4, h5, h6 {font-family: 'Open Sans', sans-serif;}
    a {color: #32CD32;}
    a:hover {color: #32CD32;transition-property: all;transition-duration: 0.3s;transition-timing-function: linear;}
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
    .navbar-default {-moz-transition: all 0.3s ease-out;-o-transition: all 0.3s ease-out;-webkit-transition: all 0.3s ease-out;transition: all 0.3s ease-out;width: 100%;border: none;border-bottom: 1px solid #e7e7e7;background-color: #98FB98 ;} /*Menu Warna*/
    .navbar-default .navbar-nav > li > a {color: #404040;font-weight: normal;font-size: 15px;} /*Tulisan*/
    .navbar-default .navbar-nav > li > a:hover {background-color: #32CD32;color: #FFFFFF;} /*Warna Pada pilihan*/
    .navbar-default .navbar-nav > .open > a,.navbar-default .navbar-nav > .open > a:hover,.navbar-default .navbar-nav > .open > a:focus {background-color: transparent;color: #005FA6;}
    .navbar-default .navbar-nav .active > a,.navbar-default .navbar-nav .active > a:hover,.navbar-default .navbar-nav .active > a:focus {color: #32CD32;background-color: transparent;}
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

    @media screen and (max-width: 992px) {.navbar-toggle {display: block;}.navbar-collapse.collapse {display: none !important;}.main-navbar-nav.navbar-nav,.main-navbar-nav.navbar-nav > li {float: none !important;}.navbar-collapse.collapse.in {display: block !important;overflow-y: auto !important;}}

    /* Background */
    .hero_area {background-image: url(http://www.enseval.com/wp-content/uploads/2014/03/feature-image-IT-21.jpg);background-position: center center;background-repeat: no-repeat;background-size: cover;height: 570px;padding: 0;}
    .hero_content {padding: 120px 0;}
    .hero_content h1 {text-shadow: 1px 1px 2px rgba(0,0,0,0.75);color: #000000;font-weight: 700;font-size: 60px;}
    .hero_content h2 {text-shadow: 1px 1px 2px rgba(0,0,0,0.25);color: #000000;font-weight: 700;font-size: 32px; margin-top: 0;width: 45%;line-height: 38px;}

    /* Home 
    .home_content h2:after,.box h3:after {content: '';position: absolute;width: 30px;background-color: #32CD32;height: 2px;left: 0;bottom: 0;}
    .box i {position: absolute;right: 0;top: 0;margin: 0;color: #32CD32;font-size: 45px;}
    .boxes_area h3 {font-size: 16px;font-weight: 500;margin-top: 0;margin-bottom: 18px;} */
    /* Footer */
    #copyright {background: #008000;color: #ccc;padding: 0px 0;font-size: 12px;margin-top: 20px;}
    #copyright p, #copyright ul {margin: 0;float: left;font-size: 12px;}
    #copyright a {color: #fff;font-size: 22px;}

</style>