<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reserve extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model("reserve_model");
        $this->load->library("form_validation");
	}

    public function add()
    {
        $reserve = $this->reserve_model; // objek model
        $validation = $this->form_validation; // objek form validation
        $validation->set_rules($reserve->rules()); // terapkan rules

        if($validation->run()) { // melakukan validasi
            $reserve->save(); // simpan data ke database
            $this->session->set_flashdata('success', 'Saved Successfully'); // tampilkan pesan berhasil
        }

        $this->load->view("admin/reserve/new"); // tampilkan form add
    }

    function save(){
        $data=$this->reserve_model->save();
        echo json_encode($data);
    }


}

