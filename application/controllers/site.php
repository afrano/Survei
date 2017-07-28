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

}
