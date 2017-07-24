<html>
    <head>
        <link href="<?php echo base_url(); ?>assets/dist/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <?php $this->load->view('inc/head'); ?>
    </head>
    <body class="skin-green">
        <div class="wrapper">
            <?php $this->load->view('inc/head2User'); ?>
            <aside class="main-sidebar">
                <?php $this->load->view('inc/sidebarUser'); ?>
            </aside>
            <div class="content-wrapper">

                <section class="content">
                    <form  role="form" action="<?php echo base_url(); ?>Survei/SaveSurvei" method="POST" enctype="multipart/form-data">
                        <div class="box">
                            <span id="pesan-flash"><?php echo $this->session->flashdata('sukses'); ?></span>
                            <span id="pesan-error-flash"><?php echo $this->session->flashdata('alert'); ?></span>
                            <div class="box-title">
                                <br>
                                <center>
                                    <font color="#008000">
                                    <h2><b>PT ENSEVAL PUTERA MEGATRADING Tbk.</b> <br></h2>
                                    <hr color="black">
                                    <h4><b>Form Input Data Survei</b>
                                    </h4> <hr color="black">
                                    </font><br>
                                </center>
                            </div>
                            <div class="box-body chat" id="chat-box">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <?php $tahun = getdate(); ?>
                                        <label for="">Tahun Survei</label>
                                        <input type="number"  class="form-control" value="<?php echo $tahun['year']; ?>" id="" name="tahun_survei" readonly="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Periode Kuesioner</label>
                                        <select name="semester" class="form-control" required="">
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                        </select> 
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nama Outlet</label>
                                        <input type="text" class="form-control" value="" id="" name="nama_outlet" placeholder="Masukan Nama Outlet" required>                        
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
                                        <label for="">Alamat </label>
                                        <input type="text" class="form-control" value="" id="" name="alamat_outlet" placeholder="Masukan Alamat Outlet" required>                        
                                    </div>
                                    <div class="form-group">
                                        <label for="">No Telpon</label>
                                        <input type="number" class="form-control" value="" id="" name="telpon_outlet" placeholder="Masukan No Telpon" required>                        
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
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="box">
                                        <div class="box-title">
                                            <center>
                                                <hr color="black">
                                                <font color="#008000">
                                                <h4><b>KUESIONER PELAYANAN</b> <br></h4>
                                                <hr color="black">
                                                </font>
                                            </center>
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
                                                        <td><i class="fa fa-archive"></i></td>
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
                                                                <input type="radio" name="kepuasan1" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="kepuasan1" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="kepuasan1" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="kepuasan1" value="4"> 4 
                                                            </div>                                 
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="kepentingan1" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="kepentingan1" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="kepentingan1" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="kepentingan1" value="4"> 4 
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
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="kepentingan2" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="kepentingan2" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="kepentingan2" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="kepentingan2" value="4"> 4 
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
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="Kepentingan3" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="Kepentingan3" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="Kepentingan3" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="Kepentingan3" value="4"> 4 
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
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="Kepentingan4" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="Kepentingan4" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="Kepentingan4" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="Kepentingan4" value="4"> 4 
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="fa fa-refresh"></i></td>
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
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="Kepentingan5" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="Kepentingan5" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="Kepentingan5" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="Kepentingan5" value="4"> 4 
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
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="Kepentingan6" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="Kepentingan6" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="Kepentingan6" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="Kepentingan6" value="4"> 4 
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="fa fa-send"></i></td>
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
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="Kepentingan7" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="Kepentingan7" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="Kepentingan7" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="Kepentingan7" value="4"> 4 
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
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="Kepentingan8" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="Kepentingan8" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="Kepentingan8" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="Kepentingan8" value="4"> 4 
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
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="Kepentingan10" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="Kepentingan10" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="Kepentingan10" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="Kepentingan10" value="4"> 4 
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
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="Kepentingan11" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="Kepentingan11" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="Kepentingan11" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="Kepentingan11" value="4"> 4 
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="fa fa-refresh"></i></td>
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
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="Kepentingan12" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="Kepentingan12" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="Kepentingan12" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="Kepentingan12" value="4"> 4 
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
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="Kepentingan13" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="Kepentingan13" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="Kepentingan13" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="Kepentingan13" value="4"> 4 
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
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="Kepentingan14" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="Kepentingan14" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="Kepentingan14" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="Kepentingan14" value="4"> 4 
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="fa fa-phone-square"></i></td>
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
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="Kepentingan15" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="Kepentingan15" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="Kepentingan15" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="Kepentingan15" value="4"> 4 
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
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="Kepentingan16" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="Kepentingan16" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="Kepentingan16" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="Kepentingan16" value="4"> 4 
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
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="Kepentingan17" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="Kepentingan17" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="Kepentingan17" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="Kepentingan17" value="4"> 4 
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
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="Kepentingan18" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="Kepentingan18" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="Kepentingan18" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="Kepentingan18" value="4"> 4 
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
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="Kepentingan19" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="Kepentingan19" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="Kepentingan19" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="Kepentingan19" value="4"> 4 
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
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="radio" name="Kepentingan20" value="1"> 1 &emsp14; 
                                                                <input type="radio" name="Kepentingan20" value="2"> 2 &emsp14; 
                                                                <input type="radio" name="Kepentingan20" value="3"> 3 &emsp14; 
                                                                <input type="radio" name="Kepentingan20" value="4"> 4 
                                                            </div>                                            
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>21</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <label for="">Tuliskan beberapa hal penting terhadap pelayanan kami :</label>
                                                                <textarea style="height:90px"  class="form-control" name="komentar" placeholder="Tuliskan kritikan dan saran . . ."></textarea>                
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td> 
                                                            <div class=""> 
                                                                <a href="<?php echo base_url(); ?>User" class="btn btn-warning btn-block btn-flat"><i class="fa fa-close"></i> Batal </a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class>
                                                                <button type="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-save"></i>  Simpan</button>
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
    <script type="text/javascript">
        $(function () {
            $('#pesan-flash').delay(4000).fadeOut();
            $('#pesan-error-flash').delay(5000).fadeOut();
        });
    </script>
</html>
