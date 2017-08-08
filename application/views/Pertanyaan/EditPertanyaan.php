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
                        <div class="box-header"><br>
                            <center><i class="fa fa-list"></i>
                                <h3 class="box-title">List Pertanyaan</h3>
                            </center><br>
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
                                                    <th>Aksi</th>
                                                </tr>   
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td><i class="fa fa-archive"></i></td>
                                                    <td><b>PEMESANAN BARANG MELALUI SALESMAN</b></td>
                                                </tr>
                                            <form action="<?php echo base_url(); ?>Survei/updatePertanyaan" method="post">
                                                <tr>
                                                    <td>1</td>
                                                    <td><input type="text" class="form-control" value="<?php echo $pertanyaan1; ?>" id="" name="pertanyaan"></td>

                                                <input type="hidden" class="form-control" value="1" id="" name="id_Quesioner">
                                                <td>
                                                    <div class>
                                                        <div class>
                                                            <button type="submit" class="btn btn-facebook btn-block btn-block"><i class="fa fa-refresh"></i> Update</button>
                                                        </div>
                                                    </div>
                                                </td>
                                                </tr>
                                            </form>
                                            <tr>
                                            <form action="<?php echo base_url(); ?>Survei/updatePertanyaan" method="post">
                                                <td>2</td>
                                                <td><input type="text" class="form-control" value="<?php echo $pertanyaan2; ?>" id="" name="pertanyaan"></td>
                                                <input type="hidden" class="form-control" value="2" id="" name="id_Quesioner">
                                                <td>
                                                    <div class>
                                                        <div class>
                                                            <button type="submit" class="btn btn-facebook btn-block btn-block"><i class="fa fa-refresh"></i> Update</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </form>
                                            </tr>
                                            <tr>
                                            <form action="<?php echo base_url(); ?>Survei/updatePertanyaan" method="post">
                                                <td>3</td>
                                                <td><input type="text" class="form-control" value="<?php echo $pertanyaan3; ?>" id="" name="pertanyaan"></td>

                                                <input type="hidden" class="form-control" value="3" id="" name="id_Quesioner">
                                                <td>
                                                    <div class>
                                                        <div class>
                                                            <button type="submit" class="btn btn-facebook btn-block btn-block"><i class="fa fa-refresh"></i> Update</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </form>
                                            </tr>
                                            <tr>
                                            <form action="<?php echo base_url(); ?>Survei/updatePertanyaan" method="post">
                                                <td>4</td>
                                                <td><input type="text" class="form-control" value="<?php echo $pertanyaan4; ?>" id="" name="pertanyaan"></td>

                                                <input type="hidden" class="form-control" value="4" id="" name="id_Quesioner">
                                                <td>
                                                    <div class>
                                                        <div class>
                                                            <button type="submit" class="btn btn-facebook btn-block btn-block"><i class="fa fa-refresh"></i> Update</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </form>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-refresh"></i></td>
                                                <td><b>PENANGANAN RETUR BARANG</b></td>
                                            </tr>
                                            <tr>
                                            <form action="<?php echo base_url(); ?>Survei/updatePertanyaan" method="post">
                                                <td>5</td>
                                                <td><input type="text" class="form-control" value="<?php echo $pertanyaan5; ?>" id="" name="pertanyaan"></td>

                                                <input type="hidden" class="form-control" value="5" id="" name="id_Quesioner">
                                                <td>
                                                    <div class>
                                                        <div class>
                                                            <button type="submit" class="btn btn-facebook btn-block btn-block"><i class="fa fa-refresh"></i> Update</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </form>
                                            </tr>
                                            <tr>
                                            <form action="<?php echo base_url(); ?>Survei/updatePertanyaan" method="post">
                                                <td>6</td>
                                                <td><input type="text" class="form-control" value="<?php echo $pertanyaan6; ?>" id="" name="pertanyaan"></td>

                                                <input type="hidden" class="form-control" value="6" id="" name="id_Quesioner">
                                                <td>
                                                    <div class>
                                                        <div class>
                                                            <button type="submit" class="btn btn-facebook btn-block btn-block"><i class="fa fa-refresh"></i> Update</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </form>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-send"></i></td>
                                                <td><b>PENGIRIMAN BARANG</b></td>
                                            </tr>
                                            <tr>
                                            <form action="<?php echo base_url(); ?>Survei/updatePertanyaan" method="post">
                                                <td>7</td>
                                                <td><input type="text" class="form-control" value="<?php echo $pertanyaan7; ?>" id="" name="pertanyaan"></td>
                                                <input type="hidden" class="form-control" value="7" id="" name="id_Quesioner">
                                                <td>
                                                    <div class>
                                                        <div class>
                                                            <button type="submit" class="btn btn-facebook btn-block btn-block"><i class="fa fa-refresh"></i> Update</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </form>
                                            </tr>
                                            <tr>
                                            <form action="<?php echo base_url(); ?>Survei/updatePertanyaan" method="post">
                                                <td>8</td>
                                                <td><input type="text" class="form-control" value="<?php echo $pertanyaan8; ?>" id="" name="pertanyaan"></td>

                                                <input type="hidden" class="form-control" value="8" id="" name="id_Quesioner">
                                                <td>
                                                    <div class>
                                                        <div class>
                                                            <button type="submit" class="btn btn-facebook btn-block btn-block"><i class="fa fa-refresh"></i> Update</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </form>
                                            </tr>
                                            <tr>
                                            <form action="<?php echo base_url(); ?>Survei/updatePertanyaan" method="post">
                                                <td>9</td>
                                                <td><input type="text" class="form-control" value="<?php echo $pertanyaan9; ?>" id="" name="pertanyaan"></td>
                                                <input type="hidden" class="form-control" value="9" id="" name="id_Quesioner">
                                                <td>
                                                    <div class>
                                                        <div class>
                                                            <button type="submit" class="btn btn-facebook btn-block btn-block"><i class="fa fa-refresh"></i> Update</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </form>
                                            </tr>
                                            <tr>
                                            <form action="<?php echo base_url(); ?>Survei/updatePertanyaan" method="post">
                                                <td>10</td>
                                                <td><input type="text" class="form-control" value="<?php echo $pertanyaan10; ?>" id="" name="pertanyaan"></td>

                                                <input type="hidden" class="form-control" value="10" id="" name="id_Quesioner">
                                                <td>
                                                    <div class>
                                                        <div class>
                                                            <button type="submit" class="btn btn-facebook btn-block btn-block"><i class="fa fa-refresh"></i> Update</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </form>
                                            </tr>
                                            <tr>
                                            <form action="<?php echo base_url(); ?>Survei/updatePertanyaan" method="post">
                                                <td>11</td>
                                                <td><input type="text" class="form-control" value="<?php echo $pertanyaan11; ?>" id="" name="pertanyaan"></td>

                                                <input type="hidden" class="form-control" value="11" id="" name="id_Quesioner">
                                                <td>
                                                    <div class>
                                                        <div class>
                                                            <button type="submit" class="btn btn-facebook btn-block btn-block"><i class="fa fa-refresh"></i> Update</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </form>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-refresh"></i></td>
                                                <td><b>PENAGIHAN</b></td>
                                            </tr>
                                            <tr>
                                            <form action="<?php echo base_url(); ?>Survei/updatePertanyaan" method="post">
                                                <td>12</td>
                                                <td><input type="text" class="form-control" value="<?php echo $pertanyaan12; ?>" id="" name="pertanyaan"></td>

                                                <input type="hidden" class="form-control" value="12" id="" name="id_Quesioner">
                                                <td>
                                                    <div class>
                                                        <div class>
                                                            <button type="submit" class="btn btn-facebook btn-block btn-block"><i class="fa fa-refresh"></i> Update</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </form>
                                            </tr>
                                            <tr>
                                            <form action="<?php echo base_url(); ?>Survei/updatePertanyaan" method="post">
                                                <td>13</td>
                                                <td><input type="text" class="form-control" value="<?php echo $pertanyaan13; ?>" id="" name="pertanyaan"></td>

                                                <input type="hidden" class="form-control" value="13" id="" name="id_Quesioner">
                                                <td>
                                                    <div class>
                                                        <div class>
                                                            <button type="submit" class="btn btn-facebook btn-block btn-block"><i class="fa fa-refresh"></i> Update</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </form>
                                            </tr>
                                            <tr>
                                            <form action="<?php echo base_url(); ?>Survei/updatePertanyaan" method="post">
                                                <td>14</td>
                                                <td><input type="text" class="form-control" value="<?php echo $pertanyaan14; ?>" id="" name="pertanyaan"></td>

                                                <input type="hidden" class="form-control" value="14" id="" name="id_Quesioner">
                                                <td>
                                                    <div class>
                                                        <div class>
                                                            <button type="submit" class="btn btn-facebook btn-block btn-block"><i class="fa fa-refresh"></i> Update</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </form>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-phone-square"></i></td>
                                                <td><b>ENSEVAL CUSTOMER CARE ( ECC )</b></td>
                                            </tr>
                                            <tr>
                                            <form action="<?php echo base_url(); ?>Survei/updatePertanyaan" method="post">
                                                <td>15</td>
                                                <td><input type="text" class="form-control" value="<?php echo $pertanyaan15; ?>" id="" name="pertanyaan"></td>
                                                <input type="hidden" class="form-control" value="15" id="" name="id_Quesioner">
                                                <td>
                                                    <div class>
                                                        <div class>
                                                            <button type="submit" class="btn btn-facebook btn-block btn-block"><i class="fa fa-refresh"></i> Update</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </form>
                                            </tr>
                                            <tr>
                                            <form action="<?php echo base_url(); ?>Survei/updatePertanyaan" method="post">
                                                <td>16</td>
                                                <td><input type="text" class="form-control" value="<?php echo $pertanyaan16; ?>" id="" name="pertanyaan"></td>
                                                <input type="hidden" class="form-control" value="16" id="" name="id_Quesioner">
                                                <td>
                                                    <div class>
                                                        <div class>
                                                            <button type="submit" class="btn btn-facebook btn-block btn-block"><i class="fa fa-refresh"></i> Update</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </form>
                                            </tr>
                                            <tr>
                                            <form action="<?php echo base_url(); ?>Survei/updatePertanyaan" method="post">
                                                <td>17</td>
                                                <td><input type="text" class="form-control" value="<?php echo $pertanyaan17; ?>" id="" name="pertanyaan"></td>
                                                <input type="hidden" class="form-control" value="17" id="" name="id_Quesioner">
                                                <td>
                                                    <div class>
                                                        <div class>
                                                            <button type="submit" class="btn btn-facebook btn-block btn-block"><i class="fa fa-refresh"></i> Update</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </form>
                                            </tr>
                                            <tr>
                                            <form action="<?php echo base_url(); ?>Survei/updatePertanyaan" method="post">
                                                <td>18</td>
                                                <td><input type="text" class="form-control" value="<?php echo $pertanyaan18; ?>" id="" name="pertanyaan"></td>
                                                <input type="hidden" class="form-control" value="18" id="" name="id_Quesioner">
                                                <td>
                                                    <div class>
                                                        <div class>
                                                            <button type="submit" class="btn btn-facebook btn-block btn-block"><i class="fa fa-refresh"></i> Update</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </form>
                                            </tr>
                                            <tr>
                                            <form action="<?php echo base_url(); ?>Survei/updatePertanyaan" method="post">
                                                <td>19</td>
                                                <td><input type="text" class="form-control" value="<?php echo $pertanyaan19; ?>" id="" name="pertanyaan"></td>

                                                <input type="hidden" class="form-control" value="19" id="" name="id_Quesioner">
                                                <td>
                                                    <div class>
                                                        <div class>
                                                            <button type="submit" class="btn btn-facebook btn-block btn-block"><i class="fa fa-refresh"></i> Update</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </form>
                                            </tr>
                                            <tr>
                                            <form action="<?php echo base_url(); ?>Survei/updatePertanyaan" method="post">
                                                <td>20</td>
                                                <td><input type="text" class="form-control" value="<?php echo $pertanyaan20; ?>" id="" name="pertanyaan"></td>
                                                <input type="hidden" class="form-control" value="20" id="" name="id_Quesioner">
                                                <td>
                                                    <div class>
                                                        <div class>
                                                            <button type="submit" class="btn btn-facebook btn-block btn-block"><i class="fa fa-refresh"></i> Update</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </form>
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
            $('#pesan-flash').delay(500).fadeOut();
            $('#pesan-error-flash').delay(500).fadeOut();
        });
    </script>
</html>