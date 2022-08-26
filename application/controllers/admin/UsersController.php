<?php

class UsersController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('User');
        if (empty($this->session->userdata('admin_logged'))) {
			redirect();
		};
    }

    public function index(){
        $data['title']                  = 'KindleBook';
        $data['navActive']              = 'users';
        $data['users']                   = $this->User->getUsers();

        $this->template->admin('admin/users', $data);
    }
    public function edit_user() {
        $id = $this->input->post('id');
        $subscription = $this->input->post('subscription');

        $data = array(
            'status'   => $subscription
        );

        $result = $this->User->editUser($id, $data);
        if ($result) {
            redirect('admin/users');
        } else {
            
        }
    }
}