<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_penilaian extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
	
	public function get_nilai()
	{
		# code...
		// $query = 'select Id_Dept from karyawan a inner join jabatan b on(a.Id_Jabatan = b.Id_Jabatan) 
		//  where nip = 1150812';

		// $this->db->select('*');
		// $this->db->from('karyawan');
		// $this->db->join('peserta_penilaian', 'karyawan.Nip = peserta_penilaian.Nip_Peserta');
		// $this->db->join('jabatan', 'karyawan.Id_Jabatan = jabatan.Id_Jabatan');
		// $this->db->join('departement', 'departement.Id_Departement = karyawan.Id_Jabatan');
		// $this->db->where('Id_Departement',$query);

		$data = $this->db->query(
			'SELECT * FROM jabatan a inner join karyawan b on(a.id_jabatan = b.id_jabatan) WHERE nip <> '.$this->session->userdata('nip').'  and  id_dept = (select Id_Dept from jabatan a inner join karyawan b on(a.Id_jabatan = b.Id_Jabatan) where nip = '.$this->session->userdata('nip').') and a.id_jabatan > 3'
		);
		return $data->result_array();
	}

	public function validasi_nilai()
	{

		$data = $this->db->query('select *From penilaian');
	}

	public function update_status_penilaian_karyawan($nip)
	{
		$data = array(
			'status' => 1
		);

		$where = array(
			'Nip' => $nip
		);

		return $this->db->update('karyawan', $data, $where);
	}
	
	public function get_input($data)
	{
		# code...
		return $this->db->insert('karyawan',$data);
	}


	public function cek_login($table,$where)
	{
		# code...
		# 
		return $this->db->get_where($table,$where);
	}
	
	public function get_kontrak()
	{
		# code...
		$data = $this->db->get('list_kontrak');
		return $data->result_array();
	}
	public function get_karyawan()
	{
		# code...
		$this->db->select('Nip,Nama,Jenis_Kelamin,Nama_Jabatan as Jabatan,Nama_Dept as Departement,Masa_Kontrak,Active_Kerja,Agama,Tgl_Lahir,No_Hp,Alamat,Active_Kerja,foto');
		$this->db->from('karyawan');
		$this->db->join('list_kontrak', 'karyawan.Id_Kontrak = list_kontrak.Kd_Kontrak');
		$this->db->join('jabatan', 'karyawan.Id_Jabatan = jabatan.Id_Jabatan');
		$this->db->join('departement', 'jabatan.Id_Dept= departement.Id_Departement');
		$data = $this->db->get();
		return $data->result_array();
	}

	public function get_karyawan2($id)
	{
		$this->db->select('*');
		$this->db->from('karyawan');
		$this->db->where('Nip', $id);
		$data = $this->db->get();
		return $data->result_array();
	}

	function get_karyawan1($value)
	{
		$this->db->select('Nip, Nama,departement');
		$this->db->from('karyawan');
		$this->db->where('Nip', $value);
		
	}
	
	public function get_combo($JabId)
	{
		# code...
		$hasil = $this->db->get_where('jabatan', array('Id_Dept'=>$JabId));
		return $hasil->result_array();
	}
	
	public function get_check($JabId)
	{
		# code...
		$jab = "";
		$this->db->order_by('Nama_Jabatan', 'asc');
		$jab1 = $this->db->get_where('jabatan', array('Id_Dept'=>$JabId));
		
		foreach ($jab1->result_array() as $key) {
			# code...
			$el = $key['status']=='1' ? 'checked' : '';
			$jab .="<div class='form-control'>
			<input type='checkbox' name='check[]' value='$key[Id_Jabatan]' $el> $key[Nama_Jabatan]</div><br>";
		}
		
		return $jab;
	}
	
	public function ambilId($where)
	{
		# code...
		return $this->db->get_where('karyawan',$where)->result_array();
	}

	
	public function get_kriteria()
	{
		# code...
		$this->db->select("*");
		$this->db->from('kriteria');
		$data = $this->db->get();
		return $data->result_array();
	}
	public function get_peserta_nilai($departement,$jabatan)
	{
		# code...
		$this->db->select('*');
		$this->db->from('karyawan');
		$this->db->join('list_kontrak', 'karyawan.Id_Kontrak = list_kontrak.Kd_Kontrak');
		$this->db->join('jabatan', 'karyawan.Id_Jabatan = jabatan.Id_Jabatan');
		$this->db->join('departement', 'jabatan.Id_Dept= departement.Id_Departement');
		$this->db->where('departement', $departement);
		$data = $this->db->get();
		return $data->result_array();
	}
	
	
	public function find_Nip($Nip)
	{
		# code...
		
		$data = $this->db->query("SELECT *FROM karyawan INNER JOIN jabatan on (karyawan.Id_Jabatan = jabatan.Id_Jabatan) INNER JOIN departement on (jabatan.Id_Dept = departement.Id_Departement) INNER JOIN list_kontrak on (karyawan.Id_Kontrak = list_kontrak.Kd_Kontrak) where Nip = $Nip");
		
		if ($data->num_rows()>0) {
			# code...
			return $data->row();
		}
		else{
			return array();
		}
		
		
	}
	
	public function edit_karyawan()
	{
		# code...
		
	}

	public function listnilai()
	{
		$data = $this->db->field_data('penilaian2');

		return $data;
		
	}

	public function listnilai2($data1,$data2)
	{
		$query .= "where Divisi = ".$data1;
		$query1 .= "And Divisi = ".$data2;

		$data = $this->db->query ("SELECT a.* FROM penilaian2 a inner join karyawan b on (a.Nip_Peserta = b.Nip)

				inner join jabatan c on(b.Id_jabatan = c.Id_Jabatan) inner join departement d on(c.Id_Dept = d.ID_Departement)
				");

		$query = $data->list_fields();
		
		return $query;
		
	}

/*	public function insert_penilaian($data)
	{
		$this->db->query('Insert into penilaian values ()')
		return $this->db->insert('penilaian2', $data);
	}
*/	
	public function delete_karyawan($value)
	{
		# code...
		$this->db->delete('karyawan', $value);
	}

	public function View_News()
	{
		# code...
		$this->db->limit(10);
		$this->db->order_by('Id_News','Desc');
		$data = $this->db->get('news');


		return $data->result_array();
	}

	public function tbl_set_news($value)
	{
		# code...
		return $this->db->insert('news', $value);
	}

	public function insert_kriteria($value)
	{
		 //$this->db->insert('kriteria',$value);
		return $this->db->insert('kriteria', $value);
		
	}

}

/* End of file M_penilaian.php */
/* Location: ./application/models/M_penilaian.php */
