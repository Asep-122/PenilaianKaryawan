<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Posisi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('m_posisi');
		$this->load->model('m_divisi');
	}

	public function index()
	{
		if ($this->session->userdata('masuk') != '1') {
			show_404();

		}
		$isi['query'] = $this->m_posisi->get_jab();
		$isi['queryDept'] = $this->m_posisi->get_dept_Pos();
		$isi['queryDept1'] = $this->m_divisi->get_dept();

		$isi['content'] = 'pages/v_jabatan';
		$isi['judul'] = '<i class="fa fa-houzz"></i> <b>Posisi</b>';
		$this->load->view('V_Index',$isi);
	}



	public function tbl_set_Pos()
	{
		# code...
		$Posisi = $this->input->post('Posisi');
		$Nama_Posisi = $this->input->post('Nama_Posisi');

		$arrayName = array('Id_Dept' => $Posisi,
							'Nama_Jabatan'=> $Nama_Posisi 
						);
		$query = $this->m_posisi->tbl_insert_Pos($arrayName);

		if ($query>0) {
			# code...
			$this->session->set_flashdata('Succes_Add_Pos',"<div class='alert alert-block alert-success'><button type='button' class='close' 		
															data-dismiss='alert'>
															<i class='fa fa-remove'></i> 
														</button>
														<B>Data Berhasil Di Tambahkan</B>
													 </div>
											");
			redirect('c_posisi');
		}
		
		else{
			$this->session->set_flashdata('Succes_Add_Pos',"<div class='alert alert-block alert-danger'><button type='button' class='close' 		
															data-dismiss='alert'>
															<i class='fa fa-remove'></i> 
														</button>
														<B>Data gagal Di Tambahkan</B>
													 </div>
											");
			redirect('c_posisi');

		}
	}


	public function tbl_Update_Pos()
	{
		# code...
		 // $this->form_validation->set_rules('Id_Jabatan', 'Id_Jabatan', 'required');
		$this->form_validation->set_rules('Nama_Posisi_New', 'Nama_Posisi_New', 'required');
		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('error',"Data Gagal Di Edit");
			redirect('C_Home/tbl_jab');
		}else{
			$data=array(
				"Nama_Jabatan"=>$_POST['Nama_Posisi_New']
			);
			$this->db->where('Id_Jabatan', $_POST['Id_Jabatan']);
			$this->db->update('jabatan',$data);
			$this->session->set_flashdata('Succes_Update_Pos',"<div class='alert alert-block alert-success'><button type='button' class='close' data-dismiss='alert'>
															<i class='fa fa-remove'></i> 
														</button>
														<B>Data Berhasil Di Ubah</B>
													 </div>
											");
			redirect('c_posisi');
		}
	}

	public function tbl_del_Pos($id)
	{
		// # code...
		// if($id=""){
		// 	$this->session->set_flashdata('Error', 'Data Anda Gagal Dihapus');
		// }
		// else{	
			$arrayName = array('Id_Jabatan' => $id);
			$this->m_posisi->tbl_del_pos($arrayName,'jabatan');
			$this->session->set_flashdata('Succes_Del_Pos',"<div class='alert alert-block alert-success'><button type='button' class='close' 			
												data-dismiss='alert'>
															<i class='fa fa-remove'></i> 
														</button>
														<B>Data Berhasil Di Hapus</B>
													 </div>
											");
			redirect('c_posisi');
		// }
	}
	

}

/* End of file C_Posisi.php */
/* Location: ./application/controllers/C_Posisi.php */