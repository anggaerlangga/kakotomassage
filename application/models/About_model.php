<?php defined('BASEPATH') OR exit('No direct script access allowed');

class about_model extends CI_Model 
{
    // nama table
    private $_table = "about";

    // nama kolom di tabel
    public $about_id;
    public $title;
    public $subtitle;
    public $description;

    public function rules() {
        return [
            ['field' => 'about_id',
            'label' => 'About Id'],

            ['field' => 'title',
            'label' => 'Title'],

            ['field' => 'subtitle',
            'label' => 'Subtitle'],

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
        return $this->db->get_where($this->_table, ["about_id" => $id])->row();
        // SELECT * FROM barang WHERE id_barang=$id
        // method ini akan mengembalikan sebuah objek
    }

    public function save() 
    {
        $post = $this->input->post(); //
        $this->about_id = uniqid(); 
        $this->title = $post["title"]; 
        $this->subtitle = $post["subtitle"]; 
        $this->description = $post["description"];
        return $this->db->insert($this->_table, $this); // simpan ke database
    }

    public function update()
    {
        $post = $this->input->post();
        $this->about_id = $post["id"];
        $this->title = $post["title"]; 
        $this->subtitle = $post["subtitle"]; 
        $this->description = $post["description"];

        return $this->db->update($this->_table, $this, array('about_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("about_id" => $id));
    }

}