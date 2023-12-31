<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("company_model");
        $this->load->model("company_product_model");
        $this->load->model("company_team_model");
        $this->load->library("form_validation");
        $this->load->model("user_model");
        if(!$this->user_model->current_user()){
			redirect('admin/login');
		}
    }

    public function index()
    {
        $data["company"] = $this->company_model->getAll();
        $this->load->view("admin/company/list", $data);
    }

    public function add()
    {
        $company = $this->company_model; // objek model
        $validation = $this->form_validation; // objek form validation
        $validation->set_rules($company->rules()); // terapkan rules

        if($validation->run()) { // melakukan validasi
            $company->save(); // simpan data ke database
            $this->session->set_flashdata('success', 'Saved Successfully'); // tampilkan pesan berhasil
        }

        $this->load->view("admin/company/new_form"); // tampilkan form add
    }

    public function add_product()
    {
        $company_product = $this->company_product_model;

        $this->load->view("admin/company/new_product");
    }
    

    public function edit($id = null) // id data yang akan diedit
    {
        if (!isset($id)) redirect('admin/company'); // kita lakukan redirect ke route ini kalau $id bernilai null

        $company = $this->company_model; // objek model
        $validation = $this->form_validation; // objek validation
        $validation->set_rules($company->rules()); // menerapkan rules

        if($validation->run()) { // melakukan validasi
            $company->update(); // menyimpan data
            $this->session->set_flashdata('success', 'Saved Successfully');
        }

        $data["company"] = $company->getById($id); // mengambil data untuk ditampilkan pada form
        if(!$data["company"]) show_404(); // jika tidak ada data, tampilkan error 404

        $this->load->view("admin/company/edit", $data); // menampilkan form edit
    }

    public function edit_product()
    {
        $company_product = $this->company_product_model;

        $data["company_product"] = $company_product->getById($id);
        if(!$data["company"]) show_404(); 

        $this->load->view("admin/company/edit_product", $data);

    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if($this->company_model->delete($id)) {
            redirect(site_url('admin/company'));
        }
    }

    public function delete_product($id=null)
    {
        if (!isset($id)) show_404();

        if($this->company_product_model->delete($id)) {
            redirect(site_url('admin/company'));
        }
    }

}