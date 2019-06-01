<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {
    public function delete($id) {
        $this->db->where('id',$id);
        if($this->db->delete('restaurant'))
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
 

}
