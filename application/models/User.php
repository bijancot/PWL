<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Model {
    public $id;
    public $username;
    public $pass;
    public $nama;

    public function inputData($username,$pass,$email){
        $this->db->escape($username);
        $this->db->escape($pass);
        $this->db->escape($email);
        $hoho = "INSERT INTO hoho(username,pass,nama) VALUES(".$this->db->escape($username).",".$this->db->escape($pass).",".$this->db->escape($email).")";

        $this->db->query($hoho);

        echo $this->db->affected_rows();
    }

    public function getData()
    {
            $query = $this->db->get('hoho');
            return $query->result();
    }
    public function hapusData($id,$username)
    {
        $hoho = "DELETE FROM hoho where id=".$this->db->escape($id)."AND".$this->db->escape($username);
        $this->db->query($hoho);

        echo $this->db->affected_rows();
    }
    
}