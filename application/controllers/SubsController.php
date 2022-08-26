<?php

class SubsController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        // if (empty($this->session->userdata('user_logged'))) {
		// 	redirect();
		// };
    }

    public function index(){
        $data['title']                  = 'KindleBook';
        $data['navActive']              =  null;
        
        $this->template->view('subscription', $data);
    }
}