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
                                        <div class="box-body chat" id="chat-box">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Tahun Survei</label>
                                                    <input type="number"  class="form-control" value="" id="" name="tahun_survei" placeholder="YYYY" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Cabang</label> 
                                                    <select name="cabang_outlet" class="form-control" required="">
                                                        <option value="">Pilih Cabang</option>
                                                        <option value="BAC">Banda Aceh</option>
                                                        <option value="BD2">Bandung 2</option>
                                                        <option value="BDG">Bandung</option>
                                                        <option value="BDL">Bandar Lampung</option>
                                                        <option value="BGR">Bogor</option>
                                                        <option value="BKL">Bengkulu</option>
                                                        <option value="BKS">Bekasi</option>
                                                        <option value="BMS">Banjarmasin</option>
                                                        <option value="BPP">BalikPapan</option>
                                                        <option value="BTM">Batam</option>
                                                        <option value="CRB">Cirebon</option>
                                                        <option value="DPS">Denpasar</option>
                                                        <option value="JBI">Jambi</option>
                                                        <option value="JBR">Jember</option>
                                                        <option value="JK1">Jakarta 1</option>
                                                        <option value="JK2">Jakarta 2</option>
                                                        <option value="JK3">Jakarta 3</option>
                                                        <option value="JPU">Jayapura</option>
                                                        <option value="KDR">Kediri</option>
                                                        <option value="KDS">Kudus</option>
                                                        <option value="KPG">Kupang</option>
                                                        <option value="LSE">Lhokseumawe</option>  
                                                        <option value="MDN">Medan</option>
                                                        <option value="MKS">Makasar</option>
                                                        <option value="MLG">Malang</option>
                                                        <option value="MNO">Manado</option>
                                                        <option value="MTR">Mataram</option>
                                                        <option value="PDG">Padang</option>
                                                        <option value="PJT">Pejaten</option>
                                                        <option value="PKB">Pekanbaru</option>
                                                        <option value="PKP">Pangkalpinang</option>
                                                        <option value="PLB">Palembang</option>
                                                        <option value="PLU">Palu</option>
                                                        <option value="PMS">Pematangsiantar</option>
                                                        <option value="PTK">Pontianak</option>
                                                        <option value="PWK">Purwokerto</option>
                                                        <option value="SB1">Surabaya 1</option>
                                                        <option value="SB2">Surabaya 2</option>
                                                        <option value="SKI">Sukabumi</option>  
                                                        <option value="SLO">Solo</option>
                                                        <option value="SMD">Samarinda</option>
                                                        <option value="SMG">Semarang</option>
                                                        <option value="TGL">Tegal</option>
                                                        <option value="TGR">Tangerang</option>
                                                        <option value="TSK">Tasikmalaya</option>
                                                        <option value="YOG">Yogyakarta</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Channel</label>
                                                    <select name="channel" class="form-control" required="">
                                                        <option value="">Pilih Channel</option>
                                                        <option value="Apotek">Apotek</option>
                                                        <option value="Rumah Sakit">Rumah Sakit</option>
                                                        <option value="Subdis">Subdis</option>
                                                        <option value="other">Other</option>
                                                    </select> 
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Periode Kuesioner</label>
                                                    <select name="semester" class="form-control" required="">
                                                        <option value="S1">S1</option>
                                                        <option value="S2">S2</option>
                                                    </select> 
                                                </div>
                                            </div>
                                        </div>
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
                                                        <td>Pertanyaan 1</td>
                                                        <td>1</td>
                                                        <td>3</td>
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
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>+Poin 2 - Poin 1</td>
                                                <td>Rank dari Diff</td>
                                                <td>Ketepatan waktu kunjungan salesman mengambil order</td>
                                                <td>2</td>
                                            </tr>
                                            <tr>
                                                <td>+Poin 2 - Poin 1</td>
                                                <td>Rank dari Diff</td>
                                                <td>Ketepatan waktu kunjungan salesman mengambil order</td>
                                                <td>2</td>
                                            </tr><tr>
                                                <td>+Poin 2 - Poin 1</td>
                                                <td>Rank dari Diff</td>
                                                <td>Ketepatan waktu kunjungan salesman mengambil order</td>
                                                <td>2</td>
                                            </tr><tr>
                                                <td>+Poin 2 - Poin 1</td>
                                                <td>Rank dari Diff</td>
                                                <td>Ketepatan waktu kunjungan salesman mengambil order</td>
                                                <td>2</td>
                                            </tr><tr>
                                                <td>+Poin 2 - Poin 1</td>
                                                <td>Rank dari Diff</td>
                                                <td>Ketepatan waktu kunjungan salesman mengambil order</td>
                                                <td>2</td>
                                            </tr><tr>
                                                <td>+Poin 2 - Poin 1</td>
                                                <td>Rank dari Diff</td>
                                                <td>Ketepatan waktu kunjungan salesman mengambil order</td>
                                                <td>2</td>
                                            </tr><tr>
                                                <td>+Poin 2 - Poin 1</td>
                                                <td>Rank dari Diff</td>
                                                <td>Ketepatan waktu kunjungan salesman mengambil order</td>
                                                <td>2</td>
                                            </tr><tr>
                                                <td>+Poin 2 - Poin 1</td>
                                                <td>Rank dari Diff</td>
                                                <td>Ketepatan waktu kunjungan salesman mengambil order</td>
                                                <td>2</td>
                                            </tr><tr>
                                                <td>+Poin 2 - Poin 1</td>
                                                <td>Rank dari Diff</td>
                                                <td>Ketepatan waktu kunjungan salesman mengambil order</td>
                                                <td>2</td>
                                            </tr><tr>
                                                <td>+Poin 2 - Poin 1</td>
                                                <td>Rank dari Diff</td>
                                                <td>Ketepatan waktu kunjungan salesman mengambil order</td>
                                                <td>2</td>
                                            </tr>
                                        </tbody>
                                    </table><br>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Rank Kepuasan</th>
                                                <th>Rank Kepentingan</th>
                                                <th>Kepuasan/Cat</th>
                                                <th>Kepentingan/Cat</th>
                                                <th>Kategori</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Nilai tertinggi dari kepuasan</td>
                                                <td>Nilai tertinggi dari Kepentingan</td>
                                                <td>5</td>
                                                <td>3</td>
                                                <td>Pemesanan Barang</td>
                                            </tr>
                                            <tr>
                                                <td>Nilai tertinggi dari kepuasan</td>
                                                <td>Nilai tertinggi dari Kepentingan</td>
                                                <td>5</td>
                                                <td>3</td>
                                                <td>Pemesanan Barang</td>
                                            </tr><tr>
                                                <td>Nilai tertinggi dari kepuasan</td>
                                                <td>Nilai tertinggi dari Kepentingan</td>
                                                <td>5</td>
                                                <td>3</td>
                                                <td>Pemesanan Barang</td>
                                            </tr><tr>
                                                <td>Nilai tertinggi dari kepuasan</td>
                                                <td>Nilai tertinggi dari Kepentingan</td>
                                                <td>5</td>
                                                <td>3</td>
                                                <td>Pemesanan Barang</td>
                                            </tr><tr>
                                                <td>Nilai tertinggi dari kepuasan</td>
                                                <td>Nilai tertinggi dari Kepentingan</td>
                                                <td>5</td>
                                                <td>3</td>
                                                <td>Pemesanan Barang</td>
                                            </tr><tr>
                                                <td>Nilai tertinggi dari kepuasan</td>
                                                <td>Nilai tertinggi dari Kepentingan</td>
                                                <td>5</td>
                                                <td>3</td>
                                                <td>Pemesanan Barang</td>
                                            </tr><tr>
                                                <td>Nilai tertinggi dari kepuasan</td>
                                                <td>Nilai tertinggi dari Kepentingan</td>
                                                <td>5</td>
                                                <td>3</td>
                                                <td>Pemesanan Barang</td>
                                            </tr><tr>
                                                <td>Nilai tertinggi dari kepuasan</td>
                                                <td>Nilai tertinggi dari Kepentingan</td>
                                                <td>5</td>
                                                <td>3</td>
                                                <td>Pemesanan Barang</td>
                                            </tr><tr>
                                                <td>Nilai tertinggi dari kepuasan</td>
                                                <td>Nilai tertinggi dari Kepentingan</td>
                                                <td>5</td>
                                                <td>3</td>
                                                <td>Pemesanan Barang</td>
                                            </tr><tr>
                                                <td>Nilai tertinggi dari kepuasan</td>
                                                <td>Nilai tertinggi dari Kepentingan</td>
                                                <td>5</td>
                                                <td>3</td>
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