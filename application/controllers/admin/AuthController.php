<?php

class AuthController extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    public function index() {
        if ($this->session->userdata('admin_logged')) {
            redirect('admin/dashboard');
        } else {
            $this->load->view('admin/signin');
        }
    }
    public function signin() {
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() == TRUE) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            if($username == "admin" && $password == "admin123"){
                $sessionData = array(
                    'username'      => $username,
                    'password'      => $password,
                    'admin_logged'   => TRUE
                );
                $this->session->set_userdata($sessionData);
                // $this->session->set_tempdata('auth_msg', 'Login Successfully', 3);
                redirect('admin/dashboard');
            } else {
                $this->session->set_tempdata('auth_msg', 'Login Failed, Username or Password is incorrect!', 3);
                redirect('admin');
            }
        } else {
            //Create Message
            $this->session->set_tempdata('auth_msg', validation_errors(), 3);
        }
    }
    public function signout() {
        $this->session->sess_destroy();
        redirect('home');
    }
}