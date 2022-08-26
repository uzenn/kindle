<?php

class DashboardController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Subscription');
        $this->load->model('User');
        $this->load->model('Book');
        if (empty($this->session->userdata('admin_logged'))) {
			redirect();
		};
    }

    public function index(){
        $data['title']                  = 'KindleBook';
        $data['navActive']              = 'dashboard';
        $data['subs']                   = $this->Subscription->getSubs();
        $data['users']                  = $this->User->getUsersCount();
        $data['books']                  = $this->Book->getBooksCount();
        $data['sales']                  = $this->Subscription->getSubsCount();
        
        $this->template->admin('admin/dashboard', $data);
    }
}