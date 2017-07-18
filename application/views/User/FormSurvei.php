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
                    <div class="box">
                        <div class="box-header">
                            <i class="fa fa-plus"></i>
                            <h3 class="box-title">FORM INPUT DATA OUTLET</h3>
                        </div>
                        <div class="box-body chat" id="chat-box">
                            <div class="item">
                                <?php $this->load->view('User/Data_Outlet'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <form role="form" action="<?php echo base_url(); ?>Survei/savepoin" method="POST" enctype="multipart/form-data">
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
                                                            <div class="form-group">
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
                                                        <td></td>
                                                        <td></td>
                                                        <td>                                               
                                                            <div class=""> <button type="reset" class="btn btn-primary btn-block btn-flat">Batal</button>
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
                            </form>
                        </div>
                </section>
            </div>
        </div>
        <?php $this->load->view('inc/footer'); ?>
        <script src="<?php echo base_url(); ?>assets/dist/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/dist/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    </body>
</html>