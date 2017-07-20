<section class="sidebar">
    <div class="user-panel">
        <div class="pull-left image">
            <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
        </div>
        <div class="pull-left info">
            <p><?php echo $nama; ?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <li>
            <a href="<?php echo base_url(); ?>dashboard">
                <i class="fa fa-home"></i> <span>Home</span>  </a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>Rekap">
                <i class="fa fa-tag"></i> <span>Hasil Survei</span> 
            </a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>kategori">
                <i class="fa fa-user-secret"></i> <span>Rank</span> 
            </a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>Data">
                <i class="fa fa-windows"></i> <span>Data Hasil Survei</span> 
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

        <li class="header">
            <b><center>Login sebagai <?php echo $nama ?> <br>
                    Last Login <br> <?php
                    $tanggal = mktime(date('m'), date("d"), date('Y'));
                    echo "Tanggal : <b> " . date("d-m-Y", $tanggal) . "</b>";
                    date_default_timezone_set("Asia/Jakarta");
                    $jam = date("H:i:s");
                    echo " <br> Pukul : <b> " . $jam . " " . " </b> ";
                    $a = date("H");
                    ?></center></li></b>
    </ul>
</section>