<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Redrock extends CI_Controller {

    public function index() {
        $this->load->helper('url');
        $this->load->view('html_head');
        $this->load->view('preloader');
        $this->load->view('header_menu');
        $this->load->view('hero_image');
        $this->load->view('welcome');
        $this->load->view('services');
        $this->load->view('portfolio');
        $this->load->view('work_process');
        $this->load->view('fun_facts');
        //$this->load->view('team');
        $this->load->view('testimonials');
        $this->load->view('contact_us');
        $this->load->view('google_map');
        $this->load->view('footer');
    }
    
    public function portfolio() {
        $this->load->view('html_head');
        $this->load->view('header_menu');
        $this->load->view('project');
    }

    public function send_email() {
        $contact_name = $this->input->post('fullName');
        $contact_email = $this->input->post('email');
        $contact_message = $this->input->post('message');
        
        $this->load->library('email');
        $this->email->from($contact_email, $contact_name);
        $this->email->to('redrock@redrock.no');

        $this->email->subject('New message from www.redrock.ro');
        $this->email->message($contact_message);

        $this->email->send();
   
        $data=array();
        if(!$contact_name || !$contact_email || !$contact_message) {
            $data['message'] = 'Something went wrong, please try again!';
            $data['error'] = 1;
        } else {
            $data['message'] = 'The email has successfully been sent!';
            $data['error'] = 0;
        }
        echo json_encode($data);
    }
}
