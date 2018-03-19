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
            redirect(base_url() . 'login');
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
        } else if ($this->session->userdata('level') == '4') {
            $this->load->view('Cabang/Home_Cabang', $data);
        } else {
            redirect(base_url() . 'login');
        }
    }

    public function InputCabang() {
        $data = array(
            'nama' => $this->session->userdata('nama'),
        );
        if ($this->session->userdata('level') == '1') {
            $this->load->view('Cabang/InputCabang', $data);
        } else {
            redirect(base_url() . 'login');
        }
    }

    public function Inputsales() {
        $data = array(
            'nama' => $this->session->userdata('nama'),
            'id_user' => $this->session->userdata('id_user'),
            'listSales' => $this->model->GetSales($where = $this->session->userdata('id_user'))->result_array(),
        );
        if ($this->session->userdata('level') == '2') {
            $this->load->view('Cabang/InputSales', $data);
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
            $this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Data berhasil diupdate</strong></div>");
            header('location:' . base_url() . 'Data');
        } else {
            $this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Data gagal diupdate</strong></div>");
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

    function reset_password() {
        $data = array(
            'nama' => $this->session->userdata('nama'),
            'id_user' => $this->session->userdata('id_user'),
            'listSales' => $this->model->GetSales($where = $this->session->userdata('id_user'))->result_array(),
        );
        $this->load->view('Cabang/reset_password', $data);
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

    function HapusCabang($kode = 1) {
        if ($this->session->userdata('level') == '1') {
            $result = $this->model->Hapus('cabang', array('id_cabang' => $kode));
            if ($result == 1) {
                $this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Data Berhasil Dihapus</strong></div>");
                header('location:' . base_url() . 'Cabang/ListDataCabang');
            } else {
                $this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Data Gagal Dihapus</strong></div>");
                header('location:' . base_url() . 'Cabang/ListDataCabang');
            }
        } else {
            redirect(base_url() . 'login');
        }
    }

    function HapusSales($kode = 1) {
        if ($this->session->userdata('level') == '2') {
            $result = $this->model->Hapus('sales', array('id_sales' => $kode));
            if ($result == 1) {
                $this->session->set_flashdata("berhasil", "<div class='alert alert-success'><strong>Data Berhasil Dihapus </strong></div>");
                header('location:' . base_url() . 'Cabang/InputSales');
            } else {
                $this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Gagal Menghapus </strong></div>");
                header('location:' . base_url() . 'Cabang/InputSales');
            }
        } else {
            redirect(base_url() . 'login');
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
        $Cek = 0;
        $Cek = $this->model->CekCabang($id_cabang)->result_array();
        if ($Cek == NULL) {
            $result = $this->model->Simpan('cabang', $data);
            if ($result == 1) {
                $this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Data Tersimpan</strong></div>");
                header('location:' . base_url() . 'Cabang/InputCabang');
            } else {
                $this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Gagal Menyimpan Data</strong></div>");
                header('location:' . base_url() . 'Cabang/InputCabang');
            }
        } else {
            $this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>ID Cabang Telah Digunakan</strong></div>");
            header('location:' . base_url() . 'Cabang/InputCabang');
        }
    }

    public function SaveSales() {
        $nama_sales = $_POST['nama_sales'];
        $id_sales = $_POST['id_sales'];
        $id_cabang = $_POST['id_cabang'];

        $data = array(
            'nama_sales' => $nama_sales,
            'id_sales' => $id_sales,
            'id_cabang' => $id_cabang,
        );
        //  $Cek = 0;
        //     $Cek = $this->model->Ceksales($id_sales)->result_array();
        if ($Cek == NULL) {
            $this->model->Simpan('sales', $data);
            $this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Data Berhasil Disimpan</strong></div>");
            header('location:' . base_url() . 'Cabang/InputSales');
        } else {
            $this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Maaf ID Sales telah digunakan</strong></div>");
            header('location:' . base_url() . 'Cabang/InputSales');
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
