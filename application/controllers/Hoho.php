<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hoho extends CI_Controller {

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
        echo "hooo";
	}
	public function coba($param="sdsd")
	{
        echo $param;
	}
	public function hitung($uas=0,$uts=0,$tugas=0)
	{
		if($uts<=0){
			echo "tidak lulus E";
		}else {
			$Huas=($uas*40)/100;
		$Huts=($uts*30)/100;
		$Htugas=($tugas*30)/100;

		$nilai= $Huas+$Huts+$Htugas;

		echo "nilai dalam bentuk angka :".$nilai."<br/>";

		if ($nilai>=85 && $nilai <=100)
        {
            echo "Nilai dalam bentuk huruf A";
        }
        else if ($nilai>75 && $nilai <=84)
        {
            echo "Nilai dalam bentuk huruf B";
        }
        else if ($nilai>60 && $nilai <=74)
        {
            echo "Nilai dalam bentuk huruf C";
        }
        else if ($nilai>46 && $nilai <=59)
        {
            echo "Nilai dalam bentuk huruf D";
        }
        else if ($nilai>0 && $nilai <=45)
        {
            echo "Nilai dalam bentuk huruf E";
        }
        else
        {
            echo "Nilai Yang Anda Inputkan Salah !! ";
        }
		}
	}
}
