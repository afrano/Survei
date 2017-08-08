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

                <section class="content-header">
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-6">
                            <div class="box">
                                <div class="box-header">
                                    <span id="pesan-flash"><?php echo $this->session->flashdata('sukses'); ?></span>
                                    <span id="pesan-error-flash"><?php echo $this->session->flashdata('alert'); ?></span>

                                    <i class="fa fa-plus"></i>
                                    <h3 class="box-title">FORM TAMBAH SALES</h3>
                                </div>
                                <div class="box-body chat" id="chat-box">
                                    <!-- chat item -->
                                    <div class="item">
                                        <form action="<?php echo base_url(); ?>Cabang/SaveSales" method="post">
                                            <div class="form-group">
                                                <label for="namalengkap">Nama Sales</label>
                                                <input type="text" class="form-control" value="" id="" name="nama_sales" placeholder="Isikan nama sales" required="">
                                                <label for="namalengkap">ID Sales</label>
                                                <input type="text" class="form-control" value="" id="" name="id_sales" placeholder="Isikan ID sales" required="">
                                                <input type="hidden" class="form-control" value="<?php echo $id_user; ?>" name="id_cabang">

                                            </div>
                                            <div class>
                                                <button type="submit" class="btn btn-primary btn-block btn-flat">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="col-lg-5 connectedSortable">
                        </section>
                    </div>
                     <center><div class="alert-warning"><h4><b> <br>LIST DATA SALES</b></h4> <br> </div> </center><br>
                                       
                </section>
                <section class="content">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-md-12">

                            <div class="box">
                                <div class="box-title">
                                </div>
                                <div class="box-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>ID Sales</th>
                                                <th>Nama Sales</th>
                                                <th>AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 0;
                                            foreach ($listSales as $row) {
                                                $no++
                                                ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $row['id_sales']; ?></td>
                                                    <td><?php echo $row['nama_sales']; ?></td>
                                                    <td>
                                                       <a onclick="return confirm('Hapus Sales ??');" class="btn btn-danger btn-sm" href="<?php echo base_url(); ?>Cabang/HapusSales/<?php echo $row['id_sales']; ?>"><i class="fa fa-trash"></i></a>
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
                <div class="pull-right hidden-xs">
                </div>
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
                                                        //waktu flash data :v
                                                        $(function () {
                                                            $('#pesan-flash').delay(2000).fadeOut();
                                                            $('#pesan-error-flash').delay(4000).fadeOut();
                                                        });
        </script>
    </body>
</html>