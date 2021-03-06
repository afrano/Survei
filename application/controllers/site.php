<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Site extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('currency_format_helper');
    }

    public function index() {
        $this->load->view('site/Welcome');
    }

    public function Aktivasi() {
        $this->load->view('Outlet/Aktivasi');
    }

    public function SaveData() {
        $nama_user = $_POST['id_outlet'];
        $pass_user = $_POST['pass_user'];
        $id_outlet = $_POST['id_outlet'];
        $id_cabang = $_POST['cabang_outlet'];
        $nama_outlet = $_POST['nama_outlet'];
        $cabang_outlet = $_POST['cabang_outlet'];
        $channel = $_POST['channel'];
        $alamat_outlet = $_POST['alamat_outlet'];
        $telpon_outlet = $_POST['telpon_outlet'];
        $status = '1';
        $level = '3';
        $Outlet = array(
            'id_outlet' => $id_outlet,
            'nama_outlet' => $nama_outlet,
            'alamat' => $alamat_outlet,
            'telpon' => $telpon_outlet,
            'channel' => $channel,
            'id_cabang' => $id_cabang,
        );
        $Akun = array(
            'id_user' => $nama_user,
            'nama_user' => $nama_user,
            'pass_user' => $pass_user,
            'nama' => $id_outlet,
            'level' => $level,
            'status' => $status,
        );

        $Cek = 0;
        $Cek = $this->model->CekOutlet($id_outlet)->result_array();
        if ($Cek == NULL) {
            if ($this->model->Simpan('outlet', $Outlet) == 1 && $this->model->Simpan('login', $Akun) == 1) {
                $this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Data berhasil tersimpan silahkan login !!</strong></div>");
                header('location:' . base_url() . 'site/Aktivasi');
            } else {
                $this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Gagal menyimpan data</strong></div>");
                header('location:' . base_url() . 'site/Aktivasi');
            }
        } else {
            $this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Gagal menyimpan data ID Outlet telah digunakan</strong></div>");
            header('location:' . base_url() . 'site/Aktivasi');
        }
    }

}
