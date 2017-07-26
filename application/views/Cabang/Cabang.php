<html>
    <head>
        <link href="<?php echo base_url(); ?>assets/dist/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <?php $this->load->view('inc/head'); ?>
    </head>
    <body class="skin-green">
        <div class="wrapper">
            <?php $this->load->view('inc/head2User'); ?>
            <aside class="main-sidebar">
                <?php $this->load->view('inc/sidebarCabang'); ?>
            </aside>
            <div class="content-wrapper">
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
                                        <center><h4><b>Tabel Survei Outlet</b></h4></center>
                                        <tr>
                                            <th>NO</th>
                                            <th>Nama Sales</th>
                                            <th>Outlet</th>
                                            <th>Alamat</th>
                                            <th>Telpon</th>
                                            <th>Channel</th>
                                            <th>AKSI</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 0;
                                            foreach ($data_outlet as $row) {
                                                $no++
                                                ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>    
                                                    <td><?php echo $row['nama_sales']; ?></td>
                                                    <td><?php echo $row['nama_outlet']; ?></td>
                                                    <td><?php echo $row['alamat']; ?></td>
                                                    <td><?php echo $row['Telpon']; ?></td>
                                                    <td><?php echo $row['channel']; ?></td>
                                                    <td>
                                                        <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>Data/Edit/<?php echo $row['id_hasil']; ?>"><i class="fa fa-send"></i></a>
                                                        <a onclick="return confirm('Hapus data survei??');" class="btn btn-danger btn-sm" href="<?php echo base_url(); ?>Data/Hapus/<?php echo $row['id_hasil']; ?>"><i class="fa fa-trash"></i></a>
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