<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertemuansepi extends CI_Controller {

    public function index($region='Asia',$city='Jakarta'){
        $this->benchmark->mark('code_start');
        $this->load->helper(array('form', 'url','date','language'));

        $this->load->database();
        $this->load->model('user');

        $default = $region."/".$city;
        $format = 'DATE_RFC822';
        $time = now($default);
        $time = standard_date($format, $time);
        $this->benchmark->mark('code_end');
        $eta = $this->benchmark->elapsed_time('code_start', 'code_end');
        $mem = $this->benchmark->memory_usage();
        $data = array(
            'memo'=>$mem,
            'def'=>$default,
            'time'=>$time,
            'eta'=>$eta
        );

        $this->load->view('tgl',$data);
    }

    public function selectReg($region='Asia',$city='Jakarta'){
        $this->benchmark->mark('code_start');
        $this->load->helper(array('form','url','date','html'));
        $this->load->library(array('unit_test', 'table', 'calendar'));

        $default = $region."/".$city;

        $format = 'DATE_W3C';
        $time1 = now($default);
        $time = standard_date($format, $time1);

        $test = $time;
        $expected_result = standard_date($format, $time1);
        $test_name = 'test correct date';
        $notes = "inputan region & kota dibandingkan di test ini";
        
        $this->unit->run($test, $expected_result, $test_name,$notes);

         $aa = $this->unit->result();

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
        $this->benchmark->mark('code_end');

        $eta = $this->benchmark->elapsed_time('code_start', 'code_end');
        $mem = $this->benchmark->memory_usage();
     
        $data = array(
            'memo'=>$mem,
            'time'=>$time,
            'def'=>$default,
            'eta'=>$eta,
            //'unitTest'=>$aa
        );
        
        $this->load->database();
        $this->load->model('hayo');

        $this->hayo->inputTest($aa[0]['Test Name'],$aa[0]['Result'],$aa[0]['File Name'],$aa[0]['Notes']);
        $this->load->view('tgl',$data);
    }
}