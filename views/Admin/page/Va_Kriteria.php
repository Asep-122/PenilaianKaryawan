
<section class="container">
<div class="row">
	<div class="col-md-10">
		<div class="panel-footer">
			<a href="<?php echo base_url(); ?>c_home/tbl_karyawan" data-original-title="Back" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="fa fa-undo"></i></a>
			<span class="pull-right">
					
			</span>
		</div>
	</div>
		<div class="col-md-5">
			<table class="table table-responsive" width="10%">
				<tr>
					<th>Nip</th>
					<th><input type="text" name="" value="fesf" disabled class="form-control"></th>
				</tr>
				<tr>
					<th>Nama</th>
					<th><input type="text" name="" value="Asep" disabled class="form-control"></th>
				</tr>
				<tr>
					<th>Departement</th>
					<th><input type="text" name="" value="Front Office" disabled class="form-control"></th>
				</tr>
				<tr>
					<th>Periode</th>
					<th><input type="text" name="" value="2017" disabled class="form-control"></th>
				</tr>
			</table>
		</div>
		<div class="col-lg-10">
			<form>
			<table class="table table-responsive table-striped table-hover table-info">
					<thead class="bg-primary">
						<tr>
							<th>No</th>
							<th>Nama Kriteria</th>
							<th>Nilai Kriteria</th>
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
								<?php for ($i=0; $i < count($opt); $i++) { 
									
										# code...
										echo "<input type='radio' name='radio.$key[Id_Kriteria]'> $opt[$i] ";
									
									# code...
								} ?>
								
							</td>
						</tr>
					<?php } ?>
					</tbody>
			</table>
			</form>
		</div>
	</div>
<div class="">
		<button class="btn btn-success"><i class="fa fa-save"></i> Simpan Nilai Karyawan</button>
</div>
</section>
