<div class="form-horizontal">	
<div class="form-group">
	<label for="dept_staf" class="control-label col-md-1">Divisi</label>
		<div class="col-md-3">
			<select class="form-control" id="SearchDiv" name="Divisi">
				<option id="opt">Semua</option>
 				<?php foreach ($query2 as $key): ?>
					<option value="<?php echo $key['Id_Departement']; ?>">
						<?php echo $key['Nama_Dept']; ?></option>
				<?php endforeach ?>
 			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="dept_staf" class="control-label col-md-1">Posisi</label> 
		<div class="col-md-3">
			<select class="form-control" id="SearchPos" name="Posisi" disabled="disabled">	
				<option id="opt">Semua</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-4">
			<div class="col-md-8">
				<button name="" class="btn btn-primary" value="Pencarian" id="SearchNilai">Pencarian</button>
			</div>
		</div>
	</div>
</div>


<div id="table">
	
</div>

<table class="table table-responsive table-striped table-bordered">
	<thead>
		<tr>
<!-- 			<? $no = 0; ?>
			<?php foreach ($query as $value): ?>
				<th><?= str_replace('_', ' ', $value); ?></th>
			<?php endforeach ?>
 --><!-- 			 <td>No</td>
			<td>Nip</td>
			<td>Nama</td>
			<td>Divisi</td>
			<td>Tgl Penilai</td>
			<td>Kehadiran</td>
			<td>Kerapihan</td>
			<td>Sikap</td>
			<td>Tanggung Jawab</td>
			<td>TeamWork</td>
			<td>Rata-Rata Keseluruhan</td> -->
		</tr>
	</thead>
	<tbody>
<!-- 
		<?php 
			$No = 1;
			foreach ($query1 as $value): ?>
		<tr>
		<td><?= $No++ ?></td>
			<td><?= $value['Nip_Peserta'] ?></td>
			<td><?= $value['Nama']; ?></td>
			<td><?= $value['Nama_Dept']; ?></td>
 			<td><?= $value['Waktu_Nilai']; ?></td>
			<td><?= $value['Kehadiran'] ?></td>
			<td><?= $value['Kerapihan'] ?></td>
			<td><?= $value['Sikap'] ?></td>
			<td><?= $value['Tanggung_Jawab'] ?></td>
			<td><?= $value['TeamWork'] ?></td>
			<td><?= $data = ($value['Kehadiran'] + $value['Kerapihan'] + $value['Sikap'] + $value['Tanggung_Jawab'] + $value['TeamWork'] )/5?></td>
		</tr>
		<?php endforeach ?>
 -->
	</tbody>
</table>
 

