<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		permission();
		permissionAdm();
		$this->load->model("users_model");
	}

	public function index()
	{
		$data["usuarios"] = $this->users_model->index();
		$data["title"] = "Usuários";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/usuarios', $data);
		$this->load->view('templates/js', $data);
	}

	public function new()
	{
		$data["title"] = "Usuarios";

		$this->load->view('pages/signup', $data);
	}

	public function store()
	{
		$this->load->model("users_model");
		$user = array(
			"nome" => $_POST["nome"],
			"email" => $_POST["email"],
			"senha" => md5($_POST["senha"]),
			"tipo" => $_POST["tipo"]
		);

		$this->users_model->store($user);
		redirect("usuarios");
	}

	public function edit($id)
	{
		$data["usuario"] = $this->users_model->show($id);
		$data["title"] = "Editar Usuários";

		$this->load->view('templates/header', $data);
		$this->load->view('pages/signup', $data);
		$this->load->view('templates/js', $data);
		$this->load->view('templates/footer', $data);
	}

	public function update($id)
	{
		$usuario = $_POST;
		$this->users_model->update($id, $usuario);
		redirect("usuarios");
	}

	public function delete($id)
	{
		$this->users_model->destroy($id);
		redirect("usuarios");
	}
}

