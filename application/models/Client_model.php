<?php defined('BASEPATH') OR exit('No direct script access allowed');

class client_model extends CI_Model 
{
    // nama table
    private $_table = "client";

    // nama kolom di tabel
    public $client_id;
    public $title;
    public $image = "default.jpg";

    public function rules() {
        return [

            ['field' => 'client_id',
            'label' => 'client ID',
            'rules' => 'required'],

            ['field' => 'title',
            'label' => 'Title'],

            ['field' => 'image',
            'label' => 'Image']

        ];
    }

    public function getAll() {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["client_id" => $id])->row();
        // SELECT * FROM barang WHERE id_barang=$id
        // method ini akan mengembalikan sebuah objek
    }

    public function save() 
    {
        $post = $this->input->post(); // ambil data dari form
        $this->client_id = uniqid();
        $this->title = $post["title"]; 
        $this->image = $this->_uploadImage();
        return $this->db->insert($this->_table, $this); 
    }

    public function update()
    {
        $post = $this->input->post();
        $this->client_id = $post["client_id"];
        $this->title = $post["title"]; 

        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }

        return $this->db->update($this->_table, $this, array('client_id' => $post['client_id']));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/homepage/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['file_name']            = $this->client_id;
        $config['overwrite']			= true;
        $config['max_size']             = 3024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
        
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("client_id" => $id));
    }

    private function _deleteImage($id)
    {
        $client = $this->getById($id);
        if ($client->image != "default.jpg") {
            $filename = explode(".", $client->photo)[0];
            return array_map('unlink', glob(FCPATH."upload/homepage/$filename.*"));
        }
    }
}
