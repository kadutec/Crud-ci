<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data["title"] = "Login";
		$this->load->view('pages/login', $data);
	}

	public function store()
	{
		$this->load->model("login_model");
		$email = $_POST['email'];
		$senha = md5($_POST['senha']);
		$user = $this->login_model->store($email, $senha);

		if($user) {
			$this->session->set_userdata("logged_user", $user);
			redirect("dashboard");
			
		} else {
			$this->session->set_flashdata('erro', 'Error message');
			redirect("login");
		}
	}

	public function logout()
	{
		$this->session->unset_userdata("logged_user");
		redirect("visit");
	}

	public function error() {
		$this->session->set_flashdata('erro', 'Error message');
	}
}

