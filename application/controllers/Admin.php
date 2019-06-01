<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index() {
        $data['cats'] = $this->GetData->get_data_ordered('cats');
        $data['sub_cat'] = $this->GetData->get_data_ordered('sub_cat');
        $this->load->view('login', $data);
    }

    public function reg() {
        $data['cats'] = $this->GetData->get_data_ordered('cats');
        $data['sub_cat'] = $this->GetData->get_data_ordered('sub_cat');
        $this->load->view('register', $data);
    }

    public function login() {
        if (isset($_POST)) {
            $user_id=0;
            $email = htmlentities(htmlspecialchars($this->input->post('email')));
            $password = htmlentities(htmlspecialchars($this->input->post('password')));
            $data = $this->LoginModel->AdminLogin($email, $password);
            foreach ($data as $user) {
                $user_id=$user->id;
            }

            if ($data == FALSE) {
                $this->session->set_flashdata('logged_in', 'خطأ فى الاسم او الباسورد حاول مره اخري');
                redirect('Admin');
            } else {
                $this->session->set_userdata(array(
                    'logged_in' => TRUE,
                    'id'=>$user_id,
                    
                ));
                redirect('Home');
            }
        } else {
            redirect('Admin');
        }
    }

    public function register() {


        if (isset($_POST)) {
            $this->form_validation->set_message('regex_match', 'The password must contain at least one upper alphapet and number');
            $this->form_validation->set_message('xss_clean', 'dangerous!! bad request');

            $this->form_validation->set_message('is_unique', 'The  email or name is already Exists please try another email or name');
            $this->form_validation->set_rules('username', 'Username', 'xss_clean|required|is_unique[users.username]|min_length[3]|max_length[30]');
            $this->form_validation->set_rules('email', 'Email', 'xss_clean|required|valid_email|trim|is_unique[users.email]');
            $this->form_validation->set_rules('password', 'Password', 'xss_clean|required|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/]|min_length[6]');
            $this->form_validation->set_rules('address', 'address', 'xss_clean|required|min_length[3]|max_length[150]');
            $this->form_validation->set_rules('phone', 'telephone', 'xss_clean|required|trim|numeric|min_length[3]|max_length[20]');

            if ($this->form_validation->run() == FALSE) {
                $err['username'] = $this->input->post('username');
                $err['password'] = $this->input->post('password');
                $err['phone'] = $this->input->post('phone');
                $err['email'] = $this->input->post('email');
                $err['address'] = $this->input->post('address');
                $err['cats'] = $this->GetData->get_data_ordered('cats');
                $err['sub_cat'] = $this->GetData->get_data_ordered('sub_cat');
                $this->load->view('register', $err);
            } else {
                //`id`, `email`, `password`, `image`, `restaurant_name`, `phone`, `address`
                $data['username'] = htmlspecialchars($this->input->post('username'));
                $data['password'] = sha1($this->input->post('password'));
                $data['phone'] = htmlspecialchars($this->input->post('phone'));
                $data['email'] = htmlspecialchars($this->input->post('email'));
                $data['address'] = htmlspecialchars($this->input->post('address'));

                if ($this->LoginModel->reg($data) == TRUE) {
                    $this->session->set_flashdata('register', 'you are register Successfully Login Now!');
                    redirect('Admin');
                } else {
                    $this->session->set_flashdata('register', 'Failled to Register plz try again');
                    redirect('Admin/reg');
                }
            }
        } else {
            redirect('Admin/reg');
        }
    }

    
    
    
    
    
    
    public function logout() {

        $this->session->unset_userdata('username');
        $this->session->unset_userdata('id');

        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        redirect('Admin');
    }

}
