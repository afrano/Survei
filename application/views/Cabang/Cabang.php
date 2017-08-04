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

                                </div>

                                <div class="box-body">
                                    <span id="pesan-flash"><?php echo $this->session->flashdata('sukses'); ?></span>
                                    <span id="pesan-error-flash"><?php echo $this->session->flashdata('alert'); ?></span>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <center><div class="alert-warning"><h4><b> <br>Data Belum Terverifikasi</b></h4> <br> </div> </center><br>
                                        <tr>
                                            <th>NO</th>
                                            <th>Nama Outlet</th>
                                            <th>Alamat</th>
                                            <th>Telpon</th>
                                            <th>Channel</th>                                            
                                            <th>Nama Sales</th>
                                            <th>AKSI</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 0;
                                            foreach ($belum_terverifikasi as $row) {
                                                $no++
                                                ?>
                                                <tr>
                                                    <td><font color="red"><?php echo $no; ?></td>    
                                                    <td><font color="red"><?php echo $row['nama_outlet']; ?></td>
                                                    <td><font color="red"><?php echo $row['alamat']; ?></td>
                                                    <td><font color="red"><?php echo $row['Telpon']; ?></td>
                                                    <td><font color="red"><?php echo $row['channel']; ?></td>                                                    
                                                    <td><font color="red"><?php echo $row['nama_sales']; ?></font></td>
                                                    <td>
                                                        <a class="btn btn-warning btn-sm" href="<?php echo base_url(); ?>Data/Detail/<?php echo $row['id_hasil']; ?>"><i class="fa fa-eye"></i></a>
                                                        <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>Cabang/Verifikasi/<?php echo $row['id_hasil']; ?>"><i class="fa fa-send"></i></a>
                                                        <a onclick="return confirm('Hapus data survei??');" class="btn btn-danger btn-sm" href="<?php echo base_url(); ?>Cabang/Hapus/<?php echo $row['id_hasil']; ?>"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            <?php }?>
                                        </tbody>
                                    </table> <table id="example2" class="table table-bordered table-striped">
                                        <thead>
                                        <center><div class="alert-info"><br><h4><b>Data Telah Terverifikasi</b></h4><br></div></center><br>
                                        <tr>
                                            <th>NO</th>
                                            <th>Nama Outlet</th>
                                            <th>Channel</th>
                                            <th>Telpon</th>
                                            <th>Komentar</th>
                                            <th>Nama Sales</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 0;
                                            foreach ($data_terverifikasi as $row1) {
                                                $no++
                                                ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>    
                                                    <td><?php echo $row1['nama_outlet']; ?></td>
                                                    <td><?php echo $row1['channel']; ?></td>
                                                    <td><?php echo $row1['Telpon']; ?></td>
                                                    <td><?php echo $row1['komentar']; ?></td>                                                    
                                                    <td><?php echo $row1['nama_sales']; ?></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <br>
                                    <div class>
                                    </div>  <br>
                                    <form  role="form" action="<?php echo base_url(); ?>Data/export_excel" method="POST" enctype="multipart/form-data">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <div class="col-lg-6">
                                                <div class="col-lg-6">
                                                    <div class="form-group">                                                    
                                                        <select name="semester" class="form-control" required="">
                                                            <option value="">Pilih Periode</option>
                                                            <option value="all">All</option>
                                                            <option  value="S1">S1</option>
                                                            <option value="S2">S2</option>
                                                        </select> 
                                                    </div>
                                                    <div class>
                                                        <button type="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-download"></i>&nbsp;  Export to Excel</button>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <p> <input type="number" min="2015" class="form-control" value="" id="" name="tahun" placeholder="Pilih Tahun Survei" required="">          </p>               
                                                    </div>
                                                </div>
                                            </div>
                                        </table>
                                    </form>
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