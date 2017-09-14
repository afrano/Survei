
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_login extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function proses_login() {
        $nama_user = $this->input->post('nama_user');
        $nama = $this->input->post('nama');
        $pass_user = ($_POST['pass_user']);

        $query = $this->db->query("Select * from login Where nama_user = '$nama_user' and (pass_user = '$pass_user' or nama = '$nama')");
        if ($query->num_rows() > 0) {

            $row = $query->row();
            $id_user = $row->id_user;
            $pass_user = $row->pass_user;
            $nama = $row->nama;
            $level = $row->level;
            $status = $row->status;

            if ($pass_user == $pass_user AND $status == 1) {
                //ambil nama
                $q = "SELECT * FROM login where id_user='" . $id_user . "'";
                $bidang = $this->db->query($q)->row();
                $c = '";s:1:"';
                $sql = "SELECT * FROM ci_sessions WHERE user_data LIKE '%id_user" . $c . $id_user . "%'";
                $cek = $this->db->query($sql)->num_rows();

                $this->session->set_userdata('id_user', $id_user);
                $this->session->set_userdata('nama', $nama);
            }
        }
}}