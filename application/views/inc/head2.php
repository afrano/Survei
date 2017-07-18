<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url(); ?>dashboard" class="logo"><b><?php echo $nama; ?></b></a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Selamat Datang <span class="hidden-xs"><?php echo $nama; ?></span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>