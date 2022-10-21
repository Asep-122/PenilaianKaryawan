<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  Ca_Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_penilaian');		
	}

	public function index()
	{
		$this->M_Sec->securty();
		$isi['content'] = 'admin/page/va_content_home';
		$isi['judul'] = 'Home';
		$this->load->view('Admin/Va_Index',$isi);
	}
	
	public function Logout()
	{
		# code...
		$this->session->sess_destroy();
		redirect('c_login');
	}
}
