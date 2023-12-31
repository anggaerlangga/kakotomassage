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
		 $this->load->model("content_model");
		 $data["about"] = $this->content_model->getAboutByPageId();
		 $this->load->model("content_model");
		 $data["product"] = $this->content_model->getProductByPageId();
		 $this->load->model("content_model");
		 $data["client"] = $this->content_model->getClientByPageId();
		 $this->load->model("gallery_model");
		 $data["gallery_mantiko"] = $this->gallery_model->getGalleryMantiko();
		 $this->load->model("gallery_model");
		 $data["gallery_vidtron"] = $this->gallery_model->getGalleryVidtron();
		 $this->load->model("gallery_model");
		 $data["gallery_mgi"] = $this->gallery_model->getGalleryMgi();
		 $this->load->model("gallery_model");
		 $data["gallery_uf"] = $this->gallery_model->getGalleryUf();
		 $this->load->model("gallery_model");
		 $data["gallery_kakoto"] = $this->gallery_model->getGalleryKakoto();
		 $this->load->model("gallery_model");
		 $data["gallery_kapau"] = $this->gallery_model->getGalleryKapau();
		 $this->load->model("contact_model");
		 $data["contact_mantiko"] = $this->contact_model->getContactMantiko();
		 $this->load->model("contact_model");
		 $data["contact_vidtron"] = $this->contact_model->getContactVidtron();

		 $this->load->view('/common/header');
		 $this->load->view('/common/banner', $banner);
		 $this->load->view('/public/home');
		 $this->load->view('/common/footer');

	}
}
