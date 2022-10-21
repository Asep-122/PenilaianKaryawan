<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Sec extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
	
	public function securty()
	{
		# code...
		$username = $this->session->userdata('username');
		if (empty($username)) {
			# code...
			$this->session->sess_destroy();
			redirect('c_login');
		}
	}

}

/* End of file M_Sec.php */
/* Location: ./application/models/M_Sec.php */
