<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertemuan7 extends CI_Controller {

    public function index(){
        $this->load->helper(array('html','url',));
        $this->load->library(array('table','form_validation'));

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required',
                array('required' => 'You must provide a %s.')
        );
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('views7');
        }
        else
        {
                $this->load->view('views7');
        }
    }
    public function inputData(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
    }
}