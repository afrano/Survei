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
                        <b>Form Edit Data Survei Kepuasan Pelangan</b>
                    </h1>
                </section>
                <section class="content">
                    <form  role="form" action="<?php echo base_url(); ?>Data/updatedata" method="POST" enctype="multipart/form-data">
                        <div class="box">
                            <span id="pesan-flash"><?php echo $this->session->flashdata('sukses'); ?></span>
                            <span id="pesan-error-flash"><?php echo $this->session->flashdata('alert'); ?></span>
                            <div class="box-title">
                            </div>
                            <div class="box-header">
                                <i class="fa fa-plus"></i>
                                <h3 class="box-title">FORM EDIT DATA OUTLET</h3>
                                <input type="text" name="id_hasil" hidden="" value="<?php echo $id_outlet; ?>">
                                <input type="text" name="id_cabang" hidden="" value="<?php echo $id_cabang; ?>">
                                <input type="text" name="id_outlet" hidden="" value="<?php echo $id_outlet; ?>">
                            </div>
                            <div class="box-body chat" id="chat-box">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Tahun Survei</label>
                                        <input type="number"  class="form-control" value="<?php echo $tahun_survei; ?>" id="" name="tahun_survei" >
                                    </div>

                                    <div class="form-group">
                                        <label for="">Nama Outlet</label>
                                        <input type="text" class="form-control" value="<?php echo $nama_outlet; ?>" id="" name="nama_outlet" >                        
                                    </div>
                                    <div class="form-group">
                                        <label for="">Cabang</label> 
                                        <select name="id_cabang" class="form-control" required="">
                                            <option value="<?php echo $id_cabang; ?> "> <?php echo $id_cabang; ?></option>
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
                                            <option value="<?php echo $channel; ?>"><?php echo $channel; ?></option>
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
                                        <input type="text" class="form-control" value="<?php echo $alamat; ?>" id="" name="alamat_outlet" >                        
                                    </div>
                                    <div class="form-group">
                                        <label for="">No Telpon</label>
                                        <input type="number" class="form-control" value="<?php echo $telpon; ?>" id="" name="telpon_outlet" >                        
                                    </div>
                                    <div class="form-group">
                                        <label for="">Periode Kuesioner</label>
                                        <select name="semester" class="form-control" >
                                            <option value="<?php echo $semester; ?>"><?php echo $semester; ?></option>>
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
                                                                <input type="number" min="1" max="4" value="<?php echo $kepuasan2; ?>" name="kepuasan2">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" min="1" max="4" value="<?php echo $kepentingan2; ?>" name="kepentingan2">   
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Pengetahuan Salesman mengenai Produk</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" min="1" max="4" value="<?php echo $kepuasan3; ?>" name="kepuasan3">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" min="1" max="4" value="<?php echo $kepentingan3; ?>" name="kepentingan3">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Ketanggapan Salesman dalam membantu menyelesaikan Keluhan</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" min="1" max="4" value="<?php echo $kepuasan4; ?>" name="kepuasan4">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" min="1" max="4" value="<?php echo $kepentingan4; ?>" name="kepentingan4">
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
                                                                <input type="number" min="1" max="4" value="<?php echo $kepuasan5; ?>" name="kepuasan5">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" min="1" max="4" value="<?php echo $kepentingan5; ?>" name="kepentingan5">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>Kecepatan pelayanan Retur Barang ( Tidak lebih dari 7 hari)</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" min="1" max="4" value="<?php echo $kepuasan6; ?>" name="kepuasan6">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" min="1" max="4" value="<?php echo $kepentingan6; ?>" name="kepentingan6">
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
                                                                <input type="number" min="1" max="4" value="<?php echo $kepuasan7; ?>" name="kepuasan7">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" min="1" max="4" value="<?php echo $kepentingan7; ?>" name="kepentingan7">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>Kesesuaian antara pesanan dengan barang yang dikirim</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" min="1" max="4" value="<?php echo $kepuasan8; ?>" name="kepuasan8">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" min="1" max="4" value="<?php echo $kepentingan8; ?>" name="kepentingan8">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>Kesesuaian Pengiriman Produk Suhu Khusus dengan CDOB</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" min="1" max="4" value="<?php echo $kepuasan9; ?>" name="kepuasan9">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" min="1" max="4" value="<?php echo $kepentingan9; ?>" name="kepentingan9">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>Ketepatan waktu dalam pengiriman barang Sesuai dengan Janji</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" min="1" max="4" value="<?php echo $kepuasan10; ?>" name="kepuasan10">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" min="1" max="4" value="<?php echo $kepentingan10; ?>" name="kepentingan10">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>Kejelasan dokumen Pengiriman</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" min="1" max="4" value="<?php echo $kepuasan11; ?>" name="kepuasan11">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" min="1" max="4" value="<?php echo $kepentingan11; ?>" name="kepentingan11">
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
                                                                <input type="number" min="1" max="4" value="<?php echo $kepuasan12; ?>" name="kepuasan12">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" min="1" max="4" value="<?php echo $kepentingan12; ?>" name="kepentingan12">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>13</td>
                                                        <td>Ketepatan waktu kunjungan Penagih</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" min="1" max="4" value="<?php echo $kepuasan13; ?>" name="kepuasan13">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" min="1" max="4" value="<?php echo $kepentingan13; ?>" name="kepentingan13">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>14</td>
                                                        <td>Kelengkapan dokumen Penagihan</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" min="1" max="4" value="<?php echo $kepuasan14; ?>" name="kepuasan14">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" min="1" max="4" value="<?php echo $kepentingan14; ?>" name="kepentingan14">
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
                                                                <input type="number" min="1" max="4" value="<?php echo $kepuasan15; ?>" name="kepuasan15">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" min="1" max="4" value="<?php echo $kepentingan15; ?>" name="kepentingan15">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>16</td>
                                                        <td>Kecepatan petugas  ECC dalam penerimaan Telepon (Tidak lebih dari 3 Kali dering)</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" min="1" max="4" value="<?php echo $kepuasan16; ?>" name="kepuasan16">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" min="1" max="4" value="<?php echo $kepentingan16; ?>" name="kepentingan16">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>17</td>
                                                        <td>Keramahan Petugas ECC pada saat terima Telepon </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" min="1" max="4" value="<?php echo $kepuasan17; ?>" name="kepuasan17">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" min="1" max="4" value="<?php echo $kepentingan17; ?>" name="kepentingan17">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>18</td>
                                                        <td>Pemahaman/Pengetahuan mengenal Produk oleh Petugas ECC</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" min="1" max="4" value="<?php echo $kepuasan18; ?>" name="kepuasan18">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" min="1" max="4" value="<?php echo $kepentingan18; ?>" name="kepentingan18">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>19</td>
                                                        <td>Ketanggapan Petugas ECC Menerima keluhan Pelanggan</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" min="1" max="4" value="<?php echo $kepuasan19; ?>" name="kepuasan19">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" min="1" max="4" value="<?php echo $kepentingan19; ?>" name="kepentingan19">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>20</td>
                                                        <td>Kecepatan Petugas ECC dalam memberi informasi dan memfollow up keluhan Pelanggan</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" min="1" max="4" value="<?php echo $kepuasan20; ?>" name="kepuasan20">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">    
                                                                <input type="number" min="1" max="4" value="<?php echo $kepentingan20; ?>" name="kepentingan20">
                                                            </div>                                            
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td> 
                                                            <div class=""> 
                                                                <a href="<?php echo base_url(); ?>Data" class="btn btn-warning btn-block btn-flat">Batal</a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class>
                                                                <button type="submit" class="btn btn-primary btn-block btn-flat">Update</button>
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