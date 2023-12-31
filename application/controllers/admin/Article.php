<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("article_model");
        $this->load->library("form_validation");
        $this->load->model("user_model");
        if(!$this->user_model->current_user()){
			redirect('admin/login');
		}
    }

    public function index()
    {
        $data["article"] = $this->article_model->getAll();
        $this->load->view("admin/article/list", $data);
    }

    public function add()
    {
        $article = $this->article_model; // objek model
        $validation = $this->form_validation; // objek form validation
        $validation->set_rules($article->rules()); // terapkan rules

        if($validation->run()) { // melakukan validasi
            $article->save(); // simpan data ke database
            $this->session->set_flashdata('success', 'Saved Successfully'); // tampilkan pesan berhasil
        }

        $this->load->view("admin/article/new_form"); // tampilkan form add
    }

    public function edit($id = null) // id data yang akan diedit
    {
        if (!isset($id)) redirect('admin/article'); // kita lakukan redirect ke route ini kalau $id bernilai null

        $article = $this->article_model; // objek model
        $validation = $this->form_validation; // objek validation
        $validation->set_rules($article->rules()); // menerapkan rules

        if($validation->run()) { // melakukan validasi
            $article->update(); // menyimpan data
            $this->session->set_flashdata('success', 'Saved Successfully');
        }

        $data["article"] = $article->getById($id); // mengambil data untuk ditampilkan pada form
        if(!$data["article"]) show_404(); // jika tidak ada data, tampilkan error 404

        $this->load->view("admin/article/edit", $data); // menampilkan form edit
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if($this->article_model->delete($id)) {
            redirect(site_url('admin/article'));
        }
    }

}