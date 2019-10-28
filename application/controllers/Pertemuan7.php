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
            $this->load->database();
            $this->load->model('user');

            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $email = $this->input->post('email');

            $this->user->inputData($username,$password,$email);
        }
    }
    public function tampilSemua(){
        $this->load->helper(array('html','url',));
        $this->load->library(array('table','form_validation'));

        $this->load->database();
        $this->load->model('user');

        $datata = $this->user->getData();

        $dato = array(
            'dati'=>$datata
        );

        $template = array(
            'table_open'            => '<table border="0" cellpadding="4" cellspacing="0" class="table table-striped">',
    
            'thead_open'            => '<thead>',
            'thead_close'           => '</thead>',
    
            'heading_row_start'     => '<tr>',
            'heading_row_end'       => '</tr>',
            'heading_cell_start'    => '<th>',
            'heading_cell_end'      => '</th>',
    
            'tbody_open'            => '<tbody>',
            'tbody_close'           => '</tbody>',
    
            'row_start'             => '<tr>',
            'row_end'               => '</tr>',
            'cell_start'            => '<td>',
            'cell_end'              => '</td>',
    
            'row_alt_start'         => '<tr>',
            'row_alt_end'           => '</tr>',
            'cell_alt_start'        => '<td>',
            'cell_alt_end'          => '</td>',
    
            'table_close'           => '</table>'
    );
    
    $this->table->set_template($template);

        $this->load->view('views7-tampil',$dato);
    }

    public function hapusData($iduser,$username){
        $this->load->database();
        $this->load->model('user');
        
        $this->user->hapusData($iduser,$username);
    }

}