<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

    public function index()
	{
		 $this->load->model("banner_model");
		 $banner["banner"] = $this->banner_model->getAll();
		 $this->load->model("pages_model");
		 $data["about"] = $this->pages_model->getAboutBySubPage();
		 $this->load->model("service_model");
		 $data["service"] = $this->service_model->getAll();
		 $this->load->model("testimoni_model");
		 $data["testimoni"] = $this->testimoni_model->getAll();
		 $this->load->model("promo_model");
		 $data["promo"] = $this->promo_model->getAllPromo();
		 $this->load->model("gallery_model");
		 $data["gallery"] = $this->gallery_model->getAll();

		 $this->load->view('/common/header');
		 $this->load->view('/common/banner', $banner);
		 $this->load->view('/public/home', $data);
		 $this->load->view('/common/footer');

	}
}
