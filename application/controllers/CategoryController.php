<?php

class CategoryController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Book');
        // if (empty($this->session->userdata('user_logged'))) {
		// 	redirect();
		// };
    }

    public function index(){
        $data['title']                  = 'KindleBook';
        $data['navActive']              = 'category';
        $data['books']                  = $this->Book->getBooks();
        
        $this->template->view('category', $data);
    }
    public function search() {
        $keyword = $this->input->get('keyword');
        $result = $this->Book->searchBook($keyword);

        $data['title']                  = 'KindleBook';
        $data['navActive']              = null;
        $data['result']                 = $result;
        
        $this->template->view('search', $data);
    }
}