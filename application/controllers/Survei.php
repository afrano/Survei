<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Survei extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->_cek_login();
    }

    private function _cek_login() {
        if (!$this->session->userdata('useradmin')) {
            redirect(base_url() . 'backend');
        }
    }

    public function index() {

        $data = array(
            'nama' => $this->session->userdata('nama'),
                //  'data_survei' => $this->model->Getdatasurvei()->result_array(),
        );
        $this->load->view('User/FormInputOutlet', $data);
    }

    public function Draft() {
        $data = array(
            'nama' => $this->session->userdata('nama'),
            'data_survei' => $this->model->Getdatasurvei()->result_array(),
        );
        $this->load->view('Hasil/Draft', $data);
    }

    public function SaveOutlet() {
        $id_outlet = '2';
        $id_hasil = '';
        $id_cabang = '2';
        $komentar = 'Tes Komen';
        $nama_outlet = $_POST['nama_outlet'];
        $cabang_outlet = $_POST['cabang_outlet'];
        $channel = $_POST['channel'];
        $alamat_outlet = $_POST['alamat_outlet'];
        $telpon_outlet = $_POST['telpon_outlet'];
        $tahun_survei = $_POST['tahun_survei'];
        $semester = $_POST['semester'];
        $Outlet = array(
            'id_outlet' => $id_outlet,
            'nama_outlet' => $nama_outlet,
            'alamat' => $alamat_outlet,
            'telpon' => $telpon_outlet,
            'channel' => $channel,
            'id_cabang' => $id_cabang,
        );

        $result = $this->model->Simpan('outlet', $Outlet);
      //  $result1 = $this->model->Simpan('hasilsurvei', $data);
        if ($result == 1) {
            $this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Simpan data BERHASIL dilakukan</strong></div>");
            header('location:' . base_url() . 'Survei');
        } else {
            $this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Simpan data GAGAL di lakukan</strong></div>");
            header('location:' . base_url() . 'Survei');
        }
    }

    public function SaveSurvei() {
        $id_outlet = '3';
        $id_hasil = '';
        $komentar = $_POST['komentar'];
       // $nama_outlet = $_POST['nama_outlet'];
      //  $cabang_outlet = $_POST['cabang_outlet'];
       // $channel = $_POST['channel'];
       // $alamat_outlet = $_POST['alamat_outlet'];
       // $telpon_outlet = $_POST['telpon_outlet'];
        $tahun_survei = $_POST['tahun_survei'];
        $semester = $_POST['semester'];
        $kepuasan1 = $_POST['kepuasan1'];
        $kepuasan2 = $_POST['kepuasan2'];
        $kepuasan3 = $_POST['kepuasan3'];
        $kepuasan4 = $_POST['kepuasan4'];
        $kepuasan5 = $_POST['kepuasan5'];
        $kepuasan6 = $_POST['kepuasan6'];
        $kepuasan7 = $_POST['kepuasan7'];
        $kepuasan8 = $_POST['kepuasan8'];
        $kepuasan9 = $_POST['kepuasan9'];
        $kepuasan10 = $_POST['kepuasan10'];
        $kepuasan11 = $_POST['kepuasan11'];
        $kepuasan12 = $_POST['kepuasan12'];
        $kepuasan13 = $_POST['kepuasan13'];
        $kepuasan14 = $_POST['kepuasan14'];
        $kepuasan15 = $_POST['kepuasan15'];
        $kepuasan16 = $_POST['kepuasan16'];
        $kepuasan17 = $_POST['kepuasan17'];
        $kepuasan18 = $_POST['kepuasan18'];
        $kepuasan19 = $_POST['kepuasan19'];
        $kepuasan20 = $_POST['kepuasan20'];
        $kepentingan1 = $_POST['kepentingan1'];
        $kepentingan2 = $_POST['kepentingan2'];
        $kepentingan3 = $_POST['Kepentingan3'];
        $kepentingan4 = $_POST['Kepentingan4'];
        $kepentingan5 = $_POST['Kepentingan5'];
        $kepentingan6 = $_POST['Kepentingan6'];
        $kepentingan7 = $_POST['Kepentingan7'];
        $kepentingan8 = $_POST['Kepentingan8'];
        $kepentingan9 = $_POST['Kepentingan9'];
        $kepentingan10 = $_POST['Kepentingan10'];
        $kepentingan11 = $_POST['Kepentingan11'];
        $kepentingan12 = $_POST['Kepentingan12'];
        $kepentingan13 = $_POST['Kepentingan13'];
        $kepentingan14 = $_POST['Kepentingan14'];
        $kepentingan15 = $_POST['Kepentingan15'];
        $kepentingan16 = $_POST['Kepentingan16'];
        $kepentingan17 = $_POST['Kepentingan17'];
        $kepentingan18 = $_POST['Kepentingan18'];
        $kepentingan19 = $_POST['Kepentingan19'];
        $kepentingan20 = $_POST['Kepentingan20'];
        $data = array(
            'id_hasil' => $id_hasil,
            'tahun' => $tahun_survei,
            'semester' => $semester,
            'id_outlet' => $id_outlet,
            'komentar' => $komentar,
            'Q01' => $kepuasan1,
            'Q02' => $kepuasan2,
            'Q03' => $kepuasan3,
            'Q04' => $kepuasan4,
            'Q05' => $kepuasan5,
            'Q06' => $kepuasan6,
            'Q07' => $kepuasan7,
            'Q08' => $kepuasan8,
            'Q09' => $kepuasan9,
            'Q10' => $kepuasan10,
            'Q11' => $kepuasan11,
            'Q12' => $kepuasan12,
            'Q13' => $kepuasan13,
            'Q14' => $kepuasan14,
            'Q15' => $kepuasan15,
            'Q16' => $kepuasan16,
            'Q17' => $kepuasan17,
            'Q18' => $kepuasan18,
            'Q19' => $kepuasan19,
            'Q20' => $kepuasan20,
            'K01' => $kepentingan1,
            'K02' => $kepentingan2,
            'K03' => $kepentingan3,
            'K04' => $kepentingan4,
            'K05' => $kepentingan5,
            'K06' => $kepentingan6,
            'K07' => $kepentingan7,
            'K08' => $kepentingan8,
            'K09' => $kepentingan9,
            'K10' => $kepentingan10,
            'K11' => $kepentingan11,
            'K12' => $kepentingan12,
            'K13' => $kepentingan13,
            'K14' => $kepentingan14,
            'K15' => $kepentingan15,
            'K16' => $kepentingan16,
            'K17' => $kepentingan17,
            'K18' => $kepentingan18,
            'K19' => $kepentingan19,
            'K20' => $kepentingan20,
        );
        $Outlet = array(
            'id_outlet' => $id_outlet,
            'nama_outlet' => $nama_outlet,
            'alamat' => $alamat_outlet,
            'telpon' => $telpon_outlet,
            'channel' => $channel,
            'id_cabang' => $id_cabang,
        );

        $result = $this->model->Simpan('outlet', $Outlet);
        $result1 = $this->model->Simpan('hasilsurvei', $data);
        if ( $result1 == 1) {
            $this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Simpan data BERHASIL dilakukan</strong></div>");
            header('location:' . base_url() . 'Survei');
        } else {
            $this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Simpan data GAGAL di lakukan</strong></div>");
            header('location:' . base_url() . 'Survei');
        }
    }

    function editkategori($kode = 0) {
        $tampung = $this->model->GetKat("where id_kat = '$kode'")->result_array();
        $data = array(
            'nama' => $this->session->userdata('nama'),
            'status' => 'lama',
            'tgl_input_kat' => $tampung[0]['tgl_input_kat'],
            'kategori' => $tampung[0]['kategori'],
            'id_kat' => $tampung[0]['id_kat'],
            'data_kategori' => $this->model->GetKat("where id_kat != '$kode' order by id_kat desc")->result_array()
        );
        $this->load->view('kategori/data_kategori', $data);
    }

    function savedata() {
        if ($_POST) {
            $status = $_POST['status'];
            $id_kat = $_POST['id_kat'];
            $kategori = $_POST['kategori'];
            $tgl_input_kat = $_POST['tgl_input_kat'];
            if ($status == "baru") {
                $data = array(
                    'id_kat' => $id_kat,
                    'kategori' => $kategori,
                    'tgl_input_kat' => date("Y-m-d H:i:s"),
                );
                $result = $this->model->Simpan('tb_kategori', $data);
                if ($result == 1) {
                    $this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Simpan data BERHASIL dilakukan</strong></div>");
                    header('location:' . base_url() . 'kategori');
                } else {
                    $this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Simpan data GAGAL di lakukan</strong></div>");
                    header('location:' . base_url() . 'kategori');
                }
            } else {
                $data = array(
                    'kategori' => $kategori
                );
                $result = $this->model->Update('tb_kategori', $data, array('id_kat' => $id_kat));
                if ($result == 1) {
                    $this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Update data BERHASIL dilakukan</strong></div>");
                    header('location:' . base_url() . 'kategori');
                } else {
                    $this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Update data GAGAL di lakukan</strong></div>");
                    header('location:' . base_url() . 'kategori');
                }
            }
        } else {
            echo('handak baapa nyawa tong!!!');
        }
    }

    function hapuskat($kode = 1) {

        $result = $this->model->Hapus('tb_kategori', array('id_kat' => $kode));
        if ($result == 1) {
            $this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Hapus data BERHASIL dilakukan</strong></div>");
            header('location:' . base_url() . 'kategori');
        } else {
            $this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Hapus data GAGAL di lakukan</strong></div>");
            header('location:' . base_url() . 'kategori');
        }
    }

}
