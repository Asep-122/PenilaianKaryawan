<form method="post" class="form-horizontal" action="<?php echo base_url() ?>c_home/insert_check">
	<div class="form-group">
	<label for="dept_staf" class="control-label col-md-4">Departement</label>
		<div class="col-md-4">
			<select class="form-control" id="dept_staf">
				<option id="opt"><-!--Pilih--!-></option>
				<?php foreach ($query as $key): ?>
					<option value="<?php echo $key['Id_Departement']; ?>">
						<?php echo $key['Nama_Dept']; ?></option>
				<?php endforeach ?>
			</select>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<label>Tanggal</label>
			<input type="date" name="" class="form-control">
		</div>
	</div><br>
	<div class="row">
		<div class="col-md-4">
			<a href="#" class="btn btn-primary">Simpan</a>
		</div>
	</div>
</form>	
