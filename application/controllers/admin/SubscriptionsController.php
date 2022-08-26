<?php

class SubscriptionsController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Subscription');
        if (empty($this->session->userdata('admin_logged'))) {
			redirect();
		};
    }

    public function index(){
        $data['title']                  = 'KindleBook';
        $data['navActive']              = 'subscriptions';
        $data['subs']                   = $this->Subscription->getSubs();
        
        $this->template->admin('admin/subscriptions', $data);
    }
}