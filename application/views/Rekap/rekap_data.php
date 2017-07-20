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
                        <b>Rekap Kepuasan Pelanggan</b>
                    </h1>
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-title">
                                </div>
                                <div class="box-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>TINGKAT KEPUASAN (PERFORMANCE)</th> </font>
                                        </thead>
                                        <tr><td>
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <tr>
                                                        <td><b>NO</b></td>
                                                        <td><b>1</b></td>
                                                        <td><b>2</b></td>
                                                        <td><b>3</b></td>
                                                        <td><b>4</b></td>
                                                        <td><b>NILAI</b></td>
                                                        <td><b>POIN</b></td>
                                                    </tr>
                                                    <tr>
                                                        <?php foreach ($rekap_data as $row) { ?>
                                                            <td>Pertanyaan 1</td>
                                                            <td><?php echo $row['jumlah']; ?></td>
                                                            <td>3</td>
                                                            <td>3</td>
                                                            <td>4</td>
                                                            <td>Nilainya</td>
                                                            <td>POIN</td>
                                                        </tr><?php } ?>
                                                    <tr>
                                                        <td>Pertanyaan 2</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 3</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 4</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 5</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 6</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 7</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 8</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 9</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 10</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 11</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 12</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 13</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 14</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 15</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 16</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 17</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 18</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 19</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 20</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Average</td>
                                                        <td>1.20</td>
                                                        <td>2.10</td>
                                                        <td>20.10</td>
                                                        <td>70.30</td>
                                                        <td>Total Semua</td>
                                                        <td>Rata - Rata</td>
                                                    </tr>
                                                    <tr>
                                                        <td>'Ave Cust. yg respon :</td>
                                                        <td>578</td>
                                                    </tr>
                                                    <tr>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>TINGKAT KEPENTINGAN (IMPORTANCE)</th>
                                        </thead>
                                        <tr><td>
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <tr>
                                                        <td><b>NO</b></td>
                                                        <td><b>1</b></td>
                                                        <td><b>2</b></td>
                                                        <td><b>3</b></td>
                                                        <td><b>4</b></td>
                                                        <td><b>NILAI</b></td>
                                                        <td><b>POIN</b></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 1</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 2</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 3</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 4</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 5</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 6</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 7</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 8</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 9</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 10</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 11</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 12</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 13</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 14</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 15</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 16</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 17</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 18</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 19</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pertanyaan 20</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                        <td>Nilainya</td>
                                                        <td>POIN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Average</td>
                                                        <td>1.20</td>
                                                        <td>2.10</td>
                                                        <td>20.10</td>
                                                        <td>70.30</td>
                                                        <td>Total Semua</td>
                                                        <td>Rata - Rata</td>
                                                    </tr>
                                                    <tr>
                                                        <td>'Ave Cust. yg respon :</td>
                                                        <td>578</td>
                                                    </tr>
                                                    <tr>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Diff</th>
                                                <th>IMPROVEMENT PRIORITY</th>
                                                <th>ASPEK YANG DI SURVEY</th>
                                                <th>Priority per Kategoi</th>
                                                <th>Rank Kepuasan</th>
                                                <th>Rank Kepentingan</th>
                                                <th>Kepuasan/ Cat</th>
                                                <th>Kepentingan/ Cat</th>
                                                <th>Kategori</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>+Poin 2 - Poin 1</td>
                                                <td>Rank dari Diff</td>
                                                <td>Ketepatan waktu kunjungan salesman mengambil order</td>
                                                <td>2</td>
                                                <td>Nilai tertinggi dari kepuasan</td>
                                                <td>Nilai tertinggi dari Kepentingan</td>
                                                <td>5</td>
                                                <td></td>
                                                <td>Pemesanan Barang</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <section class="col-lg-5 connectedSortable">
                        </section>
                    </div>
                </section>
            </div>
        </div>
        <?php $this->load->view('inc/footer'); ?>
        <script src="<?php echo base_url(); ?>assets/dist/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/dist/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    </body>
</html>