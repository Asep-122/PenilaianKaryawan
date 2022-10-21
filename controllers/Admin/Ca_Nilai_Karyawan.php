<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ca_Nilai_Karyawan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_penilaian', 'Mp');
	}

	public function index()
	{
		
		$isi['query'] = $this->Mp->get_nilai();
		$isi['content'] = 'admin/page/va_Peserta_Nilai';
		$isi['judul'] = 'Daftar Peserta Nilai';
		$this->load->view('Admin/Va_index',$isi);
	}
	
	public function Nilai_Kriteria()
	{
		# code...
		$isi['query1'] = $this->Mp->get_nilai();
		$isi['query'] = $this->Mp->get_kriteria();
		$isi['content'] = 'admin/page/va_Kriteria';
		$isi['judul'] = 'Nilai Kriteria';
		$this->load->view('Admin/Va_index',$isi);
	}
}

/* End of file Ca_Nilai_Karyawan.php */
/* Location: ./application/controllers/Ca_Nilai_Karyawan.php */
