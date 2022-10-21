<form method="post" class="form-horizontal" action="<?php echo base_url() ?>c_home/insert_check">
	<div class="form-group">
	<label for="dept_staf" class="control-label col-md-4">Departement</label>
		<div class="col-md-4">
			<select class="form-control" id="dept_staf">
				<option id="opt"><-!--Pilih--!-></option>
<!-- 				<?php foreach ($query as $key): ?>
					<option value="<?php echo $key['Id_Departement']; ?>">
						<?php echo $key['Nama_Dept']; ?></option>
				<?php endforeach ?>
 -->			</select>
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-8">
				<label class="posisi" class="control-label col-md-4"></label>
				<div id="check"></div>
				<div id="sub"></div>
		</div>
	</div>
</form>	
