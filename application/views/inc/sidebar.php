<section class="sidebar">
    <div class="user-panel">
        <div class="pull-left image">
        </div>
        <div class="pull-left info">
            <center><p><?php echo $nama; ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a></center>
        </div>
    </div>
    <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <li>
            <a href="<?php echo base_url(); ?>Home">
                <i class="fa fa-home"></i> <span>Home</span>  </a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>Cabang/InputCabang">
                <i class="fa fa-user-plus"></i> <span>Input Data Cabang</span> 
            </a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>Survei/Pertanyaan">
                <i class="fa fa-question-circle"></i> <span>Pertanyaan Survei</span> 
            </a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>Cabang/reset_password">
                <i class="fa fa-key"></i> <span>Ubah Password</span> 
            </a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>Data">
                <i class="fa fa-database"></i> <span>Data Hasil Survei</span> 
            </a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>Outlet/ListDataOutlet">
                <i class="fa fa-users"></i> <span>List Data Outlet</span> 
            </a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>Cabang/ListDataCabang">
                <i class="fa fa-user"></i> <span>List Data Cabang</span> 
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