<?php

class HomeController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Book');
        // if (empty($this->session->userdata('user_logged'))) {
		// 	redirect();
		// };
    }

    public function index(){
        $data['title']                  = 'KindleBook';
        $data['navActive']              = 'home';
        $data['books']                  = $this->Book->getBooks();
        
        $this->template->view('home', $data);
    }
}