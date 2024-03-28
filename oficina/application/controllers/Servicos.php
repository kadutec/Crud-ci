<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicos extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		permission();
		$this->load->model("servicos_model");
	}

	public function index()
	{
		$data["servicos"] = $this->servicos_model->index();
		$data["title"] = "Serviços";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/servicos', $data);
		$this->load->view('templates/js', $data);
		$this->load->view('templates/footer', $data);
	}

	public function new()
	{
		$data["title"] = "Serviços";
		$this->load->model("pecas_model");
		$data["pecas"] = $this->pecas_model->index();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/form-servicos', ['data' => $data]);
		$this->load->view('templates/js', $data);
		$this->load->view('templates/footer', $data);
	}

	public function store() 
	{
		$servico = $_POST;
		$this->servicos_model->store($servico);
		redirect("servicos");
	}

	public function edit($id)
	{
		$data["servico"] = $this->servicos_model->show($id);
		$data["title"] = "Editar Serviços";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/form-servicos', $data);
		$this->load->view('templates/js', $data);
		$this->load->view('templates/footer', $data);
	}

	public function update($id)
	{
		$servico = $_POST;
		$this->servicos_model->update($id, $servico);
		redirect("servicos");
	}

	public function delete($id)
	{
		$this->servicos_model->destroy($id);
	}
}
