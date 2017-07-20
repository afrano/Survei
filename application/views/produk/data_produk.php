<!DOCTYPE html>
<html>
    <head>
        <link href="<?php echo base_url(); ?>assets/dist/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <?php $this->load->view('inc/head'); ?>
    </head>
    <body class="skin-blue">
        <div class="wrapper">
            <?php $this->load->view('inc/head2'); ?>
            <aside class="main-sidebar">
                <?php $this->load->view('inc/sidebar'); ?>
            </aside>
            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        <b>DATA PRODUK</b>
                    </h1>
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <a style="margin-bottom:3px" href="<?php echo base_url(); ?>produk/addproduk" class="btn btn-primary no-radius dropdown-toggle"><i class="fa fa-plus"></i> TAMBAH PRODUK </a>
                            <div class="box">
                                <span id="pesan-flash"><?php echo $this->session->flashdata('sukses'); ?></span>
                                <span id="pesan-error-flash"><?php echo $this->session->flashdata('alert'); ?></span>
                                <div class="box-title">
                                </div>
                                <div class="box-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>JUDUL</th>
                                                <th>HARGA</th>
                                                <th>JUMLAH</th>
                                                <th>KONDISI</th>
                                                <th>MERK</th>
                                                <th>KATEGORI</th>
                                                <th>TGL</th>
                                                <th>STATUS</th>
                                                <th>COUNTER</th>
                                                <th>KET</th>
                                                <th>FOTO</th>
                                                <th>AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 0;
                                            foreach ($data_produk as $row) {
                                                $no++
                                                ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $row['judul']; ?></td>
                                                    <td><?php echo currency_format($row['harga']); ?></td>
                                                    <td><?php echo $row['jumlah']; ?></td>
                                                    <td><?php echo $row['kondisi']; ?></td>
                                                    <td><?php echo $row['merk']; ?></td>
                                                    <td><?php echo $row['kategori']; ?></td>
                                                    <td><?php echo $row['tgl_input_pro']; ?></td>
                                                    <td>
                                                        <?php if ($row['status'] == "publish") {
                                                            echo '<span class="label label-success">Publish</span>';
                                                            ?>
    <?php } else { ?> 
                                                            <span class="label label-danger">Draft</span>
    <?php } ?>
                                                    </td>
                                                    <td><span style="font-size:14px" class="label label-warning"><?php echo $row['counter']; ?></span></td>
                                                    <td><?php echo $row['ket']; ?></td>
                                                    <td>
                                                        <img style="width:80px;height:80px" src="<?php echo base_url(); ?>assets/upload/<?php echo $row['foto']; ?>" class="img-circl" alt="User Image" />
                                                    </td>

                                                    <td>
                                                        <a class="btn btn-warning btn-sm" href="<?php echo base_url(); ?>produk/editproduk/<?php echo $row['id_produk']; ?>"><i class="fa fa-pencil"></i></a>
                                                        <a onclick="return confirm('Hapus data??');" class="btn btn-danger btn-sm" href="<?php echo base_url(); ?>produk/hapuspro/<?php echo $row['id_produk']; ?>"><i class="fa fa-trash"></i></a>
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
                                                            $(function () {
                                                                $('#pesan-flash').delay(4000).fadeOut();
                                                                $('#pesan-error-flash').delay(5000).fadeOut();
                                                            });
        </script>
    </body>
</html>