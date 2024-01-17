<?php defined('BASEPATH') OR exit('No direct script access allowed');

class gallery_model extends CI_Model 
{
    // nama table
    private $_table = "gallery";

    // nama kolom di tabel
    public $gallery_id;
    public $description;
    public $image;

    public function rules() {
        return [
            ['field' => 'gallery_id',
            'label' => 'gallery id',
            'rules' => 'required']
        ];
    }

    public function getAll() {
        return $this->db->get($this->_table)->result();
        // SELECT * FROM banner
        // method ini akan mengembalikan sebuah array
    }

    public function getById($gallery_id)
    {
        return $this->db->get_where($this->_table, ["gallery_id" => $gallery_id])->row();
        // SELECT * FROM barang WHERE id_barang=$id
        // method ini akan mengembalikan sebuah objek
    }

    public function save() 
    {
        $post = $this->input->post(); // ambil data dari form
        $this->gallery_id = uniqid(); // membuat id unik
        $this->description = $post["description"];
        $this->image = $this->_uploadImage();
        return $this->db->insert($this->_table, $this); // simpan ke database
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/gallery';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->gallery_id;
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

    public function update()
    {
        $post = $this->input->post();
        $this->gallery_id = $post["gallery_id"];
        $this->description = $post["description"];
        
        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }

        return $this->db->update($this->_table, $this, array('gallery_id' => $post['gallery_id']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("gallery_id" => $id));
    }

    private function _deleteImage($id)
    {
        $gallery = $this->getById($id);
            $filename = explode(".", $gallery->photo)[0];
            return array_map('unlink', glob(FCPATH."upload/image/$filename.*"));
        
    }

}