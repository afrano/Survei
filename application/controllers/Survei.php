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
            redirect(base_url() . 'login');
        }
    }

    public function index() {
        
    }

    function Pertanyaan() {
        $data_hasil = $this->model->GetPertanyaan()->result_array();
        $data = array(
            'id_user' => $this->session->userdata('id_user'),
            'nama' => $this->session->userdata('nama'),
            'pertanyaan1' => $data_hasil[0]['pertanyaan'],
            'pertanyaan2' => $data_hasil[1]['pertanyaan'],
            'pertanyaan3' => $data_hasil[2]['pertanyaan'],
            'pertanyaan4' => $data_hasil[3]['pertanyaan'],
            'pertanyaan5' => $data_hasil[4]['pertanyaan'],
            'pertanyaan6' => $data_hasil[5]['pertanyaan'],
            'pertanyaan7' => $data_hasil[6]['pertanyaan'],
            'pertanyaan8' => $data_hasil[7]['pertanyaan'],
            'pertanyaan9' => $data_hasil[8]['pertanyaan'],
            'pertanyaan10' => $data_hasil[9]['pertanyaan'],
            'pertanyaan11' => $data_hasil[10]['pertanyaan'],
            'pertanyaan12' => $data_hasil[11]['pertanyaan'],
            'pertanyaan13' => $data_hasil[12]['pertanyaan'],
            'pertanyaan14' => $data_hasil[13]['pertanyaan'],
            'pertanyaan15' => $data_hasil[14]['pertanyaan'],
            'pertanyaan16' => $data_hasil[15]['pertanyaan'],
            'pertanyaan17' => $data_hasil[16]['pertanyaan'],
            'pertanyaan18' => $data_hasil[17]['pertanyaan'],
            'pertanyaan19' => $data_hasil[18]['pertanyaan'],
            'pertanyaan20' => $data_hasil[19]['pertanyaan'],
        );
        if ($this->session->userdata('level') == '1') {
            $this->load->view('Pertanyaan/EditPertanyaan', $data);
        } else if ($this->session->userdata('level') == '3') {
            $this->load->view('Pertanyaan/Pertanyaan', $data);
        } else {
            redirect(base_url() . 'login');
        }
    }

    public function Draft() {
        $data = array(
            'nama' => $this->session->userdata('nama'),
            'data_survei' => $this->model->Getdatasurvei()->result_array(),
        );
        $this->load->view('Hasil/Draft', $data);
    }

    public function SaveSurvei() {
        $id_outlet = $_POST['id_outlet'];
        $id_sales = $_POST['id_sales'];
        $id_hasil = '';
        $id_cabang = $_POST['cabang_outlet'];
        $komentar = $_POST['komentar'];
        $nama_outlet = $_POST['nama_outlet'];
        $cabang_outlet = $_POST['cabang_outlet'];
        $channel = $_POST['channel'];
        $alamat_outlet = $_POST['alamat_outlet'];
        $telpon_outlet = $_POST['telpon_outlet'];
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
            'id_sales' => $id_sales,
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

        $result1 = $this->model->Simpan('hasilsurvei', $data);
        if ($result1 == 1) {
            redirect(base_url() . 'Survei/Terimakasih');
        } else {
            $this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Simpan data GAGAL di lakukan</strong></div>");
            header('location:' . base_url() . 'Survei/Pertanyaan');
        }
    }

    public function Terimakasih() {
        $data = array(
            'nama' => $this->session->userdata('nama'),
        );
        $this->load->view('Pertanyaan/Terimakasih', $data);
    }

    function updatePertanyaan() {
        $data = array(
            'id_Quesioner' => $this->input->post('id_Quesioner'),
            'pertanyaan' => $this->input->post('pertanyaan'),
        );
        $result = $this->model->UpdatePertanyaan($data);
        if ($result >= 0) {
            $this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Data Berhasil Diupdate</strong></div>");
            header('location:' . base_url() . 'Survei/Pertanyaan');
        } else {
            $this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Data Gagal Diupdate</strong></div>");
            header('location:' . base_url() . 'Survei/Pertanyaan');
        }
    }

}
