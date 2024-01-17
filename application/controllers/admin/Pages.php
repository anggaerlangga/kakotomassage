<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("pages_model");
        $this->load->library("form_validation");
        $this->load->model("user_model");
        if(!$this->user_model->current_user()){
			redirect('admin/login');
		}
    }

    public function index()
    {
        $data["pages"] = $this->pages_model->getAll();
        $this->load->view("admin/pages/list", $data);
    }

    public function add()
    {
        $pages = $this->pages_model; // objek model
        $validation = $this->form_validation; // objek form validation
        $validation->set_rules($pages->rules()); // terapkan rules

        if($validation->run()) { // melakukan validasi
            $pages->save(); // simpan data ke database
            $this->session->set_flashdata('success', 'Saved Successfully'); // tampilkan pesan berhasil
        }

        $this->load->view("admin/pages/new"); // tampilkan form add
    }

    public function edit($id = null) // id data yang akan diedit
    {
        if (!isset($id)) redirect('admin/pages/kakoto'); // kita lakukan redirect ke route ini kalau $id bernilai null

        $pages = $this->pages_model; // objek model
        $validation = $this->form_validation; // objek validation
        $validation->set_rules($pages->rules()); // menerapkan rules

        if($validation->run()) { // melakukan validasi
            $pages->update(); // menyimpan data
            $this->session->set_flashdata('success', 'Saved Successfully');
        }

        $data["pages"] = $pages->getById($id); // mengambil data untuk ditampilkan pada form
        if(!$data["pages"]) show_404(); // jika tidak ada data, tampilkan error 404

        $this->load->view("admin/pages/edit", $data); // menampilkan form edit
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if($this->pages_model->delete($id)) {
            redirect(site_url('admin/pages'));
        }
    }

}