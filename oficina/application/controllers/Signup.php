<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index()
	{
		$data["title"] = "Sign-up";
		$this->load->view('pages/signup', $data);
	}

	public function store()
{
    $this->load->model("users_model");

    $exist_user = $this->users_model->getByEmail($_POST["email"]);
    if ($exist_user) {
        redirect("signup");
        return;
    }

    $user = array(
        "nome" => $_POST["nome"],
        "email" => $_POST["email"],
        "senha" => md5($_POST["senha"]),
        "tipo" => $_POST["tipo"]
    );

    $this->users_model->store($user);
    redirect("usuarios");
}

}
