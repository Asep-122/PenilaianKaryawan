<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Divisi extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}


	public function get_input_Dept($value)
	{
		# code...
		return $this->db->insert('Departement',$value);
	}

	
	public function tbl_del_Dept($Value,$Database)
	{
		# code...
		$this->db->where($Value);
		$this->db->delete($Database);
	}

	
	public function get_dept()
	{
		# code...
		
		$data = $this->db->get('departement');
		return $data->result_array();
	}

	
	public function ambilId_Dept($where)
	{
		# code...
		return $this->db->get('departement', $where)->result_array();
	}
	
}

/* End of file M_Divisi.php */
/* Location: ./application/models/M_Divisi.php */