<?php

class AuthController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('User');
    }
    public function index() {
        if ($this->session->userdata('user_logged')) {
            redirect('home');
        } else {
            $this->load->view('signin');
        }
    }
    public function signup() {
        if ($this->session->userdata('user_logged')) {
            redirect('home');
        } else {
            $this->load->view('signup');
        }
    }
    public function signin_process() {
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() == TRUE) {
            $email = $this->input->post('email');
            $password = md5($this->input->post('password'));
            $user = $this->User->login($email, $password);
            if($user != false ){
                if ($user->status == 0) {
                    $user->status = "basic";
                } else {
                    $user->status = "nerd+";
                }
                $sessionData = array(
                    'id'            => $user->id,
                    'email'         => $user->email,
                    'name'          => $user->name,
                    'password'      => $user->password,
                    'status'        => $user->status,
                    'user_logged'   => TRUE
                );
                $this->session->set_userdata($sessionData);
                // $this->session->set_tempdata('auth_msg', 'Login Successfully', 3);
                redirect('home');
            } else {
                $this->session->set_tempdata('auth_msg', 'Login Failed, Username or Password is incorrect!', 3);
                redirect('sign-in');
            }
        } else {
            //Create Message
            $this->session->set_tempdata('auth_msg', validation_errors(), 3);
        }
    }
    public function signup_process() {
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() == TRUE) {
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'status' => '0',
                'password' => md5($this->input->post('password'))
            );
            $this->User->register($data);
            redirect('sign-in');
        } else {
            //Create Message
            $this->session->set_tempdata('auth_msg', validation_errors(), 3);
            redirect('sign-up');
        }
    }
    public function signout() {
        $this->session->sess_destroy();
        redirect('home');
    }
}