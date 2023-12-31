<?php defined('BASEPATH') OR exit('No direct script access allowed');

class pages_model extends CI_Model 
{
    // nama table
    private $_table = "ct_page";

    // nama kolom di tabel
    public $page_id;
    public $product_id;
    public $subpage;
    public $lang;
    public $title;
    public $subtitle;
    public $description;
    public $description2;
    public $meta_title;
    public $meta_description;
    public $url;
    public $image = "default.jpg";

    public function rules() {
        return [
            ['field' => 'page_id',
            'label' => 'page',
            'rules' => 'required'],

            ['field' => 'product_id',
            'label' => 'product_id'],

            ['field' => 'subpage',
            'label' => 'subpage'],

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

            ['field' => 'url',
            'label' => 'url'],

            ['field' => 'image',
            'label' => 'image']
        ];
    }

    public function getAll() {
        return $this->db->get($this->_table)->result();
    }

    public function getAllMantiko() {
       $product_id = '001';
       $query = $this->db->get_where('ct_page', array('product_id' => $product_id));
       return $query->result();
    }

    public function getAllVidtron() {
        $product_id = '002';
        $query = $this->db->get_where('ct_page', array('product_id' => $product_id));
        return $query->result();
    }

    public function getAllMgi() {
        $product_id = '003';
        $query = $this->db->get_where('ct_page', array('product_id' => $product_id));
        return $query->result();
    }

    public function getAllUf() {
        $product_id = '004';
        $query = $this->db->get_where('ct_page', array('product_id' => $product_id));
        return $query->result();
    }

    public function getAllKakoto() {
        $product_id = '005';
        $query = $this->db->get_where('ct_page', array('product_id' => $product_id));
        return $query->result();
    }

    public function getAllKapau() {
        $product_id = '006';
        $query = $this->db->get_where('ct_page', array('product_id' => $product_id));
        return $query->result();
    }

    public function getAboutMantiko() {
        $product_id = '001';
        $subpage = 'ABT';
        $query = $this->db->get_where('ct_page', array('product_id' => $product_id, 'subpage' => $subpage));
        return $query->result();
     }

     public function getProductMantiko() {
        $product_id = '001';
        $subpage = 'PRD';
        $query = $this->db->get_where('ct_page', array('product_id' => $product_id, 'subpage' => $subpage));
        return $query->result();
     }

     public function getTimMantiko() {
        $product_id = '001';
        $subpage = 'TIM';
        $query = $this->db->get_where('ct_page', array('product_id' => $product_id, 'subpage' => $subpage));
        return $query->result();
     }

     public function getAboutVidtron() {
        $product_id = '002';
        $subpage = 'ABT';
        $query = $this->db->get_where('ct_page', array('product_id' => $product_id, 'subpage' => $subpage));
        return $query->result();
     }

     public function getProductVidtron() {
        $product_id = '002';
        $subpage = 'PRD';
        $query = $this->db->get_where('ct_page', array('product_id' => $product_id, 'subpage' => $subpage));
        return $query->result();
     }

     public function getTimVidtron() {
        $product_id = '002';
        $subpage = 'TIM';
        $query = $this->db->get_where('ct_page', array('product_id' => $product_id, 'subpage' => $subpage));
        return $query->result();
     }

     public function getAboutMgi() {
        $product_id = '003';
        $subpage = 'ABT';
        $query = $this->db->get_where('ct_page', array('product_id' => $product_id, 'subpage' => $subpage));
        return $query->result();
     }

     public function getProductMgi() {
        $product_id = '003';
        $subpage = 'PRD';
        $query = $this->db->get_where('ct_page', array('product_id' => $product_id, 'subpage' => $subpage));
        return $query->result();
     }

     public function getTimMgi() {
        $product_id = '003';
        $subpage = 'TIM';
        $query = $this->db->get_where('ct_page', array('product_id' => $product_id, 'subpage' => $subpage));
        return $query->result();
     }

     public function getAboutUf() {
        $product_id = '004';
        $subpage = 'ABT';
        $query = $this->db->get_where('ct_page', array('product_id' => $product_id, 'subpage' => $subpage));
        return $query->result();
     }

     public function getProductUf() {
        $product_id = '004';
        $subpage = 'PRD';
        $query = $this->db->get_where('ct_page', array('product_id' => $product_id, 'subpage' => $subpage));
        return $query->result();
     }

     public function getTimUf() {
        $product_id = '004';
        $subpage = 'TIM';
        $query = $this->db->get_where('ct_page', array('product_id' => $product_id, 'subpage' => $subpage));
        return $query->result();
     }

     public function getAboutKakoto() {
        $product_id = '005';
        $subpage = 'ABT';
        $query = $this->db->get_where('ct_page', array('product_id' => $product_id, 'subpage' => $subpage));
        return $query->result();
     }

     public function getProductKakoto() {
        $product_id = '005';
        $subpage = 'PRD';
        $query = $this->db->get_where('ct_page', array('product_id' => $product_id, 'subpage' => $subpage));
        return $query->result();
     }

     public function getPriceKakoto() {
        $product_id = '005';
        $subpage = 'PRC';
        $query = $this->db->get_where('ct_page', array('product_id' => $product_id, 'subpage' => $subpage));
        return $query->result();
     }

     public function getTimKakoto() {
        $product_id = '005';
        $subpage = 'TIM';
        $query = $this->db->get_where('ct_page', array('product_id' => $product_id, 'subpage' => $subpage));
        return $query->result();
     }

     public function getAboutKapau() {
        $product_id = '006';
        $subpage = 'ABT';
        $query = $this->db->get_where('ct_page', array('product_id' => $product_id, 'subpage' => $subpage));
        return $query->result();
     }

     public function getProductKapau() {
        $product_id = '006';
        $subpage = 'PRD';
        $query = $this->db->get_where('ct_page', array('product_id' => $product_id, 'subpage' => $subpage));
        return $query->result();
     }

     public function getTimKapau() {
        $product_id = '006';
        $subpage = 'TIM';
        $query = $this->db->get_where('ct_page', array('product_id' => $product_id, 'subpage' => $subpage));
        return $query->result();
     }


    //  public function getPriceKakoto() {
    //     $product_id = '005';
    //     $subpage = 'TIM';
    //     $query = $this->db->get_where('ct_page', array('product_id' => $product_id, 'subpage' => $subpage));
    //     return $query->result();
    //  }

   // public function getShortDesc() {
   //     $this->db->select('SUBSTRING(description, 1, 100), page_id, title, image', FALSE);
   //     $query = $this->db->get('page');
   //     return $query->result();
   // }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["page_id" => $id])->row();
    }

    public function save() 
    {
        $post = $this->input->post(); // ambil data dari form
        $this->page_id = uniqid();
        $this->product_id = $post["product_id"];
        $this->subpage = $post["subpage"];
        $this->lang = $post["lang"];
        $this->title = $post["title"];
        $this->subtitle = $post["subtitle"];
        $this->description = $post["description"];
        $this->description2 = $post["description2"]; 
        $this->meta_title = $post["meta_title"];
        $this->meta_description = $post["meta_description"];
        $this->url = $post["url"];
        $this->image = $this->_uploadImage();
        return $this->db->insert($this->_table, $this); // simpan ke database
    }

    public function update()
    {
        $post = $this->input->post();
        $this->page_id = $post["page_id"];
        $this->product_id = $post["product_id"];
        $this->subpage = $post["subpage"];
        $this->lang = $post["lang"];
        $this->title = $post["title"];
        $this->subtitle = $post["subtitle"];
        $this->description = $post["description"]; 
        $this->description2 = $post["description2"];
        $this->meta_title = $post["meta_title"];
        $this->meta_description = $post["meta_description"];
        $this->url = $post["url"];

        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }

        return $this->db->update($this->_table, $this, array('page_id' => $post['page_id']));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/homepage/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['file_name']            = $this->page_id;
        $config['overwrite']			= true;
        $config['max_size']             = 5024; // 1MB
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
        return $this->db->delete($this->_table, array("page_id" => $id));
    }

    private function _deleteImage($id)
    {
        $page = $this->getById($id);
        if ($page->image != "default.jpg") {
            $filename = explode(".", $page->image)[0];
            return array_map('unlink', glob(FCPATH."upload/homepage/$filename.*"));
        }
    }

}