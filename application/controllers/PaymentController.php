<?php

class PaymentController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Subscription');
        if (empty($this->session->userdata('user_logged'))) {
			redirect('sign-in');
		};
    }

    public function index(){
        $data['title']                  = 'KindleBook';
        $data['navActive']              =  null;
        
        $this->template->view('checkout', $data);
    }
    public function payment() {
        $user_id = $this->input->post('id');
        $receipt = md5($user_id . date('Y-m-d H:i:s'));
        $price = 50000;
        $image = $this->upload_image($user_id);

        $data = array(
            'receipt' => $receipt,
            'id_user' => $user_id,
            'image'   => $image,
            'price'   => $price
        );
        $result = $this->Subscription->addPayment($data);
        if ($result) {
            // print_r($image);
            redirect('home');
        } else {
            redirect('error');
        }
    }
    function upload_image($id){
        $this->load->library('upload');
        $newPath = './assets/uploads/images/'.$id.'/';
        $new_name = date('Y_m_d_H_i_s');
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

                return base_url('/assets/uploads/images/'.$id.'/'.$fileimage);
            } 
        }
    }
}