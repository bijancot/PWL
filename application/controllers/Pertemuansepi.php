<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertemuansepi extends CI_Controller {

    public function index($region='Asia',$city='Jakarta'){
        $this->benchmark->mark('code_start');
        $this->load->helper(array('form', 'url','date'));

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
        $this->load->helper(array('form', 'url','date','html','language','cookie'));

        $default = $region."/".$city;

        set_cookie('simpan',$default,99999999);
        $format = 'DATE_RFC822';
        $time = now($default);
        $time = standard_date($format, $time);
        $this->benchmark->mark('code_end');
        $eta = $this->benchmark->elapsed_time('code_start', 'code_end');
        $mem = $this->benchmark->memory_usage();
        $data = array(
            'memo'=>$mem,
            'time'=>$time,
            'eta'=>$eta
        );

        $this->load->view('tgl',$data);
    }
}