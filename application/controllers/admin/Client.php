<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("client_model");
        $this->load->library("form_validation");
        $this->load->model("user_model");
        if(!$this->user_model->current_user()){
			redirect('admin/login');
		}
    }

    public function index()
    {
        $data["client"] = $this->client_model->getAll();
        $this->load->view("admin/client/list", $data);
    }

    public function add()
    {
        $client = $this->client_model; // objek model
        $validation = $this->form_validation; // objek form validation
        $validation->set_rules($client->rules()); // terapkan rules

        if($validation->run()) { // melakukan validasi
            $client->save(); // simpan data ke database
            $this->session->set_flashdata('success', 'Saved Successfully'); // tampilkan pesan berhasil
        }

        $this->load->view("admin/client/new_form"); // tampilkan form add
    }

    public function edit($id = null) // id data yang akan diedit
    {
        if (!isset($id)) redirect('admin/client'); // kita lakukan redirect ke route ini kalau $id bernilai null

        $client = $this->client_model; // objek model
        $validation = $this->form_validation; // objek validation
        $validation->set_rules($client->rules()); // menerapkan rules

        if($validation->run()) { // melakukan validasi
            $client->update(); // menyimpan data
            $this->session->set_flashdata('success', 'Saved Successfully');
        }

        $data["client"] = $client->getById($id); // mengambil data untuk ditampilkan pada form
        if(!$data["client"]) show_404(); // jika tidak ada data, tampilkan error 404

        $this->load->view("admin/client/edit", $data); // menampilkan form edit
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if($this->client_model->delete($id)) {
            redirect(site_url('admin/client'));
        }
    }
}