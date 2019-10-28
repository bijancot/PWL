<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Newmodel extends CI_Model {

    public $id;
    public $username;
    public $pass;
    public $nama;

    public function getData()
    {
            $query = $this->db->get('hoho');
            return $query->result();
    }
    public function getLimit($lim='1')
    {
            $query = $this->db->get('hoho',$lim);
            return $query->result();
    }
}
?>