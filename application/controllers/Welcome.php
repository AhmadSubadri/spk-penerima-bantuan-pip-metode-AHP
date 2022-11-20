<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function dashboard()
	{
		$this->load->view('dashboard/partials_/header');
		$this->load->view('dashboard/content/index');
		$this->load->view('dashboard/partials_/footer');
	}
}
