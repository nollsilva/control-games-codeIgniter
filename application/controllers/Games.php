<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Games extends CI_Controller{

	public function index()
	{
		$this->load->model("games_model");
		$data["games"] = $this->games_model->index();
		$data["title"] = "Games - codeigniter";
		
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/games', $data); //esta buscando arquivo dentro da pasta views 
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);

	}

	public function new()
	{
		$data["title"] = "Games - codeigniter";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/form-games', $data); //esta buscando arquivo dentro da pasta views 
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);

	}

	public function store()
	{	
		$game = $_POST;
		$game["user_id"] = '1'; 
		$this->load->model("games_model");
		$this->games_model->store($game);
		redirect("dashboard");

	}
}