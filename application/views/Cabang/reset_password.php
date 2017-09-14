<html>
    <head>
        <link href="<?php echo base_url(); ?>assets/dist/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <?php $this->load->view('inc/head'); ?>
    </head>
    <body class="skin-green">
        <div class="wrapper">
            <?php
            if ($this->session->userdata('level') == '2') {
                $this->load->view('inc/head2User');
            } else if ($this->session->userdata('level') == '1') {
                $this->load->view('inc/head2');
            }
            ?>
            <aside class="main-sidebar">
                <?php
                if ($this->session->userdata('level') == '2') {
                    $this->load->view('inc/sidebarCabang');
                } else if ($this->session->userdata('level') == '1') {
                    $this->load->view('inc/sidebar');
                }
                ?>
            </aside>
            <div class="content-wrapper">
                <section class="content-header">

                </section>
                <section class="col-lg-6">
                    <div class="box">
                        <div class="box-header">
                            <span id="pesan-flash"><?php echo $this->session->flashdata('sukses'); ?></span>
                            <span id="pesan-error-flash"><?php echo $this->session->flashdata('alert'); ?></span>

                            <center>
                                <i class="fa fa-key"></i>
                                <h3 class="box-title">Form Ubah Password</h3></center>
                        </div>
                        <div class="box-body chat" id="chat-box">
                            <!-- chat item -->
                            <div class="item">
                                <form action="<?php echo base_url(); ?>login/Updatepassword" method="post">
                                    <div class="form-group"> 
                                        <input type="hidden" class="form-control" value="<?php echo $id_user ?>" id="" name="id_user" >                        
                                        <div class="form-group">
                                            <label for="">Password Baru </label>
                                            <input type="password" class="form-control" value="" id="pass_user" name="pass_user" placeholder="Masukan Password Baru" required>                        
                                        </div>
                                        <div class="form-group">
                                            <label for="">Password Baru (Lagi) </label>
                                            <input type="password" class="form-control" value="" id="pass_user1" name="pass_user1" placeholder="Konfirmasi Password Baru" required>                        
                                        </div> 
                                    </div>
                                    <div class>
                                        <button type="submit" class="btn btn-primary btn-block btn-flat">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <?php $this->load->view('inc/footer'); ?>
        <script src="<?php echo base_url(); ?>assets/dist/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/dist/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    </body>
    <script type="text/javascript">
        window.onload = function () {
            document.getElementById("pass_user").onchange = validatePassword;
            document.getElementById("pass_user1").onchange = validatePassword;
        }
        function validatePassword() {
            var pass2 = document.getElementById("pass_user1").value;
            var pass1 = document.getElementById("pass_user").value;
            if (pass1 != pass2)
                document.getElementById("pass_user1").setCustomValidity("Passwords Tidak Sama, Coba Lagi !!");
            else
                document.getElementById("pass_user1").setCustomValidity('');
        }
        $(function () {
            $('#pesan-flash').delay(2000).fadeOut();
            $('#pesan-error-flash').delay(4000).fadeOut();
        });
    </script>
</html>