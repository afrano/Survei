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
        $pertanyaan1 = $this->model->GetPertanyaan1()->result_array();
        $pertanyaan2 = $this->model->GetPertanyaan2()->result_array();
        $pertanyaan3 = $this->model->GetPertanyaan3()->result_array();
        $pertanyaan4 = $this->model->GetPertanyaan4()->result_array();
        $pertanyaan5 = $this->model->GetPertanyaan5()->result_array();
        $pertanyaan6 = $this->model->GetPertanyaan6()->result_array();
        $pertanyaan7 = $this->model->GetPertanyaan7()->result_array();
        $pertanyaan8 = $this->model->GetPertanyaan8()->result_array();
        $pertanyaan9 = $this->model->GetPertanyaan9()->result_array();
        $pertanyaan10 = $this->model->GetPertanyaan10()->result_array();
        $pertanyaan11 = $this->model->GetPertanyaan11()->result_array();
        $pertanyaan12 = $this->model->GetPertanyaan12()->result_array();
        $pertanyaan13 = $this->model->GetPertanyaan13()->result_array();
        $pertanyaan14 = $this->model->GetPertanyaan14()->result_array();
        $pertanyaan15 = $this->model->GetPertanyaan15()->result_array();
        $pertanyaan16 = $this->model->GetPertanyaan16()->result_array();
        $pertanyaan17 = $this->model->GetPertanyaan17()->result_array();
        $pertanyaan18 = $this->model->GetPertanyaan18()->result_array();
        $pertanyaan19 = $this->model->GetPertanyaan19()->result_array();
        $pertanyaan20 = $this->model->GetPertanyaan20()->result_array();
        $data = array(
            'nama' => $this->session->userdata('nama'),
            'id_user' => $this->session->userdata('id_user'),
            'pertanyaan1' => $pertanyaan1[0]['Pertanyaan'],
            'pertanyaan2' => $pertanyaan2[0]['Pertanyaan'],
            'pertanyaan3' => $pertanyaan3[0]['Pertanyaan'],
            'pertanyaan4' => $pertanyaan4[0]['Pertanyaan'],
            'pertanyaan5' => $pertanyaan5[0]['Pertanyaan'],
            'pertanyaan6' => $pertanyaan6[0]['Pertanyaan'],
            'pertanyaan7' => $pertanyaan7[0]['Pertanyaan'],
            'pertanyaan8' => $pertanyaan8[0]['Pertanyaan'],
            'pertanyaan9' => $pertanyaan9[0]['Pertanyaan'],
            'pertanyaan10' => $pertanyaan10[0]['Pertanyaan'],
            'pertanyaan11' => $pertanyaan11[0]['Pertanyaan'],
            'pertanyaan12' => $pertanyaan12[0]['Pertanyaan'],
            'pertanyaan13' => $pertanyaan13[0]['Pertanyaan'],
            'pertanyaan14' => $pertanyaan14[0]['Pertanyaan'],
            'pertanyaan15' => $pertanyaan15[0]['Pertanyaan'],
            'pertanyaan16' => $pertanyaan16[0]['Pertanyaan'],
            'pertanyaan17' => $pertanyaan17[0]['Pertanyaan'],
            'pertanyaan18' => $pertanyaan18[0]['Pertanyaan'],
            'pertanyaan19' => $pertanyaan19[0]['Pertanyaan'],
            'pertanyaan20' => $pertanyaan20[0]['Pertanyaan'],
        );
        if ($this->session->userdata('level') == '3') {
            $this->load->view('Outlet/FormInputUser', $data);
        } else {
            redirect(base_url() . 'login');
        }
    }

    public function Outlet() {
        $data = array(
            'nama' => $this->session->userdata('nama'),
        );
        $this->load->view('Outlet/FormInputOutlet', $data);
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
