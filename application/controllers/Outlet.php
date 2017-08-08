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
            redirect(base_url() . 'login');
        }
    }

    public function index() {
        
    }

    function DataOutlet($kode = 0) {
        if ($datauser = $this->model->GetDetailOutlet("where o.id_outlet = '$kode' ")->result_array()) {
            $data = array(
                'nama' => $this->session->userdata('nama'),
                'id_outlet' => $datauser[0]['id_outlet'],
                'id_cabang' => $datauser[0]['id_cabang'],
                'nama_outlet' => $datauser[0]['nama_outlet'],
                'channel' => $datauser[0]['channel'],
                'alamat' => $datauser[0]['alamat'],
                'telpon' => $datauser[0]['Telpon'],
            );
            $this->load->view('Outlet/DataOutlet', $data);
        } else {
            $this->load->view('errors/error_404');
        }
    }

    public function ListDataOutlet() {
        $data = array(
            'nama' => $this->session->userdata('nama'),
            'data_outlet' => $this->model->GetDataOutlet()->result_array(),
        );
        if ($this->session->userdata('level') == '1') {
            $this->load->view('Outlet/listdataoutlet', $data);
        } else {
            redirect(base_url() . 'login');
        }
    }

}
