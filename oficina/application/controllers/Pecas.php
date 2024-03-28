<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pecas extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		permission();
		$this->load->model("pecas_model");
	}

	public function index()
	{
		$data["pecas"] = $this->pecas_model->index();
		$data["title"] = "Peças";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/pecas', $data);
		$this->load->view('templates/js', $data);
		$this->load->view('templates/footer', $data);
		
	}

	public function new()
	{
		$data["title"] = "Peças";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/form-pecas', $data);
		$this->load->view('templates/js', $data);
		$this->load->view('templates/footer', $data);
	}

	public function store() 
	{
		$peca = $_POST;
		$this->pecas_model->store($peca);
		redirect("pecas");
	}

	public function edit($id)
	{
		$data["peca"] = $this->pecas_model->show($id);
		$data["title"] = "Editar Peças";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/form-pecas', $data);
		$this->load->view('templates/js', $data);
		$this->load->view('templates/footer', $data);
	}

	public function update($id)
	{
		$peca = $_POST;
		$this->pecas_model->update($id, $peca);
		redirect("pecas");
	}

	public function delete($id)
	{
		$this->pecas_model->destroy($id);
		redirect("pecas");
	}
}

