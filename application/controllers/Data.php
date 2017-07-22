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
            'data_survei' => $this->model->Getdatasurvei()->result_array(),
        );

        $this->load->view('Hasil/data_survei', $data);
    }

    function Edit($kode = 0) {
        $data_produk = $this->model->Getdatasurvei("where q.id_outlet = '$kode'")->result_array();
        
        $data = array(
            'nama' => $this->session->userdata('nama'),
            'id_outlet' => $data_produk[0]['id_outlet'],
            'cabang_outlet' => $data_produk[0]['cabang_outlet'],
            'kepuasan1' => $data_produk[0]['Q01'],
            'kepuasan2' => $data_produk[0]['Q02'],
            'kepuasan3' => $data_produk[0]['Q03'],
            'kepuasan4' => $data_produk[0]['Q04'],
            'kepuasan5' => $data_produk[0]['Q05'],
            'kepuasan6' => $data_produk[0]['Q06'],
            'kepuasan7' => $data_produk[0]['Q07'],
            'kepuasan8' => $data_produk[0]['Q08'],
            'kepuasan9' => $data_produk[0]['Q09'],
            'kepuasan10' => $data_produk[0]['Q10'],
            'kepuasan11' => $data_produk[0]['Q11'],
            'kepuasan12' => $data_produk[0]['Q12'],
            'kepuasan13' => $data_produk[0]['Q13'],
            'kepuasan14' => $data_produk[0]['Q14'],
            'kepuasan15' => $data_produk[0]['Q15'],
            'kepuasan16' => $data_produk[0]['Q16'],
            'kepuasan17' => $data_produk[0]['Q17'],
            'kepuasan18' => $data_produk[0]['Q18'],
            'kepuasan19' => $data_produk[0]['Q19'],
            'kepuasan20' => $data_produk[0]['Q20'],
            'kepentingan1' => $data_produk[0]['K01'],
            'kepentingan2' => $data_produk[0]['K02'],
            'kepentingan3' => $data_produk[0]['K03'],
            'kepentingan4' => $data_produk[0]['K04'],
            'kepentingan5' => $data_produk[0]['K05'],
            'kepentingan6' => $data_produk[0]['K06'],
            'kepentingan7' => $data_produk[0]['K07'],
            'kepentingan8' => $data_produk[0]['K08'],
            'kepentingan9' => $data_produk[0]['K09'],
            'kepentingan10' => $data_produk[0]['K10'],
            'kepentingan11' => $data_produk[0]['K11'],
            'kepentingan12' => $data_produk[0]['K12'],
            'kepentingan13' => $data_produk[0]['K13'],
            'kepentingan14' => $data_produk[0]['K14'],
            'kepentingan15' => $data_produk[0]['K15'],
            'kepentingan16' => $data_produk[0]['K16'],
            'kepentingan17' => $data_produk[0]['K17'],
            'kepentingan18' => $data_produk[0]['K18'],
            'kepentingan19' => $data_produk[0]['K19'],
            'kepentingan20' => $data_produk[0]['K20'],
        );
        $this->load->view('User/FormEdit', $data);
    }

    public function export_excel() {
        $data = array('title' => 'Database',
            'data_survei' => $this->model->Getdatasurvei()->result_array(),);

        $this->load->view('Hasil/Excel', $data);
    }

    function savedata() {
        $config = array(
            'upload_path' => './assets/upload',
            'allowed_types' => 'gif|jpg|JPG|png',
            'max_size' => '2048',
        );
        $this->load->library('upload', $config);
        $this->upload->do_upload('file_upload');
        $upload_data = $this->upload->data();

        $id_produk = '';
        $judul = $_POST['judul'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];
        $kondisi = $_POST['kondisi'];
        $id_merk = $_POST['id_merk'];
        $id_kat = $_POST['id_kat'];
        $status = $_POST['status'];
        $ket = $_POST['ket'];
        $tgl_input_pro = $_POST['tgl_input_pro'];
        $file_name = $upload_data['file_name'];

        $data = array(
            'id_produk' => $id_produk,
            'judul' => $judul,
            'harga' => $harga,
            'jumlah' => $jumlah,
            'kondisi' => $kondisi,
            'id_merk' => $id_merk,
            'id_kat' => $id_kat,
            'status' => $status,
            'ket' => $ket,
            'tgl_input_pro' => date("Y-m-d H:i:s"),
            'foto' => $file_name,
        );

        $result = $this->model->Simpan('tb_produk', $data);
        if ($result == 1) {
            $this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Simpan data BERHASIL dilakukan</strong></div>");
            header('location:' . base_url() . 'produk');
        } else {
            $this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Simpan data GAGAL di lakukan</strong></div>");
            header('location:' . base_url() . 'produk');
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

    function updateproduk() {
        if ($_FILES['file_upload']['error'] == 0):
            $config = array(
                'upload_path' => './assets/upload',
                'allowed_types' => 'gif|jpg|JPG|png',
                'max_size' => '2048',
            );
            $this->load->library('upload', $config);
            $this->upload->do_upload('file_upload');
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];
        else:
            $file_name = $this->input->post('foto');
        endif;

        $data = array(
            'id_produk' => $this->input->post('id_produk'),
            'judul' => $this->input->post('judul'),
            'harga' => $this->input->post('harga'),
            'jumlah' => $this->input->post('jumlah'),
            'kondisi' => $this->input->post('kondisi'),
            'id_merk' => $this->input->post('id_merk'),
            'id_kat' => $this->input->post('id_kat'),
            'tgl_input_pro' => $this->input->post('tgl_input_pro'),
            'status' => $this->input->post('status'),
            'ket' => $this->input->post('ket'),
            'foto' => $file_name,
        );

        $res = $this->model->UpdateProduk($data);
        if ($res >= 0) {
            $this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Update data BERHASIL di lakukan</strong></div>");
            header('location:' . base_url() . 'produk');
        } else {
            $this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Update data GAGAL di lakukan</strong></div>");
            header('location:' . base_url() . 'produk');
        }
    }

    public function simpan() {
        $id['kode'] = $this->input->post('id', TRUE);
        $data_array = $this->add_data(array('kode', 'nip', 'jenisarsip', 'tanggal', 'titel', 'deskripsi',
            'kodearsip', 'lokasifisik', 'catatan'), TRUE);

        // kita cek dulu dengan kode error 4
        if (!in_array(4, $_FILES['lampiran']['error'])) {
            // jika file tidak kosong tambahkan file gambar
            //$file1 = array();
            if ($this->input->post('dok') == !NULL) {
                $file1 = $this->upload($_FILES['lampiran']['name']);
                $file2 = $this->input->post('dok');
                $lampiran = $file1 . '*' . $file2;
                $file['lampiran'] = $lampiran;
            } else {
                $file1 = $this->upload($_FILES['lampiran']['name']);
                $file['lampiran'] = $file1;
            }
        } else {
            $file['lampiran'] = $this->input->post('dok');
        }

        if ($this->input->post(NULL, TRUE) == TRUE) {
            $data = array_merge($data_array, $file);
            if ($id['kode'] == false or $id['kode'] == null) {
                //print_r($_POST); die();
                $this->model_home->tambah_data('tbl_arsip_kegiatan', $data);
                $this->pesan('pesan', 'Berhasil Menyimpan Data');
                redirect(base_url() . 'arsip_kegiatan/tambah');
            } else {

                $this->model_home->update_data($id, 'tbl_arsip_kegiatan', $data);
                $this->pesan('pesan', 'Berhasil Mengubah Data');
                redirect(base_url() . 'arsip_kegiatan/tambah');
            }
        }
    }

}
