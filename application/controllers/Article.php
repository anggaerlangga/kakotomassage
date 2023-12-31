<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

    public function index()
	{
		$this->load->model("article_model");
		$data["article"] = $this->article_model->getAll();
		$data["recentpost"] = $this->article_model->getAll();
		$this->load->view('/common/header');
		$this->load->view('public/article', $data);
		$this->load->view('/common/footer');
	}

	public function getDetail($id)
	{
		$this->load->model("article_model");
		$data["article"] = $this->article_model->getById($id);
		$this->load->model("article_model");
		$data["article_all"] = $this->article_model->getAll();
		$this->load->view('public/article-detail', $data);
		$this->load->view('/common/footer');
	}

}



