<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class export extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->_cek_login();
        $this->load->helper('currency_format_helper');
    }

    private function _cek_login() {
        if (!$this->session->userdata('useradmin')) {
            redirect(base_url() . 'backend');
        }
    }

    public function index() {
        // Fungsi header dengan mengirimkan raw data excel
        header("Content-type: application/vnd-ms-excel");

// Mendefinisikan nama file ekspor "hasil-export.xls"
        header("Content-Disposition: attachment; filename=tutorialweb-export.xls");

// Tambahkan table
        $this->load->view('Hasil/data_survai.php');
    }

}
?>