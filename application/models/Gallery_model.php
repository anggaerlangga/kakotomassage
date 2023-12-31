<?php defined('BASEPATH') OR exit('No direct script access allowed');

class gallery_model extends CI_Model 
{
    // nama table
    private $_table = "gallery";

    // nama kolom di tabel
    public $gallery_id;
    public $product_id;
    public $photo;

    public function rules() {
        return [
            ['field' => 'product_id',
            'label' => 'Product ID',
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

    public function getGalleryMantiko()
    {
        $product_id = "001";
        // return $this->db->get_where($this->_table, ["page_id" => $page_id])->row();
        $this->db->select('*');
        $query = $this->db->get_where($this->_table, array('product_id'=>$product_id));
        // print_r($query);
        return $query->result();
    }

    public function getGalleryVidtron()
    {
        $product_id = "002";
        // return $this->db->get_where($this->_table, ["page_id" => $page_id])->row();
        $this->db->select('*');
        $query = $this->db->get_where($this->_table, array('product_id'=>$product_id));
        // print_r($query);
        return $query->result();
    }

    public function getGalleryMgi()
    {
        $product_id = "003";
        // return $this->db->get_where($this->_table, ["page_id" => $page_id])->row();
        $this->db->select('*');
        $query = $this->db->get_where($this->_table, array('product_id'=>$product_id));
        // print_r($query);
        return $query->result();
    }

    public function getGalleryUf()
    {
        $product_id = "004";
        // return $this->db->get_where($this->_table, ["page_id" => $page_id])->row();
        $this->db->select('*');
        $query = $this->db->get_where($this->_table, array('product_id'=>$product_id));
        // print_r($query);
        return $query->result();
    }

    public function getGalleryKakoto()
    {
        $product_id = "005";
        // return $this->db->get_where($this->_table, ["page_id" => $page_id])->row();
        $this->db->select('*');
        $query = $this->db->get_where($this->_table, array('product_id'=>$product_id));
        // print_r($query);
        return $query->result();
    }


    public function getGalleryKapau()
    {
        $product_id = "006";
        // return $this->db->get_where($this->_table, ["page_id" => $page_id])->row();
        $this->db->select('*');
        $query = $this->db->get_where($this->_table, array('product_id'=>$product_id));
        // print_r($query);
        return $query->result();
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