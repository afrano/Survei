<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
        </div>
        <div class="pull-left info">
            <p><?php echo $nama; ?></p>

            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <li>
            <a href="<?php echo base_url(); ?>dashboard">
                <i class="fa fa-home"></i> <span>Home</span>  </a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>merk">
                <i class="fa fa-tag"></i> <span>Hasil Survei</span> 
            </a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>kategori">
                <i class="fa fa-diamond"></i> <span>Rank</span> 
            </a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>produk">
                <i class="fa fa-photo"></i> <span>Draft</span> 
            </a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>Survei">
                <i class="fa fa-circle-o"></i> <span>Form Survei</span> 
            </a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>login/logout">
                <i class="fa fa-sign-out"></i> <span>Keluar</span></a>
        </li>

        <li class="header"><b>
               <center>Login sebagai <?php echo $nama ?> </b><br>
        <b>Last Login <br> <?php echo date("Y-m-d h:i:sa") ?> </b></center></li>
    </ul>
</section>