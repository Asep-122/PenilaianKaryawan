<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Posisi extends CI_Model {

	public function __construct()
	{
			parent::__construct();
			
	}	


	public function tbl_insert_Pos($value)
	{
		# code...
		return $this->db->insert('jabatan', $value);
	}


	public function tbl_del_pos($Value,$Database)
	{
		# code...
		$this->db->where($Value);
		$this->db->delete($Database);
	}
	

	public function get_dept_Pos()
	{
		# code...
		$this->db->distinct('Nama_Dept');
		 $this->db->select('Nama_Dept');
		$this->db->from('jabatan');
		$this->db->join('departement', 'Id_Dept = Id_Departement', 'right');
		$data = $this->db->get();
		return $data->result_array();
	}
	
	
	public function get_jab()
	{
		# code...
		$this->db->select('*');
		$this->db->from('jabatan');
		$this->db->join('departement', 'jabatan.Id_Dept = departement.Id_Departement');
		$data = $this->db->get();
		return $data->result_array();
	}
}

/* End of file M_Posisi.php */
/* Location: ./application/models/M_Posisi.php */