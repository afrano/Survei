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
                    <form action="<?php echo base_url(); ?>Survei/SaveSurvei" method="post">
                        <div class="box">
                            <span id="pesan-flash"><?php echo $this->session->flashdata('sukses'); ?></span>
                            <span id="pesan-error-flash"><?php echo $this->session->flashdata('alert'); ?></span>
                            <div class="box-title">
                                <br>
                                <center>
                                    <font color="#008000">
                                    <h2><b>PT ENSEVAL PUTERA MEGATRADING Tbk.</b> <br></h2>
                                    </font><br>
                                </center>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="box">
                                        <div class="box-title">
                                            <center>
                                                <font color="#008000">
                                                <h4><b>KUESIONER PELAYANAN</b> <br></h4>
                                                <br>
                                                </font>
                                            </center>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <h5><b>Bapak/Ibu yang terhormat,</b><br></h5>
                                                <h5>Terima kasih atas kerjasama selama ini dengan PT.Enseval Putera Megatrading, sebagai upaya peningkatan pelayanan pelanggan, mohon dapat mengisikan pendapat dan komentar Bapak/Ibu pada kolom di bawah ini.
                                                    Berilah nilai terhadap pelayanan kami (berdasarkan pengalaman Anda) sesuai dengan tingkat kepuasan Anda dan bobot Kepentingannya.</h5><font color="Red"><h5>* Catatan : <br> | 1 : Sangat Tidak | 2 : Tidak Puas | 3 : Puas | 4 Sangat Puas</h5></font>
                                            </div>
                                            <?php $tahun = getdate(); ?>
                                            <input type="hidden" hidden="" class="form-control" value="<?php echo $tahun['year']; ?>" id="" name="tahun_survei" readonly="" required>
                                            <div class="form-group">
                                                <label for="">Periode Kuesioner</label>
                                                <select name="semester" class="form-control" required="">
                                                    <option value="S1">S1</option>
                                                    <option value="S2">S2</option>
                                                </select> 
                                            </div>
                                            <div class="form-group">
                                                <label for="">ID Sales</label>
                                                <input type="text"  class="form-control" value="" name="id_sales" placeholder="Masukan ID Sales " required="">
                                            </div>
                                        </div>
                                        <input type="hidden" readonly="" class="form-control" value="<?php echo $id_user; ?>"  name="id_outlet" >
                                        <div class="box-body">
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th width="4%">NO</th>
                                                        <th width="60%">Pertanyaan</th>
                                                        <th width="16%">Kepuasan</th>
                                                        <th>Kepentingan</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                            <table id="example1" class="table table-bordered table-striped">
                                                <div class="alert-success"> <label onclick="if (this.parentNode.parentNode.getElementsByTagName('tbody')['kategori1'].style.display != '') {
                                                            this.parentNode.parentNode.getElementsByTagName('tbody')['kategori1'].style.display = '';
                                                            this.parentNode.parentNode.getElementsByTagName('tbody')['hide'].style.display = 'none';
                                                            this.innerText = '';
                                                            this.value = 'Sembunyikan';
                                                        } else {
                                                            this.parentNode.parentNode.getElementsByTagName('tbody')['kategori1'].style.display = 'none';
                                                            this.parentNode.parentNode.getElementsByTagName('tbody')['hide'].style.display = '';
                                                            this.innerText = '';
                                                            this.value = 'Tampilkan';
                                                        }" >
                                                        <font color="white"><b>&nbsp;&nbsp;&nbsp;<i class="fa fa-archive"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;PEMESANAN BARANG MELALUI SALESMAN</b></font></label></div>
                                                <tbody id="kategori1" style="display: none">
                                                <td width="4%">1</td>
                                                <td width="60%"> <?php echo $pertanyaan1; ?></td>
                                                <td width="16%">
                                                    <div class="form-group" >
                                                        <input type="radio" name="kepuasan1" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="kepuasan1" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="kepuasan1" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="kepuasan1" value="4"> 4 
                                                        <input type="radio" name="kepuasan1" value="" required="" hidden="">
                                                    </div>                                 
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="radio" name="kepentingan1" value="1"> 1 &emsp14; 
                                                        <input type="radio" name="kepentingan1" value="2"> 2 &emsp14; 
                                                        <input type="radio" name="kepentingan1" value="3"> 3 &emsp14; 
                                                        <input type="radio" name="kepentingan1" value="4"> 4 
                                                        <input type="radio" name="kepentingan1" value="" required="" hidden="">
                                                    </div>
                                                </td>
                                                <tr>
                                                    <td>2</td>
                                                    <td><?php echo $pertanyaan2; ?> </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="radio" name="kepuasan2" value="1"> 1 &emsp14; 
                                                            <input type="radio" name="kepuasan2" value="2"> 2 &emsp14; 
                                                            <input type="radio" name="kepuasan2" value="3"> 3 &emsp14; 
                                                            <input type="radio" name="kepuasan2" value="4"> 4 
                                                            <input type="radio" name="kepuasan2" value="" required="" hidden="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="radio" name="kepentingan2" value="1"> 1 &emsp14; 
                                                            <input type="radio" name="kepentingan2" value="2"> 2 &emsp14; 
                                                            <input type="radio" name="kepentingan2" value="3"> 3 &emsp14; 
                                                            <input type="radio" name="kepentingan2" value="4"> 4 
                                                            <input type="radio" name="kepentingan2" value="" required="" hidden="">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td><?php echo $pertanyaan3; ?></td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="radio" name="kepuasan3" value="1"> 1 &emsp14; 
                                                            <input type="radio" name="kepuasan3" value="2"> 2 &emsp14; 
                                                            <input type="radio" name="kepuasan3" value="3"> 3 &emsp14; 
                                                            <input type="radio" name="kepuasan3" value="4"> 4 
                                                            <input type="radio" name="kepuasan3" value="" required="" hidden="">

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="radio" name="Kepentingan3" value="1"> 1 &emsp14; 
                                                            <input type="radio" name="Kepentingan3" value="2"> 2 &emsp14; 
                                                            <input type="radio" name="Kepentingan3" value="3"> 3 &emsp14; 
                                                            <input type="radio" name="Kepentingan3" value="4"> 4 
                                                            <input type="radio" name="Kepentingan3" value="" required="" hidden="">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td><?php echo $pertanyaan4; ?></td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="radio" name="kepuasan4" value="1"> 1 &emsp14; 
                                                            <input type="radio" name="kepuasan4" value="2"> 2 &emsp14; 
                                                            <input type="radio" name="kepuasan4" value="3"> 3 &emsp14; 
                                                            <input type="radio" name="kepuasan4" value="4"> 4 
                                                            <input type="radio" name="kepuasan4" value="" required="" hidden="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="radio" name="Kepentingan4" value="1"> 1 &emsp14; 
                                                            <input type="radio" name="Kepentingan4" value="2"> 2 &emsp14; 
                                                            <input type="radio" name="Kepentingan4" value="3"> 3 &emsp14; 
                                                            <input type="radio" name="Kepentingan4" value="4"> 4 
                                                            <input type="radio" name="Kepentingan4" value="" required="" hidden="">
                                                        </div>
                                                    </td>
                                                </tr>  
                                                </tbody>
                                            </table> 
                                            <table id="example1" class="table table-bordered table-striped">
                                                <div class="alert-success">  <label onclick="if (this.parentNode.parentNode.getElementsByTagName('tbody')['kategori2'].style.display != '') {
                                                            this.parentNode.parentNode.getElementsByTagName('tbody')['kategori2'].style.display = '';
                                                            this.parentNode.parentNode.getElementsByTagName('tbody')['hide'].style.display = 'none';
                                                            this.innerText = '';
                                                            this.value = 'Sembunyikan';
                                                        } else {
                                                            this.parentNode.parentNode.getElementsByTagName('tbody')['kategori2'].style.display = 'none';
                                                            this.parentNode.parentNode.getElementsByTagName('tbody')['hide'].style.display = '';
                                                            this.innerText = '';
                                                            this.value = 'Tampilkan';
                                                        }">
                                                        <font color="white"><b>&nbsp;&nbsp;&nbsp;<i class="fa fa-refresh"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; PENANGANAN RETUR BARANG</b></font></label></div>
                                                <tbody id="kategori2" style="display: none">
                                                    <tr>
                                                        <td width="4%%">5</td>
                                                        <td width="60%"><?php echo $pertanyaan5; ?></td>
                                                        <td width="16%">
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
                                                                <input type="radio" name="Kepentingan5" value="" required="" hidden="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td><?php echo $pertanyaan6; ?></td>
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
                                                                <input type="radio" name="Kepentingan6" value="" required="" hidden="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table> 
                                            <table id="example1" class="table table-bordered table-striped">
                                                <div class="alert-success">  <label onclick="if (this.parentNode.parentNode.getElementsByTagName('tbody')['kategori3'].style.display != '') {
                                                            this.parentNode.parentNode.getElementsByTagName('tbody')['kategori3'].style.display = '';
                                                            this.parentNode.parentNode.getElementsByTagName('tbody')['hide'].style.display = 'none';
                                                            this.innerText = '';
                                                            this.value = 'Sembunyikan';
                                                        } else {
                                                            this.parentNode.parentNode.getElementsByTagName('tbody')['kategori3'].style.display = 'none';
                                                            this.parentNode.parentNode.getElementsByTagName('tbody')['hide'].style.display = '';
                                                            this.innerText = '';
                                                            this.value = 'Tampilkan';
                                                        }">
                                                        <font color="white"><b>&nbsp;&nbsp;&nbsp;<i class="fa fa-send"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;PENGIRIMAN BARANG</b></font></label></div>
                                                <tbody id="kategori3" style="display: none">
                                                    <tr>
                                                        <td width="4%">7</td>
                                                        <td width="60%"><?php echo $pertanyaan7; ?></td>
                                                        <td width="16%">
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
                                                                <input type="radio" name="Kepentingan7" value="" required="" hidden="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td><?php echo $pertanyaan8; ?></td>
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
                                                                <input type="radio" name="Kepentingan8" value="" required="" hidden="">

                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td><?php echo $pertanyaan9; ?></td>
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
                                                                <input type="radio" name="Kepentingan9" value="" required="" hidden="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td><?php echo $pertanyaan10; ?></td>
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
                                                                <input type="radio" name="Kepentingan10" value="" required="" hidden="">

                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td><?php echo $pertanyaan11; ?></td>
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
                                                                <input type="radio" name="Kepentingan11" value="" required="" hidden="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table> 
                                            <table id="example1" class="table table-bordered table-striped">
                                                <div class="alert-success">
                                                    <label onclick="if (this.parentNode.parentNode.getElementsByTagName('tbody')['kategori4'].style.display != '') {
                                                                this.parentNode.parentNode.getElementsByTagName('tbody')['kategori4'].style.display = '';
                                                                this.parentNode.parentNode.getElementsByTagName('tbody')['hide'].style.display = 'none';
                                                                this.innerText = '';
                                                                this.value = 'Sembunyikan';
                                                            } else {
                                                                this.parentNode.parentNode.getElementsByTagName('tbody')['kategori4'].style.display = 'none';
                                                                this.parentNode.parentNode.getElementsByTagName('tbody')['hide'].style.display = '';
                                                                this.innerText = '';
                                                                this.value = 'Tampilkan';
                                                            }" value="2">
                                                        <font color="white"><b>&nbsp;&nbsp;&nbsp;<i class="fa fa-refresh"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; PENAGIHAN</b></label></div>
                                                <tbody id="kategori4" style="display: none">
                                                    <tr>
                                                        <td width="4%">12</td>
                                                        <td width="60%"><?php echo $pertanyaan12; ?></td>
                                                        <td width="16%">
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
                                                                <input type="radio" name="Kepentingan12" value="" required="" hidden="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>13</td>
                                                        <td><?php echo $pertanyaan13; ?></td>
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
                                                                <input type="radio" name="Kepentingan13" value="" required="" hidden="">

                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>14</td>
                                                        <td><?php echo $pertanyaan14; ?></td>
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
                                                                <input type="radio" name="Kepentingan14" value="" required="" hidden="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table id="example1" class="table table-bordered table-striped">
                                                <div class="alert-success"> <label onclick="if (this.parentNode.parentNode.getElementsByTagName('tbody')['kategori5'].style.display != '') {
                                                            this.parentNode.parentNode.getElementsByTagName('tbody')['kategori5'].style.display = '';
                                                            this.parentNode.parentNode.getElementsByTagName('tbody')['hide'].style.display = 'none';
                                                            this.innerText = '';
                                                            this.value = 'Sembunyikan';
                                                        } else {
                                                            this.parentNode.parentNode.getElementsByTagName('tbody')['kategori5'].style.display = 'none';
                                                            this.parentNode.parentNode.getElementsByTagName('tbody')['hide'].style.display = '';
                                                            this.innerText = '';
                                                            this.value = 'Tampilkan';
                                                        }" value="2">
                                                        <font color="white"><b>&nbsp;&nbsp;&nbsp;<i class="fa fa-phone-square"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; ENSEVAL CUSTOMER CARE ( ECC )</b></label></div>
                                                <tbody id="kategori5" style="display: none">
                                                    <tr>
                                                        <td width="4%">15</td>
                                                        <td width="60%"><?php echo $pertanyaan15; ?></td>
                                                        <td width="16%">
                                                            <div class="form-group" >
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
                                                                <input type="radio" name="Kepentingan15" value="" required="" hidden="">

                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>16</td>
                                                        <td><?php echo $pertanyaan16; ?></td>
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
                                                                <input type="radio" name="Kepentingan16" value="" required="" hidden="">

                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>17</td>
                                                        <td><?php echo $pertanyaan17; ?></td>
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
                                                                <input type="radio" name="Kepentingan17" value="" required="" hidden="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>18</td>
                                                        <td><?php echo $pertanyaan18; ?></td>
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
                                                                <input type="radio" name="Kepentingan18" value="" required="" hidden="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>19</td>
                                                        <td><?php echo $pertanyaan19; ?></td>
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
                                                                <input type="radio" name="Kepentingan19" value="" required="" hidden="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>20</td>
                                                        <td><?php echo $pertanyaan20; ?></td>
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
                                                                <input type="radio" name="Kepentingan20" value="" required="" hidden="">
                                                            </div>                                            
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>21</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <label for="">Tuliskan beberapa hal penting terhadap pelayanan kami :</label>
                                                                <textarea style="height:90px"  required="" class="form-control" name="komentar" placeholder="Tuliskan kritikan dan saran . . ."></textarea>                
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td> 
                                                            <div class=""> 
                                                                <a href="<?php echo base_url(); ?>Outlet" class="btn btn-warning btn-block btn-flat"><i class="fa fa-close"></i> Batal </a>
                                                                <br>
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
                                            <br>
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