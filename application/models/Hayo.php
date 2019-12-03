<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hayo extends CI_Model {

    public $test_name;
    public $result;
    public $file_name;
    public $notes;

    public function inputTest($test_name,$result,$file_name,$notes)
    {
        $name = $this->db->escape($test_name);
        $result = $this->db->escape($result);
        $file_name = $this->db->escape($file_name);
        $notes = $this->db->escape($notes);
        
        $hoho = "INSERT INTO indomie(test_name,result,file_name,notes) VALUES($name,$result,$file_name,$notes)";

        $this->db->query($hoho);
    }
}
?>