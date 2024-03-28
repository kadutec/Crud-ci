<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		permission();
		$this->load->model("servicos_model");
	}

	public function index()
	{
		$data["servicos"] = $this->servicos_model->index();
		$this->load->model("pecas_model");
		$data["pecas"] = $this->pecas_model->index();
		$data["title"] = "Dashboard";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/dashboard', $data);
		$this->load->view('templates/js', $data);
		$this->load->view('templates/footer', $data);
	}
}
