<?php if ( !defined('BASEPATH')) exit("No direct script access allowed");

class  C_Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_penilaian');
		$this->load->model('m_divisi');
		$this->load->model('m_posisi');		
	}

	public function index()
	{
		// if ($this->session->userdata('masuk') != '1') {
		// 	show_404();

		// }

		$this->M_Sec->securty();
		$isi['query'] = $this->m_penilaian->view_News();
		$isi['content'] = 'pages/v_content_home';
		$isi['judul'] = 'Home';
		$this->load->view('V_Index',$isi);
	}
	
	public function Logout()
	{
			# code...
		$this->session->sess_destroy();
		redirect('c_login');
	}


	public function ambilNip()
	{
		# code...
		$Nip = $this->input->post('Nip');
		$where  = array('Nip' => $Nip);
		$data = $this->m_penilaian->ambilId($where);
		echo json_encode($data);
	}
	
	public function tbl_periode()
	{
		# code...
		$isi['query'] = $this->m_divisi->get_dept();	
		$isi['content'] = 'pages/V_Set_Periode';
		$isi['judul'] = 'Setting Periode';
		$this->load->view('V_Index',$isi);
	}
	
	public function tbl_karyawan()
	{
		# code...
		if ($this->session->userdata('masuk') != '1') {
			show_404();

		}
		$isi['query'] = $this->m_penilaian->get_karyawan();
		// $isi['query_dept'] = $this->m_penilaian->get_dept();
		// $isi['query_jab'] = $this->m_penilaian->get_jab();
		$isi['query_kontrak'] = $this->m_penilaian->get_kontrak();
	//	$isi['Nip'] = $this->m_penilaian->AutoNip();
		$isi['content'] = 'pages/v_data_karyawan';
		$isi['judul'] = 'Daftar Karyawan';
		$this->load->view('V_Index',$isi);
	}
	
	public function tbl_nilai()
	{
		# code...

		$isi['content'] = 'pages/v_nilai';
		$isi['query1'] = $this->m_divisi->get_dept();
		// $isi['query'] = $this->m_penilaian->listnilai2();
		$isi['judul'] = 'Nilai';
		$this->load->view('v_index', $isi);
	}
	
	public function ambildata()
	{
		# code...
		$isi = $this->m_penilaian->get_karyawan();
		echo json_encode($isi);
	}

	public function Search_Nilai()
	{

		$Divisi = $this->input->post('Divisi');
		$Posisi = $this->input->post('Posisi');

		$data = $this->m_penilaian->listnilai2($Divisi,$Posisi);
		echo(json_encode($data));
		
	}
	
	public function tbl_Dept()
	{
		# code...
		$isi['query'] = $this->m_penilaian->get_dept();
	//	$isi['Nip'] = $this->m_penilaian->AutoNip();
		$isi['content'] = 'pages/v_Departement';
		$isi['judul'] = 'Departement';
		$this->load->view('V_Index',$isi);
	}
	
	public function tbl_Jab()
	{
		# code...
		$isi['query'] = $this->m_penilaian->get_jab();
	//	$isi['Nip'] = $this->m_penilaian->AutoNip();
		$isi['content'] = 'pages/v_jabatan';
		$isi['judul'] = 'Posisi';
		$this->load->view('V_Index',$isi);
	}
	
	public function tbl_combo()
	{
		# code...
		$id = $this->input->post('id');
		$data = $this->m_penilaian->get_combo($id);
		echo json_encode($data);
		
	}
	
	public function tbl_check()
	{
		# code...
		$modul = $this->input->post('modul');
		$id = $this->input->post('id');
		
		if ($modul=='check') {
			# code...
			echo $this->m_penilaian->get_check($id);
		}
	}
	
	public function tbl_Kriteria()
	{
		# code...
		$isi['query'] = $this->m_penilaian->get_kriteria();
	//	$isi['Nip'] = $this->m_penilaian->AutoNip();
		$isi['content'] = 'pages/v_kriteria';
		$isi['judul'] = 'Kriteria';
		$this->load->view('V_Index',$isi);
	}
	
	public function get_AutoNip()
	{
		# code...
		$Kode['Nip'] = $this->m_penilaian->AutoNip();
		
	}
	
	public function input_karyawan()
	{
		# code...
		$Nip = $this->input->post('nip');
		$Nama = $this->input->post('nama');
		$Jk = $this->input->post('jk');
		$Agama = $this->input->post('agama');
		$Tgl = $this->input->post('tgl');
		$Foto = $this->input->post('data');
		$Dept = $this->input->post('dept');
		$Jabt = $this->input->post('jabt');
		$Masa = $this->input->post('Masa');
		$Alamat = $this->input->post('data', TRUE);
		$Active = $this->input->post('data');
		$NoTelp = $this->input->post('data');
		
		$arrayName = array('Nip' => $Nip,
							'Nama' => $Nama,
							'Jenis_Kelamin' => $Jk,
							'Agama' => $Agama,
							'Tgl' => $Tgl,
							'Id_Jabatan' => $Jabt,
							'Id_Kontrak' => $Masa,
							'No_Hp' => $NoTelp,
							'Alamat' => $Alamat,
							'Active_Kerja' => $Active,
							'Foto' => $Foto);
		
		$query = $this->m_penilaian->get_input($arrayName);
		
		if ($query>0) {
			# code...
			echo "Input Berhasil";
			redirect('c_home/tbl_karyawan');
		}
		
		else{
			echo "Input Gagal";
			redirect('c_home/tbl_karyawan');
		}		
	}
		
	public function tbl_staf()
	{
		# code...
		$data['query'] = $this->m_divisi->get_dept();
		$data['content'] = 'pages/v_staf_penilai';
		$data['judul'] = 'Setting Penilai';
		$this->load->view('v_index',$data);
	}
	
	public function del_karyawan($value)
	{
		# code...
		$data = $this->m_penilaian->delete_karyawan($value);
		if ($data>0) {
			# code...
			redirect('c_home/tbl_karyawan');
		}

	}
	
	public function insert_check()
	{
		# code...
		$id = "";
		$input = $this->m_penilaian->get_check($id);
		$input = $this->input->post('check[]');
		
		
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
