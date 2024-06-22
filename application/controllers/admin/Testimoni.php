<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("testimoni_model");
        $this->load->library("form_validation");
        $this->load->model("user_model");
        if(!$this->user_model->current_user()){
			redirect('admin/login');
		}
    }

    public function index()
    {
        $data["testimoni"] = $this->testimoni_model->getAll();
        $this->load->view("admin/testimoni/list", $data);
    }

    public function getById($id)
    {   
        $this->load->model('testimoni_model');
        $data = $this->testimoni_model->getById($id);
        $this->load->view("admin/testimoni/edit", $id);
    }

    public function add()
    {
        $testimoni = $this->testimoni_model;
        $validation = $this->form_validation; // objek form validation
        $validation->set_rules($testimoni->rules()); // terapkan rules

        if($validation->run()) { // melakukan validasi
           $testimoni->save(); // simpan data ke database
           $this->session->set_flashdata('success', 'Berhasil disimpan'); // tampilkan pesan berhasil
        }

        $this->load->view("admin/testimoni/new"); // tampilkan form add
    }

    public function edit($id = null) // id data yang akan diedit
    {
        if (!isset($id)) redirect('admin/testimoni'); // kita lakukan redirect ke route ini kalau $id bernilai null

        $testimoni = $this->testimoni_model; // objek model
        $validation = $this->form_validation; // objek validation
        $validation->set_rules($testimoni->rules()); // menerapkan rules

        if($validation->run()) { // melakukan validasi
            $testimoni->update(); // menyimpan data
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["testimoni"] = $testimoni->getById($id); // mengambil data untuk ditampilkan pada form
        if(!$data["testimoni"]) show_404(); // jika tidak ada data, tampilkan error 404

        $this->load->view("admin/testimoni/edit", $data); // menampilkan form edit
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if($this->testimoni_model->delete($id)) {
            redirect(site_url('admin/testimoni'));
        }
    }
}