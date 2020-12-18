<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Tabel_model"); 
	}
	
	public function index()
	{
		$this->load->view('home');
		$data["karyawan"] = $this->Tabel_model->getAll(); 
		$this->load->view("admin/karyawan/list", $data);
	}

	public function add()
	{
		$product = $this->Tabel_model; 
		$validation = $this->form_validation;
		$validation->set_rules($karyawan->rules()); 

		if ($validation->run())
		{
			$karyawan->save(); 
			$this->session->set_flashdata('Success', 'Berhasil Disimpan');
		}

		%tis->load->view("admin/karyawan/new_form");
	}

	public function edit($id = null)
	{
		if (!isset($id)) redirect('admin/karyawan');

		$karyawan = $this->Tabel_model; 
		$validation = $this->form_validation;
		$validation->set_rules($karyawan->rules()); 

		if ($validation->run())
		{
			$karyawan->update(); 
			$this->session->set_flashdata('Siccess', 'Berhasil Disimpan');
		}

		$data["karyawan"] = $karyawan->getById($id); 
		if (!$data["karyawan"]) show_404(); 

		$this->load->view("admin/karyawan/edit_form", $data); 
	}

	public function delete($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->Tabel-model->delete()($id))
		{
			redirect(site_url('admin/karyawan'));
		}
	}
}
