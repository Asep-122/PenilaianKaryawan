<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_penilaian', 'mp');
	}

	public function index()
	{
		$this->load->view('v_login');
	}
	
	public function aksi_Login()
	{
		# code...
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$where = array(
				'Username' => $username,
				'Password' =>  md5($password)
			);
				
			$data = $this->mp->cek_login("login",$where);
			if ($data->num_rows() > 0) {
				# code...
				
				foreach ($data->result_array() as $key) {
					# code...
					$data_session = array(
							'username' => $key['Username'],
							'nip' => $key['Log_Nip'],
							'Divisi' => 'Divisi'
						);
					
					$this->session->set_userdata($data_session);
					if ($key['cat_login_id']=="1") {
						# code...
						$this->session->set_userdata('masuk','1');
						redirect("C_Home");
					}
					elseif ($key['cat_login_id']=='2') {
						# code...
						$this->session->set_userdata('masuk','2');
						redirect("C_Home");
					}
				}
			}
			else{
				$this->session->set_flashdata('info',"<div class='alert alert-block alert-danger'>
														<button type='button' class='close' data-dismiss='alert'>
															<i class='fa fa-remove'></i> 
														</button>
														Maaf Username atau Password salah
													 </div>
											");
				redirect('C_Login');
			}	
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
