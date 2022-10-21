<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ca_Nilai_Karyawan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_penilaian', 'Mp');
	}

	public function index()
	{
		if ($this->session->userdata('masuk') != '2') {
			show_404();
		}
		$isi['query'] = $this->Mp->get_nilai();	
		$isi['content'] = 'pages/va_Peserta_Nilai';
		$isi['judul'] = 'Daftar Peserta Nilai';
		$this->load->view('V_index',$isi);
	}
		
	public function Nilai_Kriteria($id)
	{
		# code...
		$isi['query1'] = $this->Mp->get_nilai();
		$isi['row'] = $this->Mp->get_karyawan2($id);
		$isi['query'] = $this->Mp->get_kriteria();
		$isi['content'] = 'pages/va_Kriteria';
		$isi['judul'] = 'Nilai Kriteria';
		$this->load->view('v_index',$isi);
	}

	public function set_insert()
	{
		$Nip = $this->session->userdata('nip');
		$IdPest = $this->input->post('id_peserta');
		$kriteria = $this->input->post('kriteria[]');
		$krit0 = 0;
		$krit1 = 0;
		$krit2 = 0;
		$krit3 = 0;
		$krit4 = 0;


			if ($kriteria[0] == 'Sangat Baik') {
				$krit0 += 90;		
			}else if ($kriteria[0] == 'Baik') {
				$krit0 += 80;
			}else if ($kriteria[0] == 'Cukup') {
				$krit0 += 70;
			}else if ($kriteria[0] == 'Kurang') {
				$krit0 += 60;
			}else if ($kriteria[0] == 'Kurang Baik') {
				$krit0 += 50;
			}

			if ($kriteria[1] == 'Sangat Baik') {
				$krit1 += 90;		
			}else if ($kriteria[1] == 'Baik') {
				$krit1 += 80;
			}else if ($kriteria[1] == 'Cukup') {
				$krit1 += 70;
			}else if ($kriteria[1] == 'Kurang') {
				$krit1 += 60;
			}else if ($kriteria[1] == 'Kurang Baik') {
				$krit1 += 50;
			}

			if ($kriteria[2] == 'Sangat Baik') {
				$krit2 += 90;		
			}else if ($kriteria[2] == 'Baik') {
				$krit2 += 80;
			}else if ($kriteria[2] == 'Cukup') {
				$krit2 += 70;
			}else if ($kriteria[2] == 'Kurang') {
				$krit2 += 60;
			}else if ($kriteria[2] == 'Kurang Baik') {
				$krit2 += 50;
			}

			if ($kriteria[3] == 'Sangat Baik') {
				$krit3 += 90;		
			}else if ($kriteria[3] == 'Baik') {
				$krit3 += 80;
			}else if ($kriteria[3] == 'Cukup') {
				$krit3 += 70;
			}else if ($kriteria[3] == 'Kurang') {
				$krit3 += 60;
			}else if ($kriteria[3] == 'Kurang Baik') {
				$krit3 += 50;
			}

			if ($kriteria[2] == 'Sangat Baik') {
				$krit4 += 90;		
			}else if ($kriteria[2] == 'Baik') {
				$krit4 += 80;
			}else if ($kriteria[2] == 'Cukup') {
				$krit4 += 70;
			}else if ($kriteria[2] == 'Kurang') {
				$krit4 += 60;
			}else if ($kriteria[2] == 'Kurang Baik') {
				$krit4 += 50;
			}


		$data1 = "";
		$Nilai = 0;	
		foreach ($kriteria as $value) {
			  // $data1 = " ";			  
			  $data1 .=  ("'".($value)."',");
			  
		}
		
		$data = strlen($data1)-1;
		$query =   substr($data1, 0,$data);
		// echo($query);

		$myquery =  $this->db->query('Insert into penilaian2 values ('.$Nip.','.$IdPest.','.date('Y-m-d').','.$query.')');
 		
 		if ($myquery) {
 			echo("berhasil ");
 		}
 		else{
 			mysql_error();
 		}
/*		$arrayName = array('Nip_Penilai' => $Nip,
						   'Nip_Peserta' => $IdPest,
						   'Waktu_Nilai' => date('Y-m-d'),
						   'kehadiran' => $krit0,
						   'kerapihan' => $krit1,
						   'sikap' => $krit2,
						   'tanggung_jawab' =>$krit3,
						   'teamwork' => $krit4,
						   // 'Total'=>($krit0+$krit1+$krit2+$krit3+$krit4)/5
						);

		print_r($arrayName);

		if($this->Mp->insert_penilaian($arrayName)){
			$this->Mp->update_status_penilaian_karyawan($IdPest);
			redirect('Ca_Nilai_Karyawan');
		}else{
			redirect('Ca_Nilai_Karyawan');
		}
*/
	 }
}
		
/* End of file Ca_Nilai_Karyawan.php */
/* Location: ./application/controllers/Ca_Nilai_Karyawan.php */
