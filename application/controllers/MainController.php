<?php

class MainController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        // if (empty($this->session->userdata('user_logged'))) {
		// 	redirect();
		// };
    }

    public function index(){
        $this->load->view('main');
    }
}