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
    
    function DataOutlet($kode = 0) {
        $datauser = $this->model->GetEdit("where q.id_outlet = '$kode'")->result_array();

        $data = array(
            'nama' => $this->session->userdata('nama'),
            'id_outlet' => $datauser[0]['id_outlet'],
            'id_cabang' => $datauser[0]['id_cabang'],
            'nama_outlet' => $datauser[0]['nama_outlet'],
            'channel' => $datauser[0]['channel'],
            'alamat' => $datauser[0]['alamat'],
            'telpon' => $datauser[0]['telpon'],
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

}