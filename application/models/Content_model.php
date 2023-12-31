<?php defined('BASEPATH') OR exit('No direct script access allowed');

class content_model extends CI_Model 
{
    // nama table
    private $_table = "content";

    // nama kolom di tabel
    public $content_id;
    public $page_id;
    public $lang;
    public $title;
    public $subtitle;
    public $description;
    public $description2;
    public $meta_title;
    public $meta_description;
    public $URL;
    public $image = "default.jpg";

    public function rules() {
        return [
            ['field' => 'content_id',
            'label' => 'content_id',
            'rules' => 'required'],

            ['field' => 'page_id',
            'label' => 'page'],

            ['field' => 'lang',
            'label' => 'lang'],

            ['field' => 'title',
            'label' => 'title'],
            
            ['field' => 'subtitle',
            'label' => 'subtitle'],

            ['field' => 'description',
            'label' => 'description'],

            ['field' => 'description2',
            'label' => 'description2'],

            ['field' => 'meta_title',
            'label' => 'meta_title'],

            ['field' => 'meta_description',
            'label' => 'meta_description'],

            ['field' => 'URL',
            'label' => 'URL'],

            ['field' => 'image',
            'label' => 'image']
        ];
    }

    public function getAll() {
        return $this->db->get($this->_table)->result();
    }

   // public function getShortDesc() {
   //     $this->db->select('SUBSTRING(description, 1, 100), content_id, title, image', FALSE);
   //     $query = $this->db->get('content');
   //     return $query->result();
   // }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["content_id" => $id])->row();
    }

    public function getAboutByPageId()
    {
        $page_id = "ABOUT";
        // $response = array();
        // $this->db->select('*');
        // $this->db->where('page_id',$page_id['page_id']);
        // $q - $this-$db->get('content');
        // $response = $q->result_array();

        // return $response;
        return $this->db->get_where($this->_table, ["page_id" => $page_id])->row();

    }

    public function getProductByPageId()
    {
        $page_id = "PRODUCT";
        // return $this->db->get_where($this->_table, ["page_id" => $page_id])->row();
        $this->db->select('*');
        $query = $this->db->get_where($this->_table, array('page_id'=>$page_id));
        // print_r($query);
        return $query->result();
    }

    public function getFounderStory()
    {
        $page_id = "FOSO";
        $this->db->select('*');
        $query = $this->db->get_where($this->_table, array('page_id' => $page_id));
        return $query->result();
    }

    public function getStructure()
    {
        $page_id = "STRUCTURE";
        $this->db->select('*');
        $query = $this->db->get_where($this->_table, array('page_id' => $page_id));
        return $query->result();
    }

    public function getCsr()
    {
        $page_id = "CSR";
        $this->db->select('*');
        $query = $this->db->get_where($this->_table, array('page_id' => $page_id));
        return $query->result();
    }

    public function getClientByPageId()
    {
        $page_id = "CLIENT";
        // return $this->db->get_where($this->_table, ["page_id" => $page_id])->row();
        $this->db->select('*');
        $query = $this->db->get_where($this->_table, array('page_id'=>$page_id));
        // print_r($query);
        return $query->result();
    }
    


    public function save() 
    {
        $post = $this->input->post(); // ambil data dari form
        $this->content_id = uniqid(); // membuat id unik
        $this->page_id = $post["page_id"];
        $this->lang = $post["lang"];
        $this->title = $post["title"];
        $this->subtitle = $post["subtitle"];
        $this->description = $post["description"];
        $this->description2 = $post["description2"]; 
        $this->meta_title = $post["meta_title"];
        $this->meta_description = $post["meta_description"];
        $this->URL = $post["URL"];
        $this->image = $this->_uploadImage();
        return $this->db->insert($this->_table, $this); // simpan ke database
    }

    public function update()
    {
        $post = $this->input->post();
        $this->content_id = $post["content_id"]; 
        $this->page_id = $post["page_id"];
        $this->lang = $post["lang"];
        $this->title = $post["title"];
        $this->subtitle = $post["subtitle"];
        $this->description = $post["description"];
        $this->description2 = $post["description2"]; 
        $this->meta_title = $post["meta_title"];
        $this->meta_description = $post["meta_description"];
        $this->URL = $post["URL"];

        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }

        return $this->db->update($this->_table, $this, array('content_id' => $post['content_id']));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/homepage/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['file_name']            = $this->content_id;
        $config['overwrite']			= true;
        $config['max_size']             = 10024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
        
        print_r($this->upload->display_errors());
        //return "default.jpg";
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("content_id" => $id));
    }

    private function _deleteImage($id)
    {
        $content = $this->getById($id);
        if ($content->image != "default.jpg") {
            $filename = explode(".", $content->image)[0];
            return array_map('unlink', glob(FCPATH."upload/homepage/$filename.*"));
        }
    }

}