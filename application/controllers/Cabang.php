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
            'id_user' => $this->session->userdata('id_user'),
            'belum_terverifikasi' => $this->model->GetSurveiOutlet($where = $this->session->userdata('id_user'))->result_array(), //
            'data_terverifikasi' => $this->model->GetTerverifikasi($where = $this->session->userdata('id_user'))->result_array(),
        );
        if ($this->session->userdata('level') == '2') {
            $this->load->view('Cabang/Cabang', $data);
        } else {
            redirect(base_url() . 'login');
        }
    }

    function updatedata() {

        $outlet = array(
            'id_outlet' => $this->input->post('id_outlet'),
            'nama_outlet' => $this->input->post('nama_outlet'),
            'alamat' => $this->input->post('alamat_outlet'),
            'telpon' => $this->input->post('telpon_outlet'),
            'channel' => $this->input->post('channel'),
            'id_cabang' => $this->input->post('id_cabang'),
        );
        $data = array(
            'status' => $this->input->post('status'),
        );
        $result = $this->model->Updatedata($data);
        $result1 = $this->model->UpdateOutlet($outlet);
        if ($result >= 0 && $result1 >= 0) {
            $this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Data Berhasil Diupdate</strong></div>");
            header('location:' . base_url() . 'Data');
        } else {
            $this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Data Gagal Diupdate</strong></div>");
            header('location:' . base_url() . 'Data');
        }
    }

    function Verifikasi($kode = 0) {
        $status = 1;
        $data = array(
            'status' => $status,
        );
        $result = $this->model->Update('hasilsurvei', $data, array('id_hasil' => $kode));

        if ($result == 1) {
            $this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Data Terverifikasi</strong></div>");
            header('location:' . base_url() . 'Cabang');
        } else {
            $this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Data Berhasil Ditolak</strong></div>");
            header('location:' . base_url() . 'Cabang');
        }
    }

    function Hapus($kode = 1) {

        $result = $this->model->Hapus('hasilsurvei', array('id_hasil' => $kode));
        if ($result == 1) {
            $this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Data Berhasil Ditolak</strong></div>");
            header('location:' . base_url() . 'Cabang');
        } else {
            $this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Data Berhasil Ditolak</strong></div>");
            header('location:' . base_url() . 'Cabang');
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
            header('location:' . base_url() . 'Survei/cabang');
        } else {
            $this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Gagal Menyimpan Data</strong></div>");
            header('location:' . base_url() . 'Survei/cabang');
        }
    }

    public function ListDataCabang() {
        $data = array(
            'nama' => $this->session->userdata('nama'),
            'data_cabang' => $this->model->GetDataCabang()->result_array(),
        );
        if ($this->session->userdata('level') == '1') {
            $this->load->view('Cabang/listdatacabang', $data);
        } else {
            redirect(base_url() . 'login');
        }
    }

}
