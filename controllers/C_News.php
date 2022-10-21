<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('m_penilaian');
	}

	public function index()
	{
		$isi['content'] = 'pages/v_News';
		$isi['judul'] = '<i class="fa fa-plus"></i> <b>News</b>';
		// $isi['query'] = $this->m_penilaian->view_News();
		$this->load->view('V_Index',$isi);	
	}

	public function tbl_set_news()
	{
		# code...
		$Info = $this->input->post('Info');
		$Tanggal = $this->input->post('Tanggal');
		$Keterangan = $this->input->post('Keterangan');

		$arrayName = array('Info' => $Info,
						   'Tanggal'=>$Tanggal,
						   'Keterangan'=>$Keterangan 
						);
		$query = $this->m_penilaian->tbl_set_news($arrayName);

		if($query > 0){
			$this->session->set_flashdata('Succes_Add_News',"<div class='alert alert-block alert-success'><button type='button' class='close' 		
															data-dismiss='alert'>
															<i class='fa fa-remove'></i> 
														</button>
														<B>Data Berhasil Di Tambahkan</B>
													 </div>
											");
			redirect('c_news');
		}
		else{
			echo "Gagal";
		}
	}

}

/* End of file C_News.php */
/* Location: ./application/controllers/C_News.php */