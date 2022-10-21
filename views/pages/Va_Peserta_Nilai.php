<table class="table table-responsive table-striped table-hover table-info">
	<thead class="bg-danger">
		<tr>
			<th>No</th>
			<th>Nip</th>
			<th>Nama Peserta</th>
			<th>Posisi</th>
			<th>Periode</th>
			<th>Notif Nilai</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody class=>
		
		<?php 
			$No = 1;
			foreach ($query as $key){ 
				if($key['status'] == 1){
					$status = '<i class="fa fa-check" style="color:green;"> <b>Sudah di Nilai</b></i>';
					 $button = '<hide></hide>';
				}else{
					$status = '<i class="fa fa-close" style="color:red"><b> Belum di Nilai</b></i>';
					$button = '<a href="'.base_url('Ca_Nilai_Karyawan/Nilai_Kriteria/'.$key['Nip']).'"><i class="fa fa-pencil" disabled/></i> Nilai</a>';
				}
		?>
		<tr>
			<td><?php echo '<B>'.$No++.")</B>"; ?></td>	
			<td><?php echo '<B>'.$key['Nip'].'</B>'; ?></td>
			<td><?php echo '<B>'.$key['Nama'].'</B>' ?></td>
			<td><?php echo '<B>'.$key['Nama_Jabatan'].'</B>' ?></td>
			<th><?php echo date('Y'); ?></th>
			<th>
					<?= $status ?>
			</th>
			<th>
				<?= $button ?>
			</th>
		</tr>
	<?php } ?>
	</tbody>
</table>
