<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    function index() {

        $db = 'm_login';
        $sub_data['info'] = $this->session->userdata('info');
        if ($this->input->post('login')) {
            $this->form_validation->set_rules('nama_user', 'Nama Pengguna', 'trim|required|max_length[20]|xss_clean');
            $this->form_validation->set_rules('pass_user', 'Password', 'trim|required|max_length[20]|xss_clean');
            $this->form_validation->set_error_delimiters('<div class="warning-valid">', '</div>');
            if ($this->form_validation->run() == TRUE) {
                $this->$db->proses_login();
            }
        }
        $this->load->view('login/login', $sub_data);

        $this->session->unset_userdata('info');
    }

//login_1

    public function lupapassword() {
         $db = 'm_login';
        $sub_data['info'] = $this->session->userdata('info');
        if ($this->input->post('login')) {
            $this->form_validation->set_rules('nama_user', 'Nama Pengguna', 'trim|required|max_length[20]|xss_clean');
            $this->form_validation->set_rules('pass_user', 'Password', 'trim|required|max_length[20]|xss_clean');
            $this->form_validation->set_error_delimiters('<div class="warning-valid">', '</div>');
            if ($this->form_validation->run() == TRUE) {
                $this->$db->proses_login();
            }
        }
        $this->load->view('login/login_1', $sub_data);

        $this->session->unset_userdata('info');
    }

    public function proseslog() {
        $data = array(
            'nama_user' => $this->input->post('nama_user', TRUE),
            'pass_user' => $this->input->post('pass_user', TRUE),
        );

        $hasil = $this->model->GetUser($data);
        if ($hasil->num_rows() == 1) {
            foreach ($hasil->result() as $sess) {
                $sess_data['id_user'] = $sess->id_user;
                $sess_data['nama_user'] = $sess->nama_user;
                $sess_data['nama'] = $sess->nama;
                $sess_data['level'] = $sess->level;
                $sess_data['pass_user'] = $sess->pass_user;
                $this->session->set_userdata($sess_data);
            }
            if ($this->session->userdata('level') == '1') {
                $this->session->set_userdata('useradmin', $sess_data);
                redirect(base_url() . "Home");
            } else if ($this->session->userdata('level') == '2') {
                $this->session->set_userdata('useradmin', $sess_data);
                redirect(base_url() . "Cabang");
                $this->session->set_userdata('Web_Survei', $sess_data);
                redirect(base_url());
            } else if ($this->session->userdata('level') == '3') {
                $this->session->set_userdata('useradmin', $sess_data);
                redirect(base_url() . "Survei/Pertanyaan");
                $this->session->set_userdata('Web_Survei', $sess_data);
                redirect(base_url());
            }
        } else {
            $info = '<div style="color:red">PERIKSA KEMBALI NAMA PENGGUNA DAN PASSWORD ANDA !!!</div>';
            $this->session->set_userdata('info', $info);

            redirect(base_url() . 'login');
        }
    }

    function Updatepassword() {
        $data = array(
            'id_user' => $this->input->post('id_user'),
            'pass_user' => $this->input->post('pass_user'),
        );
        $result = $this->model->UpdatePassword($data);
        if ($this->session->userdata('level') == '1') {
            if ($result >= 0) {
                $this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Password Berhasil Diupdate</strong></div>");
                header('location:' . base_url() . 'Cabang/reset_password');
            } else {
                $this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Password Gagal Diupdate</strong></div>");
                header('location:' . base_url() . 'Cabang/reset_password');
            }
        } else if ($this->session->userdata('level') == '2') {
            if ($result >= 0) {
                $this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Password Berhasil Diupdate</strong></div>");
                header('location:' . base_url() . 'Cabang/reset_password');
            } else {
                $this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Password Gagal Diupdate</strong></div>");
                header('location:' . base_url() . 'Cabang/reset_password');
            }
        } else if ($this->session->userdata('level') == '3') {
            if ($result >= 0) {
                $this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Password Berhasil Diupdate</strong></div>");
                header('location:' . base_url() . 'Outlet/DataOutlet/' . $this->input->post('id_user'));
            } else {
                $this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Password Gagal Diupdate</strong></div>");
                header('location:' . base_url() . 'Outlet/DataOutlet/' . $this->input->post('id_user'));
            }
        } else {
            redirect(base_url() . 'login');
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect(base_url() . 'index.php');
    }

}
