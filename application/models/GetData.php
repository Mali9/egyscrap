<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class GetData extends CI_Model {

    public function get_data($table_name) {
        $q = $this->db->get($table_name);
        return $q->result();
    }

    public function get_data_ordered($table_name) {
        $q = $this->db->query("select * from $table_name order by id desc");
        return $q->result();
    }

    public function get_data_limited($table_name, $cat_id) {
        $q = $this->db->query("select * from $table_name where cat_id = $cat_id  order by id  desc limit 3 ");
        return $q->result();
    }

    public function get_cat_by_id($id) {
        $q = $this->db->query("select * from ads where cat_id = $id  order by id  desc ");
        return $q->result();
    }

    public function get_sub_cat_by_id($id) {
        $q = $this->db->query("select * from ads where sub_cat_id = $id  order by id  desc ");
        return $q->result();
    }

    public function get_ads($id) {
        $q = $this->db->query("select * from ads where id = $id ");
        return $q->result();
    }

    public function get_user($user_id) {
        $q = $this->db->query("select * from users where id = $user_id ");
        return $q->result();
    }

    public function get_offer($table_name) {
        $q = $this->db->query("select * from $table_name order by id desc limit 1");
        return $q->result();
    }

    public function get_slider($table_name) {
        $q = $this->db->query("select * from $table_name order by id desc limit 5");
        return $q->result();
    }

    public function get_all_slider($table_name) {
        $q = $this->db->query("select * from $table_name order by id desc");
        return $q->result();
    }

    public function delete($id) {
        if ($this->db->query("delete from slider where id = $id")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function delete_all($id) {
        if ($this->db->query("delete from all_images where id = $id")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function delete_all_video($id) {
        if ($this->db->query("delete from videos where id = $id")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function update($tabel, $data) {
        $name = $data['name'];
        $email = $data['email'];
        $address = $data['address'];
        $about = $data['about'];
        $fb = $data['fb'];
        $insta = $data['insta'];
        $phone = $data['phone'];


        if ($this->db->query("UPDATE $tabel SET name='$name',email='$email',address='$address',about='$about',fb='$fb',insta='$insta',phone='$phone' WHERE id=2")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
