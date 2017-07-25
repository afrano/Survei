<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Outlet extends CI_Controller {

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
        $this->load->view('Outlet/FormInputUser', $data);
    }

    public function Outlet() {
        $data = array(
            'nama' => $this->session->userdata('nama'),
        );
        $this->load->view('Outlet/FormInputOutlet', $data);
    }

    public function DataOutlet() {
        $data_produk = $this->model->GetEdit("where q.id_outlet = 'OT002'")->result_array();

        $data = array(
            'nama' => $this->session->userdata('nama'),
            'id_outlet' => $data_produk[0]['id_outlet'],
            'id_cabang' => $data_produk[0]['id_cabang'],
            'nama_outlet' => $data_produk[0]['nama_outlet'],
            'channel' => $data_produk[0]['channel'],
            'alamat' => $data_produk[0]['alamat'],
            'telpon' => $data_produk[0]['telpon'],
        );
        $this->load->view('Outlet/DataOutlet', $data);
    }

    public function ListDataOutlet() {
        $data = array(
            'nama' => $this->session->userdata('nama'),
            'data_outlet' => $this->model->GetDataOutlet()->result_array(),
        );
        $this->load->view('Outlet/listdataoutlet', $data);
    }

    public function SaveOutlet() {
        $id_outlet = '';
        $id_cabang = $_POST['cabang_outlet'];
        $nama_outlet = $_POST['nama_outlet'];
        $cabang_outlet = $_POST['cabang_outlet'];
        $channel = $_POST['channel'];
        $alamat_outlet = $_POST['alamat_outlet'];
        $telpon_outlet = $_POST['telpon_outlet'];
        $Outlet = array(
            'id_outlet' => $id_outlet,
            'nama_outlet' => $nama_outlet,
            'alamat' => $alamat_outlet,
            'telpon' => $telpon_outlet,
            'channel' => $channel,
            'id_cabang' => $id_cabang,
        );
        $result = $this->model->Simpan('outlet', $Outlet);
        if ($result == 1) {
            $this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Simpan data BERHASIL dilakukan</strong></div>");
            header('location:' . base_url() . 'Outlet/Outlet');
        } else {
            $this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Simpan data GAGAL di lakukan</strong></div>");
            header('location:' . base_url() . 'Outlet/Outlet');
        }
    }

}
