<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_MailForm extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$isi['content'] = 'pages/v_form_mail';
		$isi['judul'] = 'Mail Box';
		$this->load->view('V_Index',$isi);
	}
	

}

/* End of file C_MailForm.php */
/* Location: ./application/controllers/C_MailForm.php */
