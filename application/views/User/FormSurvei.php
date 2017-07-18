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
                                <form role="form" action="<?php echo base_url(); ?>Survei/savedatasurvei" method="POST" enctype="multipart/form-data">
                                    <div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Tahun Survei</label>
                                                <input type="text" class="form-control" value="" id="" name="tahun_survei" placeholder="Pilih Tahun Melakukan Survei" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Nama Outlet</label>
                                                <input type="text" class="form-control" value="" id="" name="nama_outlet" placeholder="Masukan Nama Outlet" required>                        
                                            </div>
                                            <div class="form-group">
                                                <label for="">Cabang</label>
                                                <input type="text" class="form-control" value="" id="" name="cabang_outlet" placeholder="Pilih Cabang Outlet" required>                        
                                            </div>
                                            <div class="form-group">
                                                <label for="">Channel</label>
                                                <select name="channel" class="form-control">
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
                                                <input type="text" class="form-control" value="" id="" name="telpon_outlet" placeholder="Masukan No Telpon" required>                        
                                            </div>
                                            <div class="form-group">
                                                <label for="">Periode Kuesioner</label>
                                                <select name="semester" class="form-control">
                                                    <option value="S1">S1</option>
                                                    <option value="S2">S2</option>
                                                </select> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class>
                                        <button type="submit" class="btn btn-primary btn-block btn-flat">Simpan</button>
                                    </div> 
                                </form>
                            </div><!-- /.chat -->
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
                                            <td>1</td>
                                            <td>Ketepatan Waktu  kunjungan Salesman mengambil Order</td>
                                            <td>
                                                <form action="">
                                                    <input type="radio" name="kepuasan" value="1"> 1 &emsp14; 
                                                    <input type="radio" name="kepuasan" value="2"> 2 &emsp14; 
                                                    <input type="radio" name="kepuasan" value="3"> 3 &emsp14; 
                                                    <input type="radio" name="kepuasan" value="4"> 4 
                                                </form>
                                            </td>
                                            <td>
                                                <form action="">
                                                    <input type="radio" name="Kepentingan" value="1"> 1 &emsp14; 
                                                    <input type="radio" name="Kepentingan" value="2"> 2 &emsp14; 
                                                    <input type="radio" name="Kepentingan" value="3"> 3 &emsp14; 
                                                    <input type="radio" name="Kepentingan" value="4"> 4 
                                                </form>
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Salesman Penampilan Rapih  </td>
                                                <td>
                                                    <form action="">
                                                        <input type="radio" name="kepuasan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="4"> 4 
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="">
                                                        <input type="radio" name="Kepentingan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="4"> 4 
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Pengetahuan Salesman mengenai Produk</td>
                                                <td>
                                                    <form action="">
                                                        <input type="radio" name="kepuasan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="4"> 4 
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="">
                                                        <input type="radio" name="Kepentingan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="4"> 4 
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Ketanggapan Salesman dalam membantu menyelesaikan Keluhan</td>
                                                <td>
                                                    <form action="">
                                                        <input type="radio" name="kepuasan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="4"> 4 
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="">
                                                        <input type="radio" name="Kepentingan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="4"> 4 
                                                    </form>
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
                                                    <form action="">
                                                        <input type="radio" name="kepuasan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="4"> 4 
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="">
                                                        <input type="radio" name="Kepentingan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="4"> 4 
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Kecepatan pelayanan Retur Barang ( Tidak lebih dari 7 hari)</td>
                                                <td>
                                                    <form action="">
                                                        <input type="radio" name="kepuasan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="4"> 4 
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="">
                                                        <input type="radio" name="Kepentingan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="4"> 4 
                                                    </form>
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
                                                    <form action="">
                                                        <input type="radio" name="kepuasan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="4"> 4 
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="">
                                                        <input type="radio" name="Kepentingan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="4"> 4 
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Kesesuaian antara pesanan dengan barang yang dikirim</td>
                                                <td>
                                                    <form action="">
                                                        <input type="radio" name="kepuasan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="4"> 4 
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="">
                                                        <input type="radio" name="Kepentingan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="4"> 4 
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Kesesuaian Pengiriman Produk Suhu Khusus dengan CDOB</td>
                                                <td>
                                                    <form action="">
                                                        <input type="radio" name="kepuasan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="4"> 4 
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="">
                                                        <input type="radio" name="Kepentingan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="4"> 4 
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Ketepatan waktu dalam pengiriman barang Sesuai dengan Janji</td>
                                                <td>
                                                    <form action="">
                                                        <input type="radio" name="kepuasan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="4"> 4 
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="">
                                                        <input type="radio" name="Kepentingan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="4"> 4 
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>Kejelasan dokumen Pengiriman</td>
                                                <td>
                                                    <form action="">
                                                        <input type="radio" name="kepuasan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="4"> 4 
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="">
                                                        <input type="radio" name="Kepentingan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="4"> 4 
                                                    </form>
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
                                                    <form action="">
                                                        <input type="radio" name="kepuasan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="4"> 4 
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="">
                                                        <input type="radio" name="Kepentingan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="4"> 4 
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>Ketepatan waktu kunjungan Penagih</td>
                                                <td>
                                                    <form action="">
                                                        <input type="radio" name="kepuasan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="4"> 4 
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="">
                                                        <input type="radio" name="Kepentingan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="4"> 4 
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>Kelengkapan dokumen Penagihan</td>
                                                <td>
                                                    <form action="">
                                                        <input type="radio" name="kepuasan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="4"> 4 
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="">
                                                        <input type="radio" name="Kepentingan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="4"> 4 
                                                    </form>
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
                                                    <form action="">
                                                        <input type="radio" name="kepuasan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="4"> 4 
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="">
                                                        <input type="radio" name="Kepentingan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="4"> 4 
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>16</td>
                                                <td>Kecepatan petugas  ECC dalam penerimaan Telepon (Tidak lebih dari 3 Kali dering)</td>
                                                <td>
                                                    <form action="">
                                                        <input type="radio" name="kepuasan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="4"> 4 
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="">
                                                        <input type="radio" name="Kepentingan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="4"> 4 
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>17</td>
                                                <td>Keramahan Petugas ECC pada saat terima Telepon </td>
                                                <td>
                                                    <form action="">
                                                        <input type="radio" name="kepuasan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="4"> 4 
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="">
                                                        <input type="radio" name="Kepentingan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="4"> 4 
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>18</td>
                                                <td>Pemahaman/Pengetahuan mengenal Produk oleh Petugas ECC</td>
                                                <td>
                                                    <form action="">
                                                        <input type="radio" name="kepuasan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="4"> 4 
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="">
                                                        <input type="radio" name="Kepentingan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="4"> 4 
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>19</td>
                                                <td>Ketanggapan Petugas ECC Menerima keluhan Pelanggan</td>
                                                <td>
                                                    <form action="">
                                                        <input type="radio" name="kepuasan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="4"> 4 
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="">
                                                        <input type="radio" name="Kepentingan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="4"> 4 
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>20</td>
                                                <td>Kecepatan Petugas ECC dalam memberi informasi dan memfollow up keluhan Pelanggan</td>
                                                <td>
                                                    <form action="">
                                                        <input type="radio" name="kepuasan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="kepuasan" value="4"> 4 
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="">
                                                        <input type="radio" name="Kepentingan" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="Kepentingan" value="4"> 4 
                                                    </form>                                             
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
                        </div>
                </section>
            </div>
        </div>
        <?php $this->load->view('inc/footer'); ?>
        <script src="<?php echo base_url(); ?>assets/dist/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/dist/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    </body>
</html>