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
                        <b>Form Input Survei Kepuasan Pelangan</b>
                    </h1>
                </section>
                <section class="content">
                    <form  role="form" action="<?php echo base_url(); ?>Data/Update" method="POST" enctype="multipart/form-data">
                        <div class="box">
                            <span id="pesan-flash"><?php echo $this->session->flashdata('sukses'); ?></span>
                            <span id="pesan-error-flash"><?php echo $this->session->flashdata('alert'); ?></span>
                            <div class="box-title">
                            </div>
                            <div class="box-header">
                                <i class="fa fa-plus"></i>
                                <h3 class="box-title">FORM INPUT DATA OUTLET</h3>
                            </div>
                            <div class="box-body chat" id="chat-box">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Tahun Survei</label>
                                        <input type="number"  class="form-control" value="" id="" name="tahun_survei" placeholder="YYYY" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Nama Outlet</label>
                                        <input type="text" class="form-control" value="" id="" name="nama_outlet" placeholder="Masukan Nama Outlet" required>                        
                                    </div>
                                    <div class="form-group">
                                        <label for="">Cabang</label> 
                                        <select name="cabang_outlet" class="form-control" required="">
                                            <option <?php echo $cabang_outlet; ?> ><?php echo $cabang_outlet; ?></option>
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
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Alamat </label>
                                        <input type="text" class="form-control" value="" id="" name="alamat_outlet" placeholder="Masukan Alamat Outlet" required>                        
                                    </div>
                                    <div class="form-group">
                                        <label for="">No Telpon</label>
                                        <input type="number" class="form-control" value="" id="" name="telpon_outlet" placeholder="Masukan No Telpon" required>                        
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
                                                        <th>Pertanyaan</th>
                                                        <th>Kepentingan</th>
                                                        <th>Kepuasan</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td><b>PEMESANAN BARANG MELALUI SALESMAN</b></td>
                                                        <td>   
                                                        </td>
                                                        <td>                                                                                               
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Ketepatan Waktu  kunjungan Salesman mengambil Order</td>
                                                        <td>
                                                            <div class="form-group" >
                                                                <input type="number" min="1" max="4" value="<?php echo $kepuasan1; ?>" name="kepuasan1">
                                                            </div>                                 
                                                        </td>
                                                        <td>
                                                            <div class="form-group" >
                                                                <input type="number" min="1" max="4" value="<?php echo $kepentingan1; ?>" name="kepentingan1">
                                                            </div>  
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Salesman Penampilan Rapih  </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="kepuasan2" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="kepuasan2" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="kepuasan2" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="kepuasan2" value="4"> 4 
                                                                <input type="radio" name="kepuasan2" value="<?php echo $Q02; ?>"  required="" hidden="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="kepentingan2" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="kepentingan2" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="kepentingan2" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="kepentingan2" value="4"> 4 
                                                                <input type="radio" name="kepentingan2" value="<?php echo $K03; ?>"  hidden="" required="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Pengetahuan Salesman mengenai Produk</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="kepuasan3" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="kepuasan3" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="kepuasan3" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="kepuasan3" value="4"> 4 
                                                                <input type="radio" name="kepuasan3" value="<?php echo $Q03; ?>"  required="" hidden="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="Kepentingan3" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="Kepentingan3" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="Kepentingan3" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="Kepentingan3" value="4"> 4 
                                                                <input type="radio" name="kepentingan3" value="<?php echo $K03; ?>"  hidden="" required="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Ketanggapan Salesman dalam membantu menyelesaikan Keluhan</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="kepuasan4" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="kepuasan4" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="kepuasan4" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="kepuasan4" value="4"> 4 
                                                                <input type="radio" name="kepuasan4" value="<?php echo $Q04; ?>"  required="" hidden="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="Kepentingan4" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="Kepentingan4" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="Kepentingan4" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="Kepentingan4" value="4"> 4 
                                                                <input type="radio" name="kepentingan4" value="<?php echo $K04; ?>"  hidden="" required="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td><b>PENANGANAN RETUR BARANG</b></td>
                                                        <td>   
                                                        </td>
                                                        <td>                                                                                               
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Kesediaan Salesman dalam membantu penyelesaian proses Retur barang</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="kepuasan5" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="kepuasan5" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="kepuasan5" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="kepuasan5" value="4"> 4 
                                                                <input type="radio" name="kepuasan5" value="" required="" hidden="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="Kepentingan5" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="Kepentingan5" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="Kepentingan5" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="Kepentingan5" value="4"> 4 
                                                                <input type="radio" name="kepentingan5" value="" hidden="" required="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>Kecepatan pelayanan Retur Barang ( Tidak lebih dari 7 hari)</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="kepuasan6" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="kepuasan6" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="kepuasan6" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="kepuasan6" value="4"> 4 
                                                                <input type="radio" name="kepuasan6" value="" required="" hidden="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="Kepentingan6" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="Kepentingan6" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="Kepentingan6" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="Kepentingan6" value="4"> 4 
                                                                <input type="radio" name="kepentingan6" value="" hidden="" required="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td><b>PENGIRIMAN BARANG</b></td>
                                                        <td>   
                                                        </td>
                                                        <td>                                                                                               
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>Penampilan Pengirim Barang</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="kepuasan7" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="kepuasan7" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="kepuasan7" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="kepuasan7" value="4"> 4 
                                                                <input type="radio" name="kepuasan7" value="" required="" hidden="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="Kepentingan7" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="Kepentingan7" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="Kepentingan7" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="Kepentingan7" value="4"> 4 
                                                                <input type="radio" name="kepentingan7" value="" hidden="" required="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>Kesesuaian antara pesanan dengan barang yang dikirim</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="kepuasan8" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="kepuasan8" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="kepuasan8" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="kepuasan8" value="4"> 4
                                                                <input type="radio" name="kepuasan8" value="" required="" hidden="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="Kepentingan8" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="Kepentingan8" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="Kepentingan8" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="Kepentingan8" value="4"> 4 
                                                                <input type="radio" name="kepentingan8" value="" hidden="" required="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>Kesesuaian Pengiriman Produk Suhu Khusus dengan CDOB</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="kepuasan9" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="kepuasan9" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="kepuasan9" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="kepuasan9" value="4"> 4 
                                                                <input type="radio" name="kepuasan9" value="" required="" hidden="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="Kepentingan9" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="Kepentingan9" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="Kepentingan9" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="Kepentingan9" value="4"> 4
                                                                <input type="radio" name="kepentingan9" value="" hidden="" required="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>Ketepatan waktu dalam pengiriman barang Sesuai dengan Janji</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="kepuasan10" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="kepuasan10" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="kepuasan10" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="kepuasan10" value="4"> 4 
                                                                <input type="radio" name="kepuasan10" value="" required="" hidden="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="Kepentingan10" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="Kepentingan10" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="Kepentingan10" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="Kepentingan10" value="4"> 4 
                                                                <input type="radio" name="kepentingan10" value="" hidden="" required="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>Kejelasan dokumen Pengiriman</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="kepuasan11" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="kepuasan11" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="kepuasan11" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="kepuasan11" value="4"> 4 
                                                                <input type="radio" name="kepuasan11" value="" required="" hidden="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="Kepentingan11" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="Kepentingan11" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="Kepentingan11" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="Kepentingan11" value="4"> 4 
                                                                <input type="radio" name="kepentingan11" value="" hidden="" required="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td><b>PENAGIHAN</b></td>
                                                        <td>   
                                                        </td>
                                                        <td>                                                                                               
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>Penampilan Penagih</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="kepuasan12" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="kepuasan12" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="kepuasan12" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="kepuasan12" value="4"> 4 
                                                                <input type="radio" name="kepuasan12" value="" required="" hidden="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="Kepentingan12" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="Kepentingan12" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="Kepentingan12" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="Kepentingan12" value="4"> 4 
                                                                <input type="radio" name="kepentingan12" value="" hidden="" required="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>13</td>
                                                        <td>Ketepatan waktu kunjungan Penagih</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="kepuasan13" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="kepuasan13" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="kepuasan13" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="kepuasan13" value="4"> 4 
                                                                <input type="radio" name="kepuasan13" value="" required="" hidden="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="Kepentingan13" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="Kepentingan13" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="Kepentingan13" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="Kepentingan13" value="4"> 4 
                                                                <input type="radio" name="kepentingan13" value="" hidden="" required="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>14</td>
                                                        <td>Kelengkapan dokumen Penagihan</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="kepuasan14" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="kepuasan14" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="kepuasan14" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="kepuasan14" value="4"> 4 
                                                                <input type="radio" name="kepuasan14" value="" required="" hidden="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="Kepentingan14" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="Kepentingan14" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="Kepentingan14" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="Kepentingan14" value="4"> 4 
                                                                <input type="radio" name="kepentingan14" value="" hidden="" required="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td><b>ENSEVAL CUSTOMER CARE ( ECC )</b></td>
                                                        <td>   
                                                        </td>
                                                        <td>                                                                                               
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>15</td>
                                                        <td>Kemudahan untuk menghubungi nomor Telepon Enseval Customer Care (ECC)</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="kepuasan15" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="kepuasan15" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="kepuasan15" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="kepuasan15" value="4"> 4 
                                                                <input type="radio" name="kepuasan15" value="" required="" hidden="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="Kepentingan15" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="Kepentingan15" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="Kepentingan15" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="Kepentingan15" value="4"> 4 
                                                                <input type="radio" name="kepentingan15" value="" hidden="" required="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>16</td>
                                                        <td>Kecepatan petugas  ECC dalam penerimaan Telepon (Tidak lebih dari 3 Kali dering)</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="kepuasan16" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="kepuasan16" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="kepuasan16" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="kepuasan16" value="4"> 4 
                                                                <input type="radio" name="kepuasan16" value="" required="" hidden="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="Kepentingan16" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="Kepentingan16" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="Kepentingan16" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="Kepentingan16" value="4"> 4 
                                                                <input type="radio" name="kepentingan16" value="" hidden="" required="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>17</td>
                                                        <td>Keramahan Petugas ECC pada saat terima Telepon </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="kepuasan17" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="kepuasan17" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="kepuasan17" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="kepuasan17" value="4"> 4 
                                                                <input type="radio" name="kepuasan17" value="" required="" hidden="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="Kepentingan17" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="Kepentingan17" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="Kepentingan17" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="Kepentingan17" value="4"> 4 
                                                                <input type="radio" name="kepentingan17" value="" hidden="" required="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>18</td>
                                                        <td>Pemahaman/Pengetahuan mengenal Produk oleh Petugas ECC</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="kepuasan18" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="kepuasan18" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="kepuasan18" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="kepuasan18" value="4"> 4 
                                                                <input type="radio" name="kepuasan18" value="" required="" hidden="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="Kepentingan18" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="Kepentingan18" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="Kepentingan18" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="Kepentingan18" value="4"> 4 
                                                                <input type="radio" name="kepentingan18" value="" hidden="" required="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>19</td>
                                                        <td>Ketanggapan Petugas ECC Menerima keluhan Pelanggan</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="kepuasan19" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="kepuasan19" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="kepuasan19" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="kepuasan19" value="4"> 4 
                                                                <input type="radio" name="kepuasan19" value="" required="" hidden="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="Kepentingan19" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="Kepentingan19" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="Kepentingan19" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="Kepentingan19" value="4"> 4 
                                                                <input type="radio" name="kepentingan19" value="" hidden="" required="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>20</td>
                                                        <td>Kecepatan Petugas ECC dalam memberi informasi dan memfollow up keluhan Pelanggan</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="kepuasan20" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="kepuasan20" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="kepuasan20" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="kepuasan20" value="4"> 4 
                                                                <input type="radio" name="kepuasan20" value="" required="" hidden="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="Kepentingan20" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="Kepentingan20" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="Kepentingan20" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="Kepentingan20" value="4"> 4 
                                                                <input type="radio" name="kepentingan20" value="" hidden="" required="">
                                                            </div>                                            
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td>                                               
                                                            <div class=""> <button type="reset" class="btn btn-warning btn-block btn-flat">Batal</button>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class>
                                                                <button type="submit" class="btn btn-primary btn-block btn-flat">Simpan</button>
                                                            </div>                                               
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
        <?php $this->load->view('inc/footer'); ?>
        <script src="<?php echo base_url(); ?>assets/dist/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/dist/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    </body>
</html>
<script type="text/javascript">
    $(function () {
        $('#pesan-flash').delay(4000).fadeOut();
        $('#pesan-error-flash').delay(5000).fadeOut();
    });
</script>