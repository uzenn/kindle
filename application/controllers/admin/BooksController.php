<?php

class BooksController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Book');
        if (empty($this->session->userdata('admin_logged'))) {
			redirect();
		};
    }

    public function index(){
        $data['title']                  = 'KindleBook';
        $data['navActive']              = 'books';
        $data['books']                  = $this->Book->getBooks();
        
        $this->template->admin('admin/books', $data);
    }
    public function new_books() {
        $data['title']                  = 'KindleBook';
        $data['navActive']              = null;
        
        $this->template->admin('admin/new_books', $data);
    }
    public function add_book() {
        $title = $this->input->post('title');
        $category = $this->input->post('category');
        $author = $this->input->post('author');
        $subscription = $this->input->post('subscription');
        $description = $this->input->post('description');
        $file = $this->upload_pdf($title);
        $image = $this->upload_image($title);

        $data = array(
            'title' => $title,
            'category' => $category,
            'author'   => $author,
            'subscription'   => $subscription,
            'description' => $description,
            'image' => $image,
            'file'  => $file
        );
        $result = $this->Book->addBook($data);
        if ($result) {
            redirect('admin/books');
        } else {
            
        }
    }
    public function edit_book() {
        $id = $this->input->post('id');
        $title = $this->input->post('title');
        $category = $this->input->post('category');
        $author = $this->input->post('author');
        $subscription = $this->input->post('subscription');
        $description = $this->input->post('description');
        $file = $this->upload_pdf($title);
        $image = $this->upload_image($title);

        if ($file != null && $image != null) {
            $data = array(
                'title' => $title,
                'category' => $category,
                'author'   => $author,
                'subscription'   => $subscription,
                'description' => $description,
                'image' => $image,
                'file'  => $file
            );
        } else {
            $data = array(
                'title' => $title,
                'category' => $category,
                'author'   => $author,
                'subscription'   => $subscription,
                'description' => $description
            );
        }
        $result = $this->Book->editBook($id, $data);
        if ($result) {
            redirect('admin/books');
        } else {
            
        }
    }
    public function delete_book() {
        $id = $this->input->post('id');

        $result = $this->Book->deleteBook($id);
        if ($result) {
            redirect('admin/books');
        } else {
            
        }
    }
    function upload_pdf($title){
        $this->load->library('upload');
        $newPath = './assets/uploads/filebooks/'.$title.'/';
        $new_name = $title.date('Y_m_d_H_i_s');
        if(!is_dir($newPath)){
            mkdir($newPath, 0777, TRUE);
        }
        $config['upload_path'] = $newPath;
        $config['allowed_types'] = 'pdf'; 
        $config['encrypt_name'] = FALSE;
        $config['file_name'] = $new_name;
        
        $this->upload->initialize($config);
        
        if(!empty($_FILES['file']['name'])){
            if ($this->upload->do_upload('file')){
                $pdf = $this->upload->data(); 
                $filepdf = $pdf['file_name'];

                return base_url('/assets/uploads/filebooks/'.$title.'/'.$filepdf);
            } 
        } else {
            return null;
        }
    }
    function upload_image($title){
        $this->load->library('upload');
        $newPath = './assets/uploads/imagebooks/'.$title.'/';
        $new_name = $title.date('Y_m_d_H_i_s');
        if(!is_dir($newPath)){
            mkdir($newPath, 0777, TRUE);
        }
        $config['upload_path'] = $newPath;
        $config['allowed_types'] = 'png|jpg|jpeg'; 
        $config['encrypt_name'] = FALSE;
        $config['file_name'] = $new_name;
        
        $this->upload->initialize($config);
        if(!empty($_FILES['image']['name'])){
 
            if ($this->upload->do_upload('image')){
                $image = $this->upload->data(); 
                $fileimage = $image['file_name'];

                return base_url('/assets/uploads/imagebooks/'.$title.'/'.$fileimage);
            } 
        } else {
            return null;
        }
    }
}