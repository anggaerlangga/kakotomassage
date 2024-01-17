<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Promo extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("promo_model");
        $this->load->library("form_validation");
        $this->load->model("user_model");
        if(!$this->user_model->current_user()){
			redirect('admin/login');
		}
    }

    public function index()
    {
        $data["promo"] = $this->promo_model->getAll();
        $this->load->view("admin/promo/list", $data);
    }

    public function getById($id)
    {   
        $this->load->model('promo_model');
        $data = $this->promo_model->getById($id);
        $this->load->view("admin/promo/edit", $id);
    }

    public function add()
    {
        $promo = $this->promo_model;
        $validation = $this->form_validation; // objek form validation
        $validation->set_rules($promo->rules()); // terapkan rules

        if($validation->run()) { // melakukan validasi
           $promo->save(); // simpan data ke database
           $this->session->set_flashdata('success', 'Berhasil disimpan'); // tampilkan pesan berhasil
        }

        $this->load->view("admin/promo/new"); // tampilkan form add
    }

    public function edit($id = null) // id data yang akan diedit
    {
        if (!isset($id)) redirect('admin/promo'); // kita lakukan redirect ke route ini kalau $id bernilai null

        $promo = $this->promo_model; // objek model
        $validation = $this->form_validation; // objek validation
        $validation->set_rules($promo->rules()); // menerapkan rules

        if($validation->run()) { // melakukan validasi
            $promo->update(); // menyimpan data
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["promo"] = $promo->getById($id); // mengambil data untuk ditampilkan pada form
        if(!$data["promo"]) show_404(); // jika tidak ada data, tampilkan error 404

        $this->load->view("admin/promo/edit", $data); // menampilkan form edit
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if($this->promo_model->delete($id)) {
            redirect(site_url('admin/promo'));
        }
    }
}