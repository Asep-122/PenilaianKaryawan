
<section class="container">
<div class="row">
	<div class="col-md-8">
		<div class="panel-footer">
			<a href="<?php echo base_url(); ?>c_home/tbl_karyawan" data-original-title="Back" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="fa fa-undo"></i></a>
			<span class="pull-right">
					
			</span>
		</div>
	</div>

	<?php foreach ($row as $value): ?>
		 <?php $Nip = $value['Nip']; ?>
		<?php $Nama = $value['Nama']; ?>
		<!-- <?= $Departement = $value['Nama_Jabatan']; ?> -->
	<?php endforeach ?>

		<form method="post" action="<?= base_url('ca_nilai_karyawan/set_insert'); ?>">
		<div class="col-md-5">
			<table class="table table-responsive" width="8%">
				<tr>
					<th>Nip</th>
					<th><input type="text" name="id_peserta" value="<?=$Nip; ?>"  class="form-control" readonly></th>
				</tr>
				<tr>
					<th>Nama</th>
					<th><input type="text" name="nama" value="<?= $Nama ?>"  class="form-control" readonly></th>
				</tr>
				<!-- <tr>
					<th>Departement</th>
					<th><input type="text" name="departement" value="<?= $Nama_Jabatan ?>"  class="form-control" disabled="disabled"></th>
				</tr>
 -->				<tr>
					<th>Periode</th>
					<th><input type="text" name="periode" value="<?= date('d-M-Y') ?>"  class="form-control" readonly></th>
				</tr>
			</table>
		</div>
		<div class="col-lg-8">
			<table class="table table-responsive table-striped table-hover table-info">
					<thead class="bg-primary">
						<tr>
							<th>No</th>
							<th>Nama Kriteria</th>
							<th>Nilai Kriteria</th>
							<th><div class="">
								<button type="submit" class="btn btn-default"><b><i class="fa fa-save"></i> Simpan Nilai Karyawan</b>
								</div>
							</th>
						</tr>
					</thead>
					<tbody>
						
						<?php 
							$No = 1;
							
							foreach ($query as $key){
							$opt  = array('Sangat Baik','Baik','Cukup','Kurang','Kurang Baik');						 
						?>
						<tr>
							<td><?php echo $No++; ?></td>	
							<td><?php echo $key['Kriteria']; ?></td>
							<td>
									
										<select name="kriteria[]">
								<?php for ($i=0; $i < count($opt); $i++) { ?>
											<option value="<?= $opt[$i] ?>"><?= $opt[$i] ?></option>
								<?php } ?>
										</select>
							</td>

						</tr>
					<?php } ?>
					</tbody>
			</table>
		</div>
	</form>
	</div>
</section>
