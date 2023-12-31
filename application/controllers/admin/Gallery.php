<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("gallery_model");
        $this->load->library("form_validation");
        $this->load->model("user_model");
        if(!$this->user_model->current_user()){
			redirect('admin/login');
		}
    }

    public function index()
    {
        $data["gallery"] = $this->gallery_model->getAll();
        $this->load->view("admin/gallery/list", $data);
    }

    function create()
	{
		$this->load->view("admin/gallery/new_form");
    }
    
    public function proses()
    {
        $config['upload_path']          = './upload/image/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 5000;
		$config['encrypt_name'] 		= true;
        $this->load->library('upload',$config);
        // $gallery_id = uniqid();
		$product_id = $this->input->post('product_id');
		$jumlah_photo = count($_FILES['photo']['name']);
		for($i = 0; $i < $jumlah_photo; $i++)
		{
            if(!empty($_FILES['photo']['name'][$i])){
 
				$_FILES['file']['name'] = $_FILES['photo']['name'][$i];
				$_FILES['file']['type'] = $_FILES['photo']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['photo']['tmp_name'][$i];
				$_FILES['file']['error'] = $_FILES['photo']['error'][$i];
                $_FILES['file']['size'] = $_FILES['photo']['size'][$i];
                
                if($this->upload->do_upload('file')){
					$gallery_id = uniqid();
                    $uploadData = $this->upload->data();
                    $data['gallery_id'] = $gallery_id;
                    $data['product_id'] = $product_id;
					$data['photo'] = $uploadData['file_name'];
					$this->db->insert('gallery',$data);
				}
            }
        }
        redirect(site_url('admin/gallery'));
    }


    public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if($this->gallery_model->delete($id)) {
            redirect(site_url('admin/gallery'));
        }
    }

}