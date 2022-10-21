<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Account extends CI_Controller {

	public function index()
	{
		$isi['content'] = 'pages/v_account';
		$isi['judul'] = 'Account';
		$this->load->view('V_Index',$isi);
		
	}



}

/* End of file C_Account.php */
/* Location: ./application/controllers/C_Account.php */