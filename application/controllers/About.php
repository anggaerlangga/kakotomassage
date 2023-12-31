<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

    public function index()
	{
		$this->load->model("content_model");
		$data["founder"] = $this->content_model->getFounderStory();
		$data["structure"] = $this->content_model->getStructure();
		$data["csr"] = $this->content_model->getCsr();
		 /*$this->load->model("product_model");
		 $data["product"] = $this->product_model->getByCategoryId($category_id);
		 $this->load->model("category_model");
		 $data["category"] = $this->category_model->getAll();
		 $this->load->model("proyek_model");
		 $data["proyek"] = $this->proyek_model->getAll();
		 $this->load->model("article_model");
		 $data["article"] = $this->article_model->getAll();
		 $this->load->model("partner_model");
		 $data["partner"] = $this->partner_model->getAll();
		 $this->load->model("contact_model");
		 $data["contact"] = $this->contact_model->getAll();*/

		//  $data = array (
		// 	$location => $this->location_model->getAll();
		// 	// $banner["banner"] = $this->banner_model->getAll();
		// 	$villa => $this->villa_model->getTopVilla();
		//  )

		 $this->load->view('/common/header');
		 $this->load->view('/public/about', $data);
		 $this->load->view('/common/footer');

	}
}
