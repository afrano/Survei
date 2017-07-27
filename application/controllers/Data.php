<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data extends CI_Controller {

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
        $data = array(
            'nama' => $this->session->userdata('nama'),
            'data_survei' => $this->model->GetHasilNasional()->result_array(),
        );
        if ($this->session->userdata('level') == '1') {
            $this->load->view('Hasil/data_survei', $data);
        } else {
            redirect(base_url() . 'login');
        }
    }

    function Edit($kode = 0) {
        $data_hasil = $this->model->GetEdit("where h.id_hasil = '$kode'")->result_array();
        $data = array(
            'nama' => $this->session->userdata('nama'),
            'id_outlet' => $data_hasil[0]['id_outlet'],
            'id_cabang' => $data_hasil[0]['id_cabang'],
            'nama_outlet' => $data_hasil[0]['nama_outlet'],
            'tahun_survei' => $data_hasil[0]['tahun'],
            'channel' => $data_hasil[0]['channel'],
            'semester' => $data_hasil[0]['semester'],
            'alamat' => $data_hasil[0]['alamat'],
            'telpon' => $data_hasil[0]['telpon'],
            'kepuasan1' => $data_hasil[0]['Q01'],
            'kepuasan2' => $data_hasil[0]['Q02'],
            'kepuasan3' => $data_hasil[0]['Q03'],
            'kepuasan4' => $data_hasil[0]['Q04'],
            'kepuasan5' => $data_hasil[0]['Q05'],
            'kepuasan6' => $data_hasil[0]['Q06'],
            'kepuasan7' => $data_hasil[0]['Q07'],
            'kepuasan8' => $data_hasil[0]['Q08'],
            'kepuasan9' => $data_hasil[0]['Q09'],
            'kepuasan10' => $data_hasil[0]['Q10'],
            'kepuasan11' => $data_hasil[0]['Q11'],
            'kepuasan12' => $data_hasil[0]['Q12'],
            'kepuasan13' => $data_hasil[0]['Q13'],
            'kepuasan14' => $data_hasil[0]['Q14'],
            'kepuasan15' => $data_hasil[0]['Q15'],
            'kepuasan16' => $data_hasil[0]['Q16'],
            'kepuasan17' => $data_hasil[0]['Q17'],
            'kepuasan18' => $data_hasil[0]['Q18'],
            'kepuasan19' => $data_hasil[0]['Q19'],
            'kepuasan20' => $data_hasil[0]['Q20'],
            'kepentingan1' => $data_hasil[0]['K01'],
            'kepentingan2' => $data_hasil[0]['K02'],
            'kepentingan3' => $data_hasil[0]['K03'],
            'kepentingan4' => $data_hasil[0]['K04'],
            'kepentingan5' => $data_hasil[0]['K05'],
            'kepentingan6' => $data_hasil[0]['K06'],
            'kepentingan7' => $data_hasil[0]['K07'],
            'kepentingan8' => $data_hasil[0]['K08'],
            'kepentingan9' => $data_hasil[0]['K09'],
            'kepentingan10' => $data_hasil[0]['K10'],
            'kepentingan11' => $data_hasil[0]['K11'],
            'kepentingan12' => $data_hasil[0]['K12'],
            'kepentingan13' => $data_hasil[0]['K13'],
            'kepentingan14' => $data_hasil[0]['K14'],
            'kepentingan15' => $data_hasil[0]['K15'],
            'kepentingan16' => $data_hasil[0]['K16'],
            'kepentingan17' => $data_hasil[0]['K17'],
            'kepentingan18' => $data_hasil[0]['K18'],
            'kepentingan19' => $data_hasil[0]['K19'],
            'kepentingan20' => $data_hasil[0]['K20'],
        );
        $this->load->view('Outlet/FormEdit', $data);
    }

    public function export_excel() {
        if ($this->session->userdata('level') == '1') {
            $data = array('title' => 'Database',
                'data_survei' => $this->model->GetHasilNasional()->result_array(),
            );
            $this->load->view('Hasil/Excel', $data);
        } else if ($this->session->userdata('level') == '2') {
            $data = array('title' => 'Database',
                'data_survei' => $this->model->GetTerverifikasi($where = $this->session->userdata('id_user'))->result_array(),
            );
            $this->load->view('Hasil/Excel', $data);
        } else {
            redirect(base_url() . 'index');
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
            'id_hasil' => $this->input->post('id_hasil'),
            'tahun' => $this->input->post('tahun_survei'),
            'semester' => $this->input->post('semester'),
            'Q01' => $this->input->post('kepuasan1'),
            'Q02' => $this->input->post('kepuasan2'),
            'Q03' => $this->input->post('kepuasan3'),
            'Q04' => $this->input->post('kepuasan4'),
            'Q05' => $this->input->post('kepuasan5'),
            'Q06' => $this->input->post('kepuasan6'),
            'Q07' => $this->input->post('kepuasan7'),
            'Q08' => $this->input->post('kepuasan8'),
            'Q09' => $this->input->post('kepuasan9'),
            'Q10' => $this->input->post('kepuasan10'),
            'Q11' => $this->input->post('kepuasan11'),
            'Q12' => $this->input->post('kepuasan12'),
            'Q13' => $this->input->post('kepuasan13'),
            'Q14' => $this->input->post('kepuasan14'),
            'Q15' => $this->input->post('kepuasan15'),
            'Q16' => $this->input->post('kepuasan16'),
            'Q17' => $this->input->post('kepuasan17'),
            'Q18' => $this->input->post('kepuasan18'),
            'Q19' => $this->input->post('kepuasan19'),
            'Q20' => $this->input->post('kepuasan20'),
            'K01' => $this->input->post('kepentingan1'),
            'K02' => $this->input->post('kepentingan2'),
            'K03' => $this->input->post('kepentingan3'),
            'K04' => $this->input->post('kepentingan5'),
            'K05' => $this->input->post('kepentingan5'),
            'K06' => $this->input->post('kepentingan6'),
            'K07' => $this->input->post('kepentingan7'),
            'K08' => $this->input->post('kepentingan8'),
            'K09' => $this->input->post('kepentingan9'),
            'K10' => $this->input->post('kepentingan10'),
            'K11' => $this->input->post('kepentingan11'),
            'K12' => $this->input->post('kepentingan12'),
            'K13' => $this->input->post('kepentingan13'),
            'K14' => $this->input->post('kepentingan14'),
            'K15' => $this->input->post('kepentingan15'),
            'K16' => $this->input->post('kepentingan16'),
            'K17' => $this->input->post('kepentingan17'),
            'K18' => $this->input->post('kepentingan18'),
            'K19' => $this->input->post('kepentingan19'),
            'K20' => $this->input->post('kepentingan20'),
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

    function Hapus($kode = 1) {

        $result = $this->model->Hapus('hasilsurvei', array('id_outlet' => $kode));
        if ($result == 1) {
            $this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Hapus data BERHASIL dilakukan</strong></div>");
            header('location:' . base_url() . 'Data');
        } else {
            $this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Hapus data GAGAL di lakukan</strong></div>");
            header('location:' . base_url() . 'Data');
        }
    }

}
