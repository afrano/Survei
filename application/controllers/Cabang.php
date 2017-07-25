<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cabang extends CI_Controller {

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
        );
        if ($this->session->userdata('level') == '1') {
            $this->load->view('Cabang/InputCabang', $data);
        } else {
            $this->session->sess_destroy();
            redirect(base_url() . 'index.php');
        }
    }

    public function SaveCabang() {
        $id_cabang = $_POST['id_cabang'];
        $alamat_cabang = $_POST['alamat_cabang'];
        $telpon = $_POST['telpon_cabang'];
        $regional = $_POST['regional'];

        $data = array(
            'id_cabang' => $id_cabang,
            'regional' => $regional,
            'alamat_cabang' => $alamat_cabang,
            'telpon_cabang' => $telpon,
        );
        $result = $this->model->Simpan('cabang', $data);
        if ($result == 1) {
            $this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Data Tersimpan</strong></div>");
            header('location:' . base_url() . 'Cabang');
        } else {
            $this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Gagal Menyimpan Data</strong></div>");
            header('location:' . base_url() . 'Cabang');
        }
    }

    public function ListDataCabang() {
        $data = array(
            'nama' => $this->session->userdata('nama'),
            'data_cabang' => $this->model->GetDataCabang()->result_array(),
        );
        $this->load->view('Cabang/listdatacabang', $data);
    }

}
