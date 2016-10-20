<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

    public function index() {
        $this->load->helper('url');
        $this->load->view('html_head');
        $this->load->view('header');
    }

    
}
