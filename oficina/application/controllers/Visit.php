<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visit extends CI_Controller {

	public function index()
	{
		$data["title"] = "Car Repair";
		$this->load->view('pages/visit', $data);
	}
}
