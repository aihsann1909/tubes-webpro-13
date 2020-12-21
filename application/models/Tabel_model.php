<?php defined('BASEPATH') OR exit('NO direct script access allowed'); 

/**
 * 
 */
class Tabel_model extends CI_Model
{
	private $_table = "karyawan"; 

	public $no; 
	public $nama_karyawan; 
	public $posisi_karyawan; 
	public $foto_karyawan;

	public function rules()
	{
		return [
			['field' => 'nama_karyawan', 
			 'label' => 'Nama Karyawan',
			 'rules' => 'required'], 
			['field' => 'posisi_karyawan',
			 'label' => 'Posisi Karyawan',
			 'rules' => 'required']
		];
	}

	public function getAll()
	{
		return $this->db->get('karyawan')->result_array();
	}

	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["no" => $id]) -> row(); 
	}

	public function insertdata()
	{
		$data = [ 
			'nama_karyawan' => $this->input->post('nama_karyawan', true),
			'posisi_karyawan' => $this->input->post('posisi_karyawan', true),
			'foto_karyawan' => base_url("images/Alfonus.jpg")//$this->input->post('foto_karyawan', true)
		]; 
		return $this->db->insert('karyawan', $data);
		///$post = $this->input->post(); 
		//$this->no = uniqid();
		//$this->nama_karyawan = $post["Nama Karyawan"]; 
		//$this->posisi_karyawan = $post["Posisi Karyawan"]; 
		//return $this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->no = $post["No"]; 
		$this->nama_karyawan = $post["Nama Karyawan"]; 
		$this->posisi_karyawan = $post["Posisi Karyawan"]; 
		return $this->db->update($this->_table, $this, array('no' => $post['id']));
	}

	public function delete($id)
	{
		return $this->db->delete($this->_table, array("No" => $id));
	}
}