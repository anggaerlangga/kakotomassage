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

    public function mantiko()
    {
        $data["pages"] = $this->pages_model->getAllMantiko();
        $this->load->view("admin/pages/list_mantiko", $data);
    }

    public function vidtron()
    {
        $data["pages"] = $this->pages_model->getAllVidtron();
        $this->load->view("admin/pages/list_vidtron", $data);
    }

    public function mgi()
    {
        $data["pages"] = $this->pages_model->getAllMgi();
        $this->load->view("admin/pages/list_mgi", $data);
    }

    public function uf()
    {
        $data["pages"] = $this->pages_model->getAllUf();
        $this->load->view("admin/pages/list_uf", $data);
    }

    public function kakoto()
    {
        $data["pages"] = $this->pages_model->getAllKakoto();
        $this->load->view("admin/pages/list_kakoto", $data);
    }

    public function kapau()
    {
        $data["pages"] = $this->pages_model->getAllKapau();
        $this->load->view("admin/pages/list_kapau", $data);
    }

    public function add_mantiko()
    {
        $pages = $this->pages_model; // objek model
        $validation = $this->form_validation; // objek form validation
        $validation->set_rules($pages->rules()); // terapkan rules

        if($validation->run()) { // melakukan validasi
            $pages->save(); // simpan data ke database
            $this->session->set_flashdata('success', 'Saved Successfully'); // tampilkan pesan berhasil
        }

        $this->load->view("admin/pages/new_mantiko"); // tampilkan form add
    }

    public function add_mgi()
    {
        $pages = $this->pages_model; // objek model
        $validation = $this->form_validation; // objek form validation
        $validation->set_rules($pages->rules()); // terapkan rules

        if($validation->run()) { // melakukan validasi
            $pages->save(); // simpan data ke database
            $this->session->set_flashdata('success', 'Saved Successfully'); // tampilkan pesan berhasil
        }

        $this->load->view("admin/pages/new_mgi"); // tampilkan form add
    }

    public function add_kakoto()
    {
        $pages = $this->pages_model; // objek model
        $validation = $this->form_validation; // objek form validation
        $validation->set_rules($pages->rules()); // terapkan rules

        if($validation->run()) { // melakukan validasi
            $pages->save(); // simpan data ke database
            $this->session->set_flashdata('success', 'Saved Successfully'); // tampilkan pesan berhasil
        }

        $this->load->view("admin/pages/new_kakoto"); // tampilkan form add
    }

    public function add_vidtron()
    {
        $pages = $this->pages_model; // objek model
        $validation = $this->form_validation; // objek form validation
        $validation->set_rules($pages->rules()); // terapkan rules

        if($validation->run()) { // melakukan validasi
            $pages->save(); // simpan data ke database
            $this->session->set_flashdata('success', 'Saved Successfully'); // tampilkan pesan berhasil
        }

        $this->load->view("admin/pages/new_vidtron"); // tampilkan form add
    }

    public function add_uf()
    {
        $pages = $this->pages_model; // objek model
        $validation = $this->form_validation; // objek form validation
        $validation->set_rules($pages->rules()); // terapkan rules

        if($validation->run()) { // melakukan validasi
            $pages->save(); // simpan data ke database
            $this->session->set_flashdata('success', 'Saved Successfully'); // tampilkan pesan berhasil
        }

        $this->load->view("admin/pages/new_uf"); // tampilkan form add
    }

    public function add_kapau()
    {
        $pages = $this->pages_model; // objek model
        $validation = $this->form_validation; // objek form validation
        $validation->set_rules($pages->rules()); // terapkan rules

        if($validation->run()) { // melakukan validasi
            $pages->save(); // simpan data ke database
            $this->session->set_flashdata('success', 'Saved Successfully'); // tampilkan pesan berhasil
        }

        $this->load->view("admin/pages/new_kapau"); // tampilkan form add
    }

    public function edit_mantiko($id = null) // id data yang akan diedit
    {
        if (!isset($id)) redirect('admin/pages/mantiko'); // kita lakukan redirect ke route ini kalau $id bernilai null

        $pages = $this->pages_model; // objek model
        $validation = $this->form_validation; // objek validation
        $validation->set_rules($pages->rules()); // menerapkan rules

        if($validation->run()) { // melakukan validasi
            $pages->update(); // menyimpan data
            $this->session->set_flashdata('success', 'Saved Successfully');
        }

        $data["pages"] = $pages->getById($id); // mengambil data untuk ditampilkan pada form
        if(!$data["pages"]) show_404(); // jika tidak ada data, tampilkan error 404

        $this->load->view("admin/pages/edit_mantiko", $data); // menampilkan form edit
    }

    public function edit_vidtron($id = null) // id data yang akan diedit
    {
        if (!isset($id)) redirect('admin/pages/vidtron'); // kita lakukan redirect ke route ini kalau $id bernilai null

        $pages = $this->pages_model; // objek model
        $validation = $this->form_validation; // objek validation
        $validation->set_rules($pages->rules()); // menerapkan rules

        if($validation->run()) { // melakukan validasi
            $pages->update(); // menyimpan data
            $this->session->set_flashdata('success', 'Saved Successfully');
        }

        $data["pages"] = $pages->getById($id); // mengambil data untuk ditampilkan pada form
        if(!$data["pages"]) show_404(); // jika tidak ada data, tampilkan error 404

        $this->load->view("admin/pages/edit_vidtron", $data); // menampilkan form edit
    }

    public function edit_mgi($id = null) // id data yang akan diedit
    {
        if (!isset($id)) redirect('admin/pages/mgi'); // kita lakukan redirect ke route ini kalau $id bernilai null

        $pages = $this->pages_model; // objek model
        $validation = $this->form_validation; // objek validation
        $validation->set_rules($pages->rules()); // menerapkan rules

        if($validation->run()) { // melakukan validasi
            $pages->update(); // menyimpan data
            $this->session->set_flashdata('success', 'Saved Successfully');
        }

        $data["pages"] = $pages->getById($id); // mengambil data untuk ditampilkan pada form
        if(!$data["pages"]) show_404(); // jika tidak ada data, tampilkan error 404

        $this->load->view("admin/pages/edit_mgi", $data); // menampilkan form edit
    }

    public function edit_uf($id = null) // id data yang akan diedit
    {
        if (!isset($id)) redirect('admin/pages/uf'); // kita lakukan redirect ke route ini kalau $id bernilai null

        $pages = $this->pages_model; // objek model
        $validation = $this->form_validation; // objek validation
        $validation->set_rules($pages->rules()); // menerapkan rules

        if($validation->run()) { // melakukan validasi
            $pages->update(); // menyimpan data
            $this->session->set_flashdata('success', 'Saved Successfully');
        }

        $data["pages"] = $pages->getById($id); // mengambil data untuk ditampilkan pada form
        if(!$data["pages"]) show_404(); // jika tidak ada data, tampilkan error 404

        $this->load->view("admin/pages/edit_uf", $data); // menampilkan form edit
    }

    public function edit_kakoto($id = null) // id data yang akan diedit
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

        $this->load->view("admin/pages/edit_kakoto", $data); // menampilkan form edit
    }

    public function edit_kapau($id = null) // id data yang akan diedit
    {
        if (!isset($id)) redirect('admin/pages/kapau'); // kita lakukan redirect ke route ini kalau $id bernilai null

        $pages = $this->pages_model; // objek model
        $validation = $this->form_validation; // objek validation
        $validation->set_rules($pages->rules()); // menerapkan rules

        if($validation->run()) { // melakukan validasi
            $pages->update(); // menyimpan data
            $this->session->set_flashdata('success', 'Saved Successfully');
        }

        $data["pages"] = $pages->getById($id); // mengambil data untuk ditampilkan pada form
        if(!$data["pages"]) show_404(); // jika tidak ada data, tampilkan error 404

        $this->load->view("admin/pages/edit_kapau", $data); // menampilkan form edit
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if($this->pages_model->delete($id)) {
            redirect(site_url('admin/pages'));
        }
    }

}