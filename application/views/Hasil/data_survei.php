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
                        <b>DATA HASIL SURVEI</b>
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
                                        <center><div class="alert-info"><br><h4><b>Tabel Kepuasan</b></h4><br></div></center><br>
                                        <tr>
                                            <th>NO</th>
                                            <th>Nama_Outlet</th>
                                            <th>Tahun</th>
                                            <th>Periode</th>
                                            <th>Q1</th>
                                            <th>Q2</th>
                                            <th>Q3</th>
                                            <th>Q4</th>
                                            <th>Q5</th>
                                            <th>Q6</th>
                                            <th>Q7</th>
                                            <th>Q8</th>
                                            <th>Q9</th>
                                            <th>Q10</th>
                                            <th>Q11</th>
                                            <th>Q12</th>
                                            <th>Q13</th>
                                            <th>Q14</th>
                                            <th>Q15</th>
                                            <th>Q16</th>
                                            <th>Q17</th>
                                            <th>Q18</th>
                                            <th>Q19</th>
                                            <th>Q20</th>
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
                                                    <td><?php echo $row['Q01']; ?></td>
                                                    <td><?php echo $row['Q02']; ?></td>
                                                    <td><?php echo $row['Q03']; ?></td>
                                                    <td><?php echo $row['Q04']; ?></td>
                                                    <td><?php echo $row['Q05']; ?></td>
                                                    <td><?php echo $row['Q06']; ?></td>
                                                    <td><?php echo $row['Q07']; ?></td>
                                                    <td><?php echo $row['Q08']; ?></td>
                                                    <td><?php echo $row['Q09']; ?></td>
                                                    <td><?php echo $row['Q10']; ?></td>
                                                    <td><?php echo $row['Q11']; ?></td>
                                                    <td><?php echo $row['Q12']; ?></td>
                                                    <td><?php echo $row['Q13']; ?></td>
                                                    <td><?php echo $row['Q14']; ?></td>
                                                    <td><?php echo $row['Q15']; ?></td>
                                                    <td><?php echo $row['Q16']; ?></td>
                                                    <td><?php echo $row['Q17']; ?></td>
                                                    <td><?php echo $row['Q18']; ?></td>
                                                    <td><?php echo $row['Q19']; ?></td>
                                                    <td><?php echo $row['Q20']; ?></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <table id="example2" class="table table-bordered table-striped">
                                        <thead>
                                        <center><div class="alert-info"><br><h4><b>Tabel Kepentingan</b></h4><br></div></center><br>
                                        <tr>
                                            <th>NO</th>
                                            <th>Channel</th>
                                            <th>K1</th>
                                            <th>K2</th>
                                            <th>K3</th>
                                            <th>K4</th>
                                            <th>K5</th>
                                            <th>K6</th>
                                            <th>K7</th>
                                            <th>K8</th>
                                            <th>K9</th>
                                            <th>K10</th>
                                            <th>K11</th>
                                            <th>K12</th>
                                            <th>K13</th>
                                            <th>K14</th>
                                            <th>K15</th>
                                            <th>K16</th>
                                            <th>K17</th>
                                            <th>K18</th>
                                            <th>K19</th>
                                            <th>K20</th>
                                            <th>Aksi</th>
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
                                                    <td><?php echo $row['channel']; ?></td>
                                                    <td><?php echo $row['K01']; ?></td>
                                                    <td><?php echo $row['K02']; ?></td>
                                                    <td><?php echo $row['K03']; ?></td>
                                                    <td><?php echo $row['K04']; ?></td>
                                                    <td><?php echo $row['K05']; ?></td>
                                                    <td><?php echo $row['K06']; ?></td>
                                                    <td><?php echo $row['K07']; ?></td>
                                                    <td><?php echo $row['K08']; ?></td>
                                                    <td><?php echo $row['K09']; ?></td>
                                                    <td><?php echo $row['K10']; ?></td>
                                                    <td><?php echo $row['K11']; ?></td>
                                                    <td><?php echo $row['K12']; ?></td>
                                                    <td><?php echo $row['K13']; ?></td>
                                                    <td><?php echo $row['K14']; ?></td>
                                                    <td><?php echo $row['K15']; ?></td>
                                                    <td><?php echo $row['K16']; ?></td>
                                                    <td><?php echo $row['K17']; ?></td>
                                                    <td><?php echo $row['K18']; ?></td>
                                                    <td><?php echo $row['K19']; ?></td>
                                                    <td><?php echo $row['K20']; ?></td>
                                                    <td>
                                                        <a class="btn btn-warning btn-sm" href="<?php echo base_url(); ?>Data/Edit/<?php echo $row['id_hasil']; ?>"><i class="fa fa-pencil"></i></a>
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