<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Kriteria extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
		$this->load->model('m_penilaian','Mp');
	}

	public function index()
	{
		if ($this->session->userdata('masuk') != '1') {
			show_404();
		}
	
	}

	public function insert()
	{
		 $Kriteria = $this->input->post('Kriteria');
		 $Keterangan = $this->input->post('Keterangan');

		 echo $Kriteria;

		$data = array('Kriteria' => $Kriteria,
					   'Bobot_Nilai' => $Keterangan
					);

		$data1 = $this->Mp->insert_kriteria($data);
		$query = $this->db->query('alter table penilaian2 ADD '.$Kriteria.' int null');
	}

}

/* End of file C_Kriteria.php */
/* Location: ./application/controllers/C_Kriteria.php */