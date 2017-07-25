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
    private function cookiesetter($kode = 0) {
        if (!isset($_COOKIE[$kode])) {
            $content = $this->model->GetProduk("where id_produk = '$kode'")->result_array();
            $result = $this->model->Update('tb_produk', array('counter' => ($content[0]['counter'] + 1)), array('id_produk' => $kode));
            if ($result == 1) {
                setcookie($kode, "http://Web_Survei.id.ai", time() + 3600);
            }
        }
    }

    private function countervisitor() {

        if ($this->agent->is_browser()) {
            $agent = $this->agent->browser() . ' ' . $this->agent->version();
        } elseif ($this->agent->is_robot()) {
            $agent = $this->agent->robot();
        } elseif ($this->agent->is_mobile()) {
            $agent = $this->agent->mobile();
        } else {
            $agent = 'Unidentified User Agent';
        }

        $data_visitor = $this->model->GetVisitor("where ip = '" . $_SERVER['REMOTE_ADDR'] . "'")->result_array();
        if ($data_visitor == NULL) {
            $data = array(
                'ip' => $_SERVER['REMOTE_ADDR'],
                'os' => $this->agent->platform(),
                'browser' => $agent,
                'tanggal' => date("Y-m-d H:i:s")
            );
            $this->model->Simpan('tb_visitor', $data);
            $this->session->set_userdata('Web_Survei', "Ridho");
            setcookie("Web_Survei", 'Ridho', time() + 3600 * 24);
        } else {
            if (!isset($_COOKIE['Web_Survei'])) {
                $data_visitor = $this->model->GetVisitor("where ip = '" . $_SERVER['REMOTE_ADDR'] . "' and tanggal = '" . date("Y-m-d H:i:s") . "'");
                if ($data_visitor != NULL) {
                    if (!$this->session->userdata('Web_Survei.com')) {
                        $data = array(
                            'ip' => $_SERVER['REMOTE_ADDR'],
                            'os' => $this->agent->platform(),
                            'browser' => $agent,
                            'tanggal' => date("Y-m-d H:i:s")
                        );
                        $this->model->Simpan('tb_visitor', $data);
                        $this->session->set_userdata('Web_Survei', "Ridho");
                        setcookie("Web_Survei", 'Ridho', time() + 3600 * 24);
                    } else {
                        setcookie("Web_Survei", 'Ridho', time() + 3600 * 24);
                    }
                } else {
                    $data = array(
                        'ip' => $_SERVER['REMOTE_ADDR'],
                        'os' => $this->agent->platform(),
                        'browser' => $agent,
                        'tanggal' => date("Y-m-d H:i:s")
                    );
                    $this->model->Simpan('tb_visitor', $data);
                    $this->session->set_userdata('Web_Survei', "Ridho");
                    setcookie("Web_Survei", 'Ridho', time() + 3600 * 24);
                }
            }
        }
    }

}
