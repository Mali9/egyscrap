<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

    public function AdminLogin($email, $password) {
        
        //$hashedPassword= sha1($password);
        $q= $this->db->query("select * from users where email = ? and password = ?",array($email, sha1($password)));
      
        if ($q->num_rows() > 0) {
           
            return $q->result();
        } else {
            return FALSE;
        }
    }
     public function reg($data) {
        if ($this->db->insert('users',$data)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }


}