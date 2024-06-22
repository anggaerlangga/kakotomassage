<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni_model extends CI_Model 
{
    // nama table
    private $_table = "testimoni";

    // nama kolom di tabel
    public $testimoni_id;
    public $testi_name;
    public $image;  
    public $description;

    public function rules() {
        return [

            ['field' => 'testi_name',
            'label' => 'testi_name',
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

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["testimoni_id" => $id])->row();
        // SELECT * FROM barang WHERE id_barang=$id
        // method ini akan mengembalikan sebuah objek
    }

    // public function gettestimoniBySubPage()
    // {

    // }
  
    public function save() 
    {
        $post = $this->input->post(); // ambil data dari form
        $this->testimoni_id = uniqid(); // membuat id unik
        $this->testi_name = $post["testi_name"]; 
        $this->description = $post["description"];
        $this->image = $this->_uploadImage();
        return $this->db->insert($this->_table, $this); // simpan ke database
    }

    public function update()
    {
        $post = $this->input->post();
        $this->testimoni_id = $post["testimoni_id"];
        $this->testi_name = $post["testi_name"]; 
        $this->description = $post["description"];
        
        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }

        return $this->db->update($this->_table, $this, array('testimoni_id' => $post['testimoni_id']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("testimoni_id" => $id));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/images';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->testimoni_id;
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
        $config['file_name']            = $this->testimoni_id;
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
        $testimoni = $this->getById($id);
        if ($testimoni->image != "default.jpg") {
            $filename = explode(".", $testimoni->image)[0];
            return array_map('unlink', glob(FCPATH."upload/images/$filename.*"));
        }
    }
}