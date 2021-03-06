<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Rekap extends CI_Controller {

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
        $data = array(
            'nama' => $this->session->userdata('nama'),
            'rekap_data' => $this->model->GetHitungPemilih()->result_array(),
        );

        $this->load->view('Rekap/rekap_data', $data);
    }

}
