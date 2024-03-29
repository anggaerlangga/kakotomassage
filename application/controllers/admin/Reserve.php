<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Reserve extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("reserve_model");
        $this->load->library("form_validation");
        $this->load->model("user_model");
        if(!$this->user_model->current_user()){
			redirect('admin/login');
		}
    }

    public function index()
    {
        $data["reserve"] = $this->reserve_model->getAll();
        $this->load->view("admin/reserve/list", $data);
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

    public function edit($id = null) // id data yang akan diedit
    {
        if (!isset($id)) redirect('admin/reserve'); // kita lakukan redirect ke route ini kalau $id bernilai null

        $reserve = $this->reserve_model; // objek model
        $validation = $this->form_validation; // objek validation
        $validation->set_rules($reserve->rules()); // menerapkan rules

        if($validation->run()) { // melakukan validasi
            $reserve->update(); // menyimpan data
            $this->session->set_flashdata('success', 'Saved Successfully');
        }

        $data["reserve"] = $reserve->getById($id); // mengambil data untuk ditampilkan pada form
        if(!$data["reserve"]) show_404(); // jika tidak ada data, tampilkan error 404

        $this->load->view("admin/reserve/edit", $data); // menampilkan form edit
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if($this->reserve_model->delete($id)) {
            redirect(site_url('admin/reserve'));
        }
    }

}