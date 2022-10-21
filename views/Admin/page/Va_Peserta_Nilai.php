<table class="table table-responsive table-striped table-hover table-info">
	<thead class="bg-danger">
		<tr>
			<th>No</th>
			<th>Nip</th>
			<th>Nama Peserta</th>
			<th>Jabatan</th>
			<th>Periode</th>
			<th>Notif Nilai</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody class=>
		
		<?php 
			$No = 1;
			foreach ($query as $key){ 
		?>
		<tr>
			<td><?php echo $No++; ?></td>	
			<td><?php echo $key['Nip']; ?></td>
			<td><?php echo $key['Nama'] ?></td>
			<td><?php echo $key['Nama_Jabatan'] ?></td>
			<th><?php echo $key['Periode'] ?></th>
			<th>
				<i class="fa fa-check"> Sudah di Nilai</i>
			</th>
			<th>
				<a href="<?php echo base_url(); ?>/admin/Ca_Nilai_Karyawan/Nilai_Kriteria" class="btn btn-info"><i class="fa fa-pencil" disabled/></i> Nilai</a>
			</th>
		</tr>
	<?php } ?>
	</tbody>
</table>
