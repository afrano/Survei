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

                <section class="content">
                    <div class="box">
                        <span id="pesan-flash"><?php echo $this->session->flashdata('sukses'); ?></span>
                        <span id="pesan-error-flash"><?php echo $this->session->flashdata('alert'); ?></span>
                        <div class="box-title">
                        </div>
                        <div class="box-header">
                            <center><i class="fa fa-user"></i>
                                <h3 class="box-title">DATA OUTLET</h3>
                                <input type="text" name="id_hasil" hidden="" value="<?php echo $id_outlet; ?>">
                                <input type="text" name="id_cabang" hidden="" value="<?php echo $id_cabang; ?>">
                                <input type="text" name="id_outlet" hidden="" value="<?php echo $id_outlet; ?>"></center>
                        </div>
                        <div class="box-body chat" id="chat-box">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Tahun Survei</label>
                                    <input type="number" readonly=""  class="form-control" value="<?php echo $tahun_survei; ?>" id="" name="tahun_survei" >
                                </div>

                                <div class="form-group">
                                    <label for="">Nama Outlet</label>
                                    <input type="text" class="form-control" readonly="" value="<?php echo $nama_outlet; ?>" id="" name="nama_outlet" >                        
                                </div>
                                <div class="form-group">
                                    <label for="">Cabang</label>
                                    <input type="text" class="form-control" readonly="" value="<?php echo $id_cabang; ?>"  >                        
                                </div>
                                <div class="form-group">
                                    <label for="">Cabang</label>
                                    <input type="text" class="form-control" readonly="" value="<?php echo $channel; ?>" id="" name="nama_outlet" >                        
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Alamat </label>
                                    <input type="text" class="form-control" readonly="" value="<?php echo $alamat; ?>" id="" name="alamat_outlet" >                        
                                </div>
                                <div class="form-group">
                                    <label for="">No Telpon</label>
                                    <input type="number" class="form-control" readonly="" value="<?php echo $telpon; ?>" id="" name="telpon_outlet" >                        
                                </div>
                                <div class="form-group">
                                    <label for="">Semester</label>
                                    <input type="text" class="form-control" readonly="" value="<?php echo $semester; ?>"  >                        
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Sales</label>
                                    <input type="text" class="form-control" readonly="" value="<?php echo $nama_sales; ?>"  >                        
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
                                                    <th>Kepuasan</th>
                                                    <th>Kepentingan</th>
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
                                                            <?php echo $kepuasan1; ?>
                                                        </div>                                 
                                                    </td>
                                                    <td>
                                                        <div class="form-group" >
                                                            <?php echo $kepentingan1; ?>
                                                        </div>  
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Salesman Penampilan Rapih  </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <?php echo $kepuasan2; ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <?php echo $kepentingan2; ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Pengetahuan Salesman mengenai Produk</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <?php echo $kepuasan3; ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <?php echo $kepentingan3; ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Ketanggapan Salesman dalam membantu menyelesaikan Keluhan</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <?php echo $kepuasan4; ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <?php echo $kepentingan4; ?>
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
                                                            <?php echo $kepuasan5; ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <?php echo $kepentingan5; ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Kecepatan pelayanan Retur Barang ( Tidak lebih dari 7 hari)</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <?php echo $kepuasan6; ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <?php echo $kepentingan6; ?>
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
                                                            <?php echo $kepuasan7; ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <?php echo $kepentingan7; ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Kesesuaian antara pesanan dengan barang yang dikirim</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <?php echo $kepuasan8; ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <?php echo $kepentingan8; ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>Kesesuaian Pengiriman Produk Suhu Khusus dengan CDOB</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <?php echo $kepuasan9; ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <?php echo $kepentingan9; ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>Ketepatan waktu dalam pengiriman barang Sesuai dengan Janji</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <?php echo $kepuasan10; ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <?php echo $kepentingan10; ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>Kejelasan dokumen Pengiriman</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <?php echo $kepuasan11; ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <?php echo $kepentingan11; ?>
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
                                                            <?php echo $kepuasan12; ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <?php echo $kepentingan12; ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td>Ketepatan waktu kunjungan Penagih</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <?php echo $kepuasan13; ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <?php echo $kepentingan13; ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td>Kelengkapan dokumen Penagihan</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <?php echo $kepuasan14; ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <?php echo $kepentingan14; ?>
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
                                                            <?php echo $kepuasan15; ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <?php echo $kepentingan15; ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>16</td>
                                                    <td>Kecepatan petugas  ECC dalam penerimaan Telepon (Tidak lebih dari 3 Kali dering)</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <?php echo $kepuasan16; ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <?php echo $kepentingan16; ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>17</td>
                                                    <td>Keramahan Petugas ECC pada saat terima Telepon </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <?php echo $kepuasan17; ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <?php echo $kepentingan17; ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>18</td>
                                                    <td>Pemahaman/Pengetahuan mengenal Produk oleh Petugas ECC</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <?php echo $kepuasan18; ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <?php echo $kepentingan18; ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Ketanggapan Petugas ECC Menerima keluhan Pelanggan</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <?php echo $kepuasan19; ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <?php echo $kepentingan19; ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>20</td>
                                                    <td>Kecepatan Petugas ECC dalam memberi informasi dan memfollow up keluhan Pelanggan</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <?php echo $kepuasan20; ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">    
                                                            <?php echo $kepentingan20; ?>
                                                        </div>                                            
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>21</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <label for="">Komentar dan Saran dari Outlet: </label>
                                                            <textarea style="height:90px"  class="form-control" readonly=""> <?php echo $komentar; ?></textarea>                
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                     <td>
                                                        <div class>
                                                            <a href="<?php echo base_url(); ?>Data" class="btn btn-facebook btn-block btn-block"><i class="fa fa-backward"></i> Kembali</a>
                                                        </div>                                               
                                                    </td>
                                                    <td> 
                                                        <div class=""> 
                                                            <a onclick="return confirm('Hapus data survei??');" class="btn btn-warning btn-block btn-flat" href="<?php echo base_url(); ?>Cabang/Hapus/<?php echo $id_hasil; ?>"><i class="fa fa-trash"></i> Tolak Data</a>
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