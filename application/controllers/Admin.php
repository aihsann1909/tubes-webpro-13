<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Tabel_model');
	}
	
	public function index()
	{
		$this->load->view('admin');
	}

	public function add_data()
	{
		$this->Tabel_model->insertdata();

		redirect('Admin');
	}
}
