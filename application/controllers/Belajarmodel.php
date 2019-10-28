<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajarmodel extends CI_Controller {
    
    public function index(){
      echo "halo";
    }

    public function tampil(){

        $this->load->helper(array('html','url'));
        $this->load->library('table');

        $this->load->database();
        $this->load->model('Newmodel');

        $data = $this->Newmodel->getLimit();
        $datata = $this->Newmodel->getData();

        $dato = array(
            'data'=>$data,
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

        $this->load->view('pertemuan6',$dato);
    }
  
}
