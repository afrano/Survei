<?php

/**
 * Description of MOM
 *
 * @author Amran
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MOM extends CI_Controller {

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
            'data_survei' => $this->model->GetHasilNasional()->result_array(),
        );
        if ($this->session->userdata('level') == '1') {
            $this->load->view('Mom/Data_Mom', $data);
        } else {
            redirect(base_url() . 'login');
        }
    }

}
