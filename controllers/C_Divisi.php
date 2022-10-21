<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Divisi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_divisi');
		$this->load->model('m_posisi');
	}

	public function index()
	{

		if ($this->session->userdata('masuk') != '1') {
			show_404();

		}
		# code...
		$isi['query'] = $this->m_divisi->get_dept();
	//	$isi['Nip'] = $this->m_divisi->AutoNip();
		$isi['content'] = 'pages/v_Departement';
		$isi['judul'] = '<i class="fa fa-building"></i> <b>Divisi</b>';
		$this->load->view('V_Index',$isi);
	}



	public function tbl_set_Dept()
	{
		# code...
		
		$Nama = $this->input->post('Nama_Dept');
		$Keterangan = $this->input->post('Keterangan');
		$arrayName = array('Nama_Dept' => $Nama,
							'Keterangan' => $Keterangan 
		 			);

		$query = $this->m_divisi->get_input_Dept($arrayName);
		if ($query>0) {
			# code...
			$this->session->set_flashdata('Succes_Add_Dept',"<div class='alert alert-block alert-success'><button type='button' class='close' data-dismiss='alert'>
															<i class='fa fa-remove'></i> 
														</button>
														<B>Data Berhasil Di Tambahkan</B>
													 </div>
											");
			redirect('c_divisi');
		}
		
		else{
			echo "Input Gagal";
			redirect('c_divisi');
		}
	}

	public function tbl_del_Dept($id)
	{
		// # code...
		// if($id=""){
		// 	$this->session->set_flashdata('Error', 'Data Anda Gagal Dihapus');
		// }
		// else{	
			$arrayName = array('Id_Departement' => $id);
			$this->m_divisi->tbl_del_Dept($arrayName,'Departement');
			$this->session->set_flashdata('Succes_Del_Dept',"<div class='alert alert-block alert-success'><button type='button' class='close' data-dismiss='alert'>
															<i class='fa fa-remove'></i> 
														</button>
														<B>Data Berhasil Di Hapus</B>
													 </div>
											");
			redirect('c_divisi');
		// }
	}

	public function ambilId_Dept()
	{
		# code...
		// $this->form_validation->set_rules('Id_Departement', 'Id_Departement', 'required');
		$this->form_validation->set_rules('Nama_Dept_New', 'Nama_Dept_New', 'required');
		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('error',"Data Gagal Di Edit");
			redirect('C_Home/tbl_Dept');
		}else{
			$data=array(
				"Nama_dept"=>$_POST['Nama_Dept_New']
			);
			$this->db->where('Id_Departement', $_POST['Id_Departement']);
			$this->db->update('departement',$data);
			$this->session->set_flashdata('Succes_Update_Dept',"<div class='alert alert-block alert-success'><button type='button' class='close' data-dismiss='alert'>
															<i class='fa fa-remove'></i> 
														</button>
														<B>Data Berhasil Di Ubah</B>
													 </div>
											");
			redirect('c_divisi');
		}
	}


}

/* End of file C_Divisi.php */
/* Location: ./application/controllers/C_Divisi.php */