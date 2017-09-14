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
                        <b>DATA MOM</b>
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
                                        <center><div class="alert-info"><br><h4><b>List MOM</b></h4><br></div></center><br>
                                        <tr>
                                            <th>NO</th>
                                            <th>Cabang</th>
                                            <th>Tahun</th>
                                            <th>Bulan</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 0;
                                            foreach ($data_survei as $row) {
                                                $no++
                                                ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>    
                                                    <td><?php echo $row['nama_outlet']; ?></td>
                                                    <td><?php echo $row['tahun']; ?></td>
                                                    <td><?php echo $row['semester']; ?></td>
                                                    <td>
                                                        <a class="btn btn-warning btn-sm" href="<?php echo base_url(); ?>Data/Detail/<?php echo $row['id_hasil']; ?>"><i class="fa fa-eye"></i></a>
                                                        <a onclick="return confirm('Hapus data??');" class="btn btn-danger btn-sm" href="<?php echo base_url(); ?>Data/Hapus/<?php echo $row['id_hasil']; ?>"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <form  role="form" action="<?php echo base_url(); ?>Data/export_excel" method="POST" enctype="multipart/form-data">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <div class="col-lg-6">
                                                <div class="col-lg-6">
                                                    <div class="form-group">                                                    
                                                        <select name="semester" class="form-control" required="">
                                                            <option value="">Pilih Periode</option>
                                                            <option value="all">All</option>
                                                            <option value="S1">S1</option>
                                                            <option value="S2">S2</option>
                                                        </select> 
                                                    </div>
                                                    <div class>
                                                        <button type="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-download"></i>&nbsp;  Export to Excel</button>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="number" min="2015" class="form-control" value="" id="" name="tahun" placeholder="Pilih Tahun Survei" required="">                        
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