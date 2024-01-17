<?php defined('BASEPATH') OR exit('No direct script access allowed');

class promo_model extends CI_Model 
{
    // nama table
    private $_table = "promo";

    // nama kolom di tabel
    public $promo_id;
    public $promo_name;
    public $image;  
    public $description;

    public function rules() {
        return [

            ['field' => 'promo_name',
            'label' => 'promo_name',
            'rules' => 'required'],

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

    public function getAllPromo() {
        return $this->db->get($this->_table)->result();
        // SELECT * FROM barang
        // method ini akan mengembalikan sebuah array
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["promo_id" => $id])->row();
        // SELECT * FROM barang WHERE id_barang=$id
        // method ini akan mengembalikan sebuah objek
    }
  
    public function save() 
    {
        $post = $this->input->post(); // ambil data dari form
        $this->promo_id = uniqid(); // membuat id unik
        $this->promo_name = $post["promo_name"]; 
        $this->description = $post["description"];
        $this->image = $this->_uploadImage();
        return $this->db->insert($this->_table, $this); // simpan ke database
    }

    public function update()
    {
        $post = $this->input->post();
        $this->promo_id = $post["promo_id"];
        $this->promo_name = $post["promo_name"]; 
        $this->description = $post["description"];
        
        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }

        return $this->db->update($this->_table, $this, array('promo_id' => $post['promo_id']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("promo_id" => $id));
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
        $config['upload_path']          = './upload/promo';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->promo_id;
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
        $promo = $this->getById($id);
        if ($promo->image != "default.jpg") {
            $filename = explode(".", $promo->image)[0];
            return array_map('unlink', glob(FCPATH."upload/promo/$filename.*"));
        }
    }
}