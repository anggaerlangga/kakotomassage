<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

    public function index()
	{
		//  $this->load->model("banner_model");
		//  $banner["banner"] = $this->banner_model->getAll();

		 $this->load->view('/common/header');
		 $this->load->view('/public/company/about');
		//  $this->load->view('/common/footer');

	}

	public function mantikotravel()
	{
		$this->load->view('/common/header');
		$this->load->model("pages_model");
		$data["about"] = $this->pages_model->getAboutMantiko();
		$data["product"] = $this->pages_model->getProductMantiko();
		$data["tim"] = $this->pages_model->getTimMantiko();
		$this->load->model("gallery_model");
		$data["gallery"] = $this->gallery_model->getGalleryMantiko();
		$this->load->view('/public/company/mantikotravel', $data);
		$this->load->view('/common/footer');
	}

	public function kakoto()
	{
		$this->load->view('/common/header');
		$this->load->model("pages_model");
		$data["about"] = $this->pages_model->getAboutKakoto();
		$data["product"] = $this->pages_model->getProductKakoto();
		$data["tim"] = $this->pages_model->getTimKakoto();
		$data["price"] = $this->pages_model->getPriceKakoto();
		$this->load->model("gallery_model");
		$data["gallery"] = $this->gallery_model->getGalleryKakoto();
		$this->load->view('/public/company/kakoto', $data);
		$this->load->view('/common/footer');
	}

	public function vidtron()
	{
		$this->load->view('/common/header');
		$this->load->model("pages_model");
		$data["about"] = $this->pages_model->getAboutVidtron();
		$data["product"] = $this->pages_model->getProductVidtron();
		$data["tim"] = $this->pages_model->getTimVidtron();
		$this->load->model("gallery_model");
		$data["gallery"] = $this->gallery_model->getGalleryVidtron();
		$this->load->view('/public/company/vidtron', $data);
		$this->load->view('/common/footer');
	}

	public function mgi()
	{
		$this->load->view('/common/header');
		$this->load->model("pages_model");
		$data["about"] = $this->pages_model->getAboutMgi();
		$data["product"] = $this->pages_model->getProductMgi();
		$data["tim"] = $this->pages_model->getTimMgi();
		$this->load->model("gallery_model");
		$data["gallery"] = $this->gallery_model->getGalleryMgi();
		$this->load->view('/public/company/mgi', $data);
		$this->load->view('/common/footer');
	}

	public function kapau()
	{
		$this->load->view('/common/header');
		$this->load->model("pages_model");
		$data["about"] = $this->pages_model->getAboutKapau();
		$data["product"] = $this->pages_model->getProductKapau();
		$data["tim"] = $this->pages_model->getTimKapau();
		$this->load->model("gallery_model");
		$data["gallery"] = $this->gallery_model->getGalleryKapau();
		$this->load->view('/public/company/dkapau', $data);
		$this->load->view('/common/footer');
	}

	public function ufenterprise()
	{
		$this->load->view('/common/header');
		$this->load->model("pages_model");
		$data["about"] = $this->pages_model->getAboutUf();
		$data["product"] = $this->pages_model->getProductUf();
		$data["tim"] = $this->pages_model->getTimUf();
		$this->load->model("gallery_model");
		$data["gallery"] = $this->gallery_model->getGalleryUf();
		$this->load->view('/public/company/ufenterprise', $data);
		$this->load->view('/common/footer');
	}
}
