<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {

        $data['cats'] = $this->GetData->get_data_ordered('cats');
        $data['metals'] = $this->GetData->get_data_limited('ads', 1);
        $data['blastic'] = $this->GetData->get_data_limited('ads', 2);
        $data['glasses'] = $this->GetData->get_data_limited('ads', 3);
        $data['paper'] = $this->GetData->get_data_limited('ads', 4);
        $data['used'] = $this->GetData->get_data_limited('ads', 5);
        $data['sub_cat'] = $this->GetData->get_data_ordered('sub_cat');
        $this->load->view('home', $data);
    }

    public function cat($id) {
        $data['ads'] = $this->GetData->get_cat_by_id($id);
        $data['cats'] = $this->GetData->get_data_ordered('cats');
        $data['sub_cat'] = $this->GetData->get_data_ordered('sub_cat');
        $this->load->view('cats', $data);
    }

    public function sub_cat($id) {
        if ($id == 7) {
            $data['ads'] = $this->GetData->get_cat_by_id(5);
            $data['cats'] = $this->GetData->get_data_ordered('cats');
            $data['sub_cat'] = $this->GetData->get_data_ordered('sub_cat');
            $this->load->view('cats', $data);
        } elseif ($id == 8) {
            $data['ads'] = $this->GetData->get_cat_by_id(1);
            $data['cats'] = $this->GetData->get_data_ordered('cats');
            $data['sub_cat'] = $this->GetData->get_data_ordered('sub_cat');
            $this->load->view('cats', $data);
        } else {
            $data['ads'] = $this->GetData->get_sub_cat_by_id($id);
            $data['cats'] = $this->GetData->get_data_ordered('cats');
            $data['sub_cat'] = $this->GetData->get_data_ordered('sub_cat');
            $this->load->view('cats', $data);
        }
    }

    public function ad_details($id) {
        $user_id = 0;
        $data['ads'] = $this->GetData->get_ads($id);
        foreach ($data['ads'] as $value) {
            $user_id = $value->user_id;
        }
        $data['user'] = $this->GetData->get_user($user_id);

        $data['cats'] = $this->GetData->get_data_ordered('cats');
        $data['sub_cat'] = $this->GetData->get_data_ordered('sub_cat');
        $this->load->view('ad_details', $data);
    }

    public function add_Ad() {
        if($this->session->userdata('logged_in') == TRUE) {
            redirect('Home/add');
        } else {
            redirect('Admin');
        }
    }

    public function contact() {

        if ($this->session->userdata('lang') == 'en') {
            $data['contact'] = $this->GetData->get_data('contact_us_en');
        } else {

            $data['contact'] = $this->GetData->get_data('contact_us');
        }
        $this->load->view('contact', $data);
    }

    public function about() {

        if ($this->session->userdata('lang') == 'en') {
            $data['contact'] = $this->GetData->get_data('contact_us_en');
        } else {

            $data['contact'] = $this->GetData->get_data('contact_us');
        }
        $this->load->view('about', $data);
    }

    public function all_images() {
        if ($this->session->userdata('lang') == 'en') {
            $data['contact'] = $this->GetData->get_data('contact_us_en');
        } else {

            $data['contact'] = $this->GetData->get_data('contact_us');
        }

        $data['all_images'] = $this->GetData->get_data_ordered('all_images');
        $this->load->view('all_images', $data);
    }

    public function videos() {
        if ($this->session->userdata('lang') == 'en') {
            $data['contact'] = $this->GetData->get_data('contact_us_en');
        } else {

            $data['contact'] = $this->GetData->get_data('contact_us');
        }

        $data['videos'] = $this->GetData->get_data_ordered('videos');
        $this->load->view('video', $data);
    }

    public function mail() {
        if (isset($_POST)) {
            $this->form_validation->set_rules('username', 'Username', 'xss_clean');
            $this->form_validation->set_rules('email', 'Email', 'xss_clean');
            $this->form_validation->set_rules('subject', 'Subject', 'xss_clean');
            $this->form_validation->set_rules('message', 'Message', 'xss_clean');
            if ($this->form_validation->run() == TRUE) {
                $email = htmlentities(htmlspecialchars($this->input->post('email')));
                $username = htmlentities(htmlspecialchars($this->input->post('username')));
                $message = htmlentities(htmlspecialchars($this->input->post('message')));
                $subject = htmlentities(htmlspecialchars($this->input->post('subject')));


                $config = Array(
                    'mailtype' => 'html',
                    'charset' => 'utf-8',
                    'priority' => '1'
                );
                $this->load->library('email', $config);

                $this->email->set_newline("\r\n");

                $this->email->from($email, $username);
                $this->email->to('ali@senyar-gulf.com');
                $this->email->subject($subject);
                $this->email->message($message);
                if ($this->email->send()) {
                    $data['contact'] = $this->GetData->get_data('contact_us');
                    $data['s'] = 1;
                    $this->load->view('mail', $data);
                } else {
                    $data['s'] = 0;
                    $data['contact'] = $this->GetData->get_data('contact_us');
                    $this->load->view('mail', $data);
                }
            } else {
                redirect('Home');
            }
        } else {
            echo 'access denied!';
        }
    }

}
