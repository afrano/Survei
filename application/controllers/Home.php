<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

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
            'level' => $this->session->userdata('level'),
            'status' => $this->session->userdata('status'),
        );
        if ($this->session->userdata('level') == '1') {
            $this->load->view('index', $data);
        } else {
            redirect(base_url() . 'login');
        }
    }

}
