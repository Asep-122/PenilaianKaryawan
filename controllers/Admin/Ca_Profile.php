<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ca_Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_penilaian', 'mp');
	}

	public function index()
	{
		
	}
	
	public function Profile($Nip)
	{
		# code...
		$isi['query'] = $this->mp->find_Nip($Nip);	
		$isi['content'] = 'admin/page/va_profile';
		$isi['judul'] = 'Profile';
		
		$this->load->view('admin/Va_Index',$isi);
	}
	
	public function My_Profile($Nip)
	{
		# code...
		$isi['query'] = $this->mp->find_Nip($Nip);	
		$isi['content'] = 'Admin/page/va_my_profile';
		$isi['judul'] = 'My Profile';
		
		$this->load->view('admin/Va_Index',$isi);
	}
	

}

/* End of file C_Profile.php */
/* Location: ./application/controllers/C_Profile.php */
