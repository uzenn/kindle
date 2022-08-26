<?php

class BookController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Book');
    }

    public function index($id){
        $data['title']                  = 'KindleBook';
        $data['navActive']              = 'books';
        $desc = $this->Book->getBook($id);
        if ($desc->subscription == 0) {
            $desc->subscription = 'Basic';
        } else {
            $desc->subscription = 'Nerd+';
        }
        $data['desc']                  = $desc;
        
        $this->template->view('book', $data);
    }
}