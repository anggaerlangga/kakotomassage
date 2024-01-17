<?php defined('BASEPATH') OR exit('No direct script access allowed');

class service_model extends CI_Model 
{
    // nama table
    private $_table = "service";

    // nama kolom di tabel
    public $service_id;
    public $service_name;
    public $harga;
    public $image;  
    public $description;

    public function rules() {
        return [

            ['field' => 'service_name',
            'label' => 'service_name',
            'rules' => 'required'],

            ['field' => 'harga',
            'label' => 'harga'],

            ['field' => 'image',
            'label' => 'image'],

            ['field' => 'description',
            'label' => 'Description']
        ];
    }

    public function getAll() {
        return $this->db->get($this->_table)->result();
        // SELECT * FROM barang
        // method ini akan mengembalikan sebuah array
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["service_id" => $id])->row();
        // SELECT * FROM barang WHERE id_barang=$id
        // method ini akan mengembalikan sebuah objek
    }

    // public function getServiceBySubPage()
    // {

    // }
  
    public function save() 
    {
        $post = $this->input->post(); // ambil data dari form
        $this->service_id = uniqid(); // membuat id unik
        $this->service_name = $post["service_name"]; 
        $this->harga = $post["harga"];
        $this->description = $post["description"];
        $this->image = $this->_uploadImage();
        return $this->db->insert($this->_table, $this); // simpan ke database
    }

    public function update()
    {
        $post = $this->input->post();
        $this->service_id = $post["service_id"];
        $this->service_name = $post["service_name"]; 
        $this->harga = $post["harga"];
        $this->description = $post["description"];
        
        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }

        return $this->db->update($this->_table, $this, array('service_id' => $post['service_id']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("service_id" => $id));
    }

    private function _multipleUpload()
    {
        $config['upload_path']          = './upload/images';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['encrypt_name']         =  TRUE;
        $config['quality']              = '50%';
    //     $config['max_size']             = 10000; // 1MB

        $this->load->library('upload', $config);
        for ($i=1; $i<=5; $i++) {
            if(!empty($_FILES['files'.$i]['name'])) {
                if(!$this->upload->do_upload('files'.$i))
                    $this->upload->display_errors();
                else 
                    return $this->upload->data("file_name");
            }
        }
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/images';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->service_id;
        $config['overwrite']			= true;
        $config['max_size']             = 5024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }

        print_r($this->upload->display_errors());
        
       // return "default.jpg";
    }

    private function uploadImage()
    {
        $config['upload_path']          = './upload/images';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->service_id;
        $config['overwrite']			= true;
        $config['max_size']             = 5024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }

        print_r($this->upload->display_errors());
        
       // return "default.jpg";
    }

    private function _deleteImage($id)
    {
        $service = $this->getById($id);
        if ($service->image != "default.jpg") {
            $filename = explode(".", $service->image)[0];
            return array_map('unlink', glob(FCPATH."upload/images/$filename.*"));
        }
    }
}