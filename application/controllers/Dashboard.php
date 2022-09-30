<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function index()
	{
		$this->load->model("games_model");
		$data["games"] = $this->games_model->index();
		$data["title"] = "Dashboard - codeigniter";


		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/dashboard', $data); //esta buscando arquivo dentro da pasta views 
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}
}
