
<?php  

	$Nip = $query->Nip;
	$Nama = $query->Nama;
	$Jk = $query->Jenis_Kelamin;
	$Agama = $query->Agama;
	$Tgl = $query->Tgl_Lahir;
	$No_Hp = $query->No_Hp;
	$Alamat = $query->Alamat;
	$Departement = $query->Nama_Dept;
	$Jabatan = $query->Nama_Jabatan;
	$Mk = $query->Masa_Kontrak;
	$Active = $query->Active_Kerja;
?>
<div class="panel-footer">
			<a href="<?php echo base_url(); ?>c_home/tbl_karyawan" data-original-title="Back" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="fa fa-undo"></i></a>
			<span class="pull-right">
					<a href="#" class="btn btn-primary" disabled><i class="fa fa-edit"></i> Nilai Karyawan</a>
					<a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
					<a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
			</span>
</div>


<div class="row">
<div class="col-md-3 col-lg-3 " align="center"> 
	<img alt="" src="<?php echo base_url() ?>/assets/dist/img/avatar5.png" class="img-circle img-responsive"> 
</div>
<div class=" col-md-9 col-lg-9 "> 
<table class="table table-user-information">
	<tbody>
			
			<td><strong>Identitas Pribadi</strong></td>
		<tr>
			<td>Nip</td>
			<td><?php echo $Nip; ?></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><?php echo $Nama ;?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><?php echo $Jk; ?></td>
		</tr>
		<tr>
			<td>Agama</td>
			<td><?php echo $Agama; ?></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td><?php echo $Tgl; ?></td>
		</tr>
		<tr>
			<td>No Hp</td>
			<td><?php echo $No_Hp; ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><?php echo $Alamat; ?></td>
		</tr><br>
			<td><strong>Job Desc</strong></td>
		<tr>
			<td>Company</td>
			<td>PT Jakarta Surya</td>
		</tr>
		<tr>
			<td>Departement</td>
			<td><?php echo $Departement; ?></td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td><?php echo $Jabatan; ?></td>
		</tr>
		<tr>
			<td>Masa Kontrak</td>
			<td><?php echo $Mk; ?></td>
		</tr>
		<tr>
			<td>Active Kerja</td>
			<td><?php echo $Active; ?></td>
		</tr>
	 
	</tbody>
</table>
