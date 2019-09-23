<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertemuan3 extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $this->load->view('per3');
	}
	public function validasi()
	{
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required',
                array('required' => 'You must provide a %s.')
        );
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('valid');
        }
        else
        {
                $this->load->view('suc');
        }
    }
    public function tugas(){
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('uas', 'UAS', 'required');
        $this->form_validation->set_rules('uts', 'UTS', 'required',
                array('required' => 'You must provide a %s.')
        );
        $this->form_validation->set_rules('tugas', 'TUGAS', 'required');

        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('valid2');
        }
        else
        {
            $uts = $this->input->post('uts');
            $uas = $this->input->post('uas');
            $tugas = $this->input->post('tugas');

            $something1 = array(
                'uts'=>$uts,
                'uas'=>$uas,
                'tugas'=>$tugas
            );

                $this->load->view('succ',$something1);

        }
    }
}
