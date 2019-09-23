<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hehe extends CI_Controller {

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
        // $this->load->helper('file');
        $this->load->helper("url");
        echo base_url();
        // $strong = file_get_contents('/mnt/b2c7efbf-ef52-437d-8ca7-e46ea581cbba/Me/Kuliah/CI-web/application/controllers/data.csv');
        // var_dump($strong);
	}
	public function hoho($param)
	{
        $data = array(
            'hoo'=>$param,
            'data'=> array(
                0 => array('NRP' => '161111014', 'Nama' => 'ANDRI ARYANTO DOKE', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'A'),
                1 => array('NRP' => '161111022', 'Nama' => 'EWILDAN AGSHAZAKAKAUMA', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'A'),
                2 => array('NRP' => '171111009', 'Nama' => 'SUPIANUR', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'A'),
                3 => array('NRP' => '171111023', 'Nama' => 'PANJI IMAN BASKORO', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'A'),
                4 => array('NRP' => '171111036', 'Nama' => 'NURAMI NASRULLAH', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'A'),
                5 => array('NRP' => '171111041', 'Nama' => 'ACHMAD RIYAN ADY PURWANTO', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'A'),
                6 => array('NRP' => '171111047', 'Nama' => 'VICTORIA LUNA TERANG LOTUSSA', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'A'),
                7 => array('NRP' => '171111048', 'Nama' => 'SHERLY BRELINDA HARISNA NOVA', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'A'),
                8 => array('NRP' => '171111051', 'Nama' => 'M. IRFAN SYARIFUDDIN', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'A'),
                9 => array('NRP' => '171111062', 'Nama' => 'RYAN CANDRA SUGIANTO', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'A'),
                10 => array('NRP' => '171111068', 'Nama' => 'SUTAN ARIF PAMBUDI', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'A'),
                11 => array('NRP' => '171111070', 'Nama' => 'STEFANO ZAGHALLO SANDAH', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'A'),
                12 => array('NRP' => '171111094', 'Nama' => 'ADITYA FADJAR GRAZIA', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'A'),
                13 => array('NRP' => '171111101', 'Nama' => 'ALFIAN AZIS', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'A'),
                14 => array('NRP' => '171111103', 'Nama' => 'QORIE\' INSYIRA FITRIA', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'A'),
                15 => array('NRP' => '171111114', 'Nama' => 'MARSELIANUS HERDIAN SETYANUGRAHA', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'A'),
                16 => array('NRP' => '171111117', 'Nama' => 'FERY EKA MAHENDRA', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'A'),
                17 => array('NRP' => '171111118', 'Nama' => 'LUQMAN AL-HAKIM', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'A'),
                18 => array('NRP' => '171111120', 'Nama' => 'ROBERT MAHENDRA SETIAWAN', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'A'),
                19 => array('NRP' => '171111121', 'Nama' => 'M. ALDIN YULIS SETIAWAN', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'A'),
                20 => array('NRP' => '171111122', 'Nama' => 'ADI NURCAHYO', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'A'),
                21 => array('NRP' => '141111047', 'Nama' => 'WAHYU TRI ISMOYO', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'C'),
                22 => array('NRP' => '161111053', 'Nama' => 'FAJARIN FITRIANTO LAHAY', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'C'),
                23 => array('NRP' => '171111003', 'Nama' => 'DANIEL HADINATA ADMOJO', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'C'),
                24 => array('NRP' => '171111008', 'Nama' => 'TEOFILUS JODI SAPUTRA', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'C'),
                25 => array('NRP' => '171111011', 'Nama' => 'SHANIA SARASWATI', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'C'),
                26 => array('NRP' => '171111012', 'Nama' => 'FRANSISKUS HANDIKA PUTRA', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'C'),
                27 => array('NRP' => '171111014', 'Nama' => 'M. BAGUS SETIAWAN', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'C'),
                28 => array('NRP' => '171111021', 'Nama' => 'FRANSISCUS ISSER WILLY REZA', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'C'),
                29 => array('NRP' => '171111028', 'Nama' => 'RIFDA AMMARINA KARSITA', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'C'),
                30 => array('NRP' => '171111031', 'Nama' => 'VARELL FAUZAN WIDYATAMAKA', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'C'),
                31 => array('NRP' => '171111035', 'Nama' => 'DANA PRISMAWIJAYADI', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'C'),
                32 => array('NRP' => '171111040', 'Nama' => 'RISKY FERYANSYAH PRIBADI', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'C'),
                33 => array('NRP' => '171111042', 'Nama' => 'TRIO KURNIAWAN', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'C'),
                34 => array('NRP' => '171111043', 'Nama' => 'I MADE RAMA PRATAMA', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'C'),
                35 => array('NRP' => '171111053', 'Nama' => 'ENDARTA SYAFI\'I', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'C'),
                36 => array('NRP' => '171111058', 'Nama' => 'AGUS ALFREDO', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'C'),
                37 => array('NRP' => '171111060', 'Nama' => 'FIERDA STEPHEN', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'C'),
                38 => array('NRP' => '171111061', 'Nama' => 'NOVERENSIA MARGARETA EVA DEO', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'C'),
                39 => array('NRP' => '171111064', 'Nama' => 'RINDA PUTRI AGUSTYANITASARI', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'C'),
                40 => array('NRP' => '171111065', 'Nama' => 'EKA NOVITA CHRISTIN', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'C'),
                41 => array('NRP' => '171111085', 'Nama' => 'WENI TRI SETYA', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'C'),
                42 => array('NRP' => '171111090', 'Nama' => 'FERIANSYAH PRIYATAMA ARSYID', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'C'),
                43 => array('NRP' => '171111115', 'Nama' => 'TITANIA TARA SWASTIKA', 'Kode_MK' => 'TI14KB53', 'Kelas' => 'C'),
                44 => array('NRP' => '151131018', 'Nama' => 'ALI SETYAWAN', 'Kode_MK' => 'SI15KK52', 'Kelas' => 'A'),
                45 => array('NRP' => '161131001', 'Nama' => 'MICHAEL EMMANUEL KARA', 'Kode_MK' => 'SI15KK52', 'Kelas' => 'A'),
                46 => array('NRP' => '161131007', 'Nama' => 'BRANDO DARMA PUTRA PINATIK', 'Kode_MK' => 'SI15KK52', 'Kelas' => 'A'),
                47 => array('NRP' => '161131009', 'Nama' => 'GERALDO JAMES', 'Kode_MK' => 'SI15KK52', 'Kelas' => 'A'),
                48 => array('NRP' => '161131012', 'Nama' => 'HAMZAH FATONI EFENDI', 'Kode_MK' => 'SI15KK52', 'Kelas' => 'A'),
                49 => array('NRP' => '161131025', 'Nama' => 'SIFAQ JORDAN AFRIZAL', 'Kode_MK' => 'SI15KK52', 'Kelas' => 'A'),
                50 => array('NRP' => '171131001', 'Nama' => 'WILFRIDUS OKTA MIRA NUGRAHA', 'Kode_MK' => 'SI15KK52', 'Kelas' => 'A'),
                51 => array('NRP' => '171131002', 'Nama' => 'RIZKY SATRIO WIBOWO', 'Kode_MK' => 'SI15KK52', 'Kelas' => 'A'),
                52 => array('NRP' => '171131005', 'Nama' => 'MUHAMMAD CHOIRUL PUTRA PRATAMA', 'Kode_MK' => 'SI15KK52', 'Kelas' => 'A'),
                53 => array('NRP' => '171131007', 'Nama' => 'WILDAN SYAHRUL RAMADHAN', 'Kode_MK' => 'SI15KK52', 'Kelas' => 'A'),
                54 => array('NRP' => '171131009', 'Nama' => 'YOSIA ADITYA BUDIARTO', 'Kode_MK' => 'SI15KK52', 'Kelas' => 'A'),
                55 => array('NRP' => '171131011', 'Nama' => 'RICKO HARDIANTO', 'Kode_MK' => 'SI15KK52', 'Kelas' => 'A'),
                56 => array('NRP' => '171131014', 'Nama' => 'MUHAMMAD ZARKASI NUR', 'Kode_MK' => 'SI15KK52', 'Kelas' => 'A'),
                57 => array('NRP' => '171131016', 'Nama' => 'FANO GILANG BHAGASKARA', 'Kode_MK' => 'SI15KK52', 'Kelas' => 'A'),
                58 => array('NRP' => '171131017', 'Nama' => 'MUHAMAD FAZDOL', 'Kode_MK' => 'SI15KK52', 'Kelas' => 'A'),
                59 => array('NRP' => '171131018', 'Nama' => 'NAVIEN WANDA MASHUDA', 'Kode_MK' => 'SI15KK52', 'Kelas' => 'A'),
                60 => array('NRP' => '171132001', 'Nama' => 'MUHAMMAD NIZAR RAMADHANI', 'Kode_MK' => 'SI15KK52', 'Kelas' => 'A'),
                61 => array('NRP' => '191132001', 'Nama' => 'ROSIHAN ANDIN PAMBUDI', 'Kode_MK' => 'SI15KK52', 'Kelas' => 'A'),
            )
        );

        $this->load->view('alfianiis',$data);
	}
}
