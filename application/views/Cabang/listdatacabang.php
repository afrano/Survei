<!DOCTYPE html>
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
                <section class="content-header">
                    <h1>
                        <b>LIST DATA OUTLET</b>
                    </h1>
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-title">
                                    <span id="pesan-flash"><?php echo $this->session->flashdata('sukses'); ?></span>
                                    <span id="pesan-error-flash"><?php echo $this->session->flashdata('alert'); ?></span>
                                </div>
                                <div class="box-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <center><h4><b>Tabel Kepuasan</b></h4></center>
                                        <tr>
                                            <th>NO</th>
                                            <th>ID Cabang</th>
                                            <th>Regional</th>
                                            <th>Alamat</th>
                                            <th>Telpon</th>
                                            <th>AKSI</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 0;
                                            foreach ($data_cabang as $row) {
                                                if($row['alamat_cabang']== NULL){
                                                    $alamatcabang = '--';
                                                }else{
                                                    $alamatcabang = $row['alamat_cabang'];
                                                }
                                                if($row['telpon_cabang']== NULL){
                                                    $telponcabang = '--';
                                                }else{
                                                    $telponcabang = $row['telpon_cabang'];
                                                }
                                                $no++
                                                ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>    
                                                    <td><?php echo $row['id_cabang']; ?></td>
                                                    <td><?php echo $row['regional']; ?></td>
                                                    <td><?php echo $alamatcabang; ?></td>
                                                    <td><?php echo $telponcabang; ?></td>
                                                    <td>
                                                        <a class="btn btn-warning btn-sm" href="<?php echo base_url(); ?>Cabang/Edit/<?php echo $row['id_cabang']; ?>"><i class="fa fa-pencil"></i></a>
                                                        <a onclick="return confirm('Hapus data??');" class="btn btn-danger btn-sm" href="<?php echo base_url(); ?>Cabang/Hapus/<?php echo $row['id_cabang']; ?>"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <footer class="main-footer">
                <strong>Copyright &copy; 2017 <a href="#"></a></strong>
            </footer>
        </div>
        <?php $this->load->view('inc/footer'); ?>
        <script src="<?php echo base_url(); ?>assets/dist/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/dist/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <script type="text/javascript">
                                                        $(function () {
                                                            $("#example1").dataTable();
                                                            $('#example2').dataTable({
                                                                "bPaginate": true,
                                                                "bLengthChange": false,
                                                                "bFilter": true,
                                                                "bSort": true,
                                                                "bInfo": true,
                                                                "bAutoWidth": false


                                                            });
                                                        });
                                                        //waktu flash data 
                                                        $(function () {
                                                            $('#pesan-flash').delay(4000).fadeOut();
                                                            $('#pesan-error-flash').delay(5000).fadeOut();
                                                        });
        </script>
    </body>
</html>