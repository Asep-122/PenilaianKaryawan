

<table class="table table-responsive table-striped table-bordered" id="example1">
	<thead >
		<tr>
			<th>No</th>
			<th>Nama Kriteria</th>
			<th align="center"><a href="" data-toggle="modal" data-backdrop="static" data-target="#myModal2"><i class="fa fa-plus-circle"></i> Tambah Data Kritieria</a>
			</th>
		</tr>
	</thead>
	<tbody>
		
		<?php 
			$No = 1;
			foreach ($query as $key){ 	
		?>
		<tr>
			<td><?php echo $No++; ?></td>	
			<td><?php echo $key['Kriteria']; ?></td>
			<td>
					<a href="#" class="btn btn-info" data-toggle="modal" data-backdrop="static" data-target="#myModal1"><i class="fa fa-edit"></i> Edit</a>
					<a href="3" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
			</td>
			<td></td>
		</tr>
	<?php } ?>
	</tbody>
</table>
<br>
<div class="">
		
</div>

		<!--Modal-->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-label="myModalLabel"> 
		<div class="modal-dialog" role="document">
				<div class="modal-content">
						<div class="modal-header bg-primary">
								<button type="button" class="close" data-dismiss="modal" arial-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Tambah Data Departement </h4>
						</div>
						<form method="post" action="<?= base_url('C_Kriteria/insert') ?>">
						<h5 class="modal-body">
						<div class="row">
								<div class="col-md-6 col-sm-6">
										<label>Jenis Kriteria</label>
										<input type="text" name="Kriteria" class="form-control" placeholder="Kriteria" required="required" />
								</div>
								<div class="col-md-6 col-sm-6">
										<label>Keterangan</label>
										<input type="text" name="Keterangan" class="form-control" placeholder="Keterangan" required="required" />
								</div>
						</div><br>
						</h5>
						<div class="modal-footer">
								<input type="submit" class="btn btn-success" name="next" value="Lanjutkan">
								<button type="button" class="btn btn-danger" data-dismiss="modal" name="close">Close</button>
						</div>
						</form>
				</div>
		</div>
</div>

<!-- Modal Edit -->

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-label="myModalLabel"> 
		<div class="modal-dialog" role="document">
				<div class="modal-content">
						<div class="modal-header bg-primary">
								<button type="button" class="close" data-dismiss="modal" arial-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Tambah Data Departement </h4>
						</div>
						<form method="post">
						<h5 class="modal-body">
						<div class="row">
								<div class="col-md-6 col-sm-6">
										<label>Jenis Kriteria</label>
										<input type="text" name="cat_keahlian" class="form-control" placeholder="Jenis keahlian" required="required" />
								</div>
								<div class="col-md-6 col-sm-6">
										<label>Bobot Nilai</label>
										<input type="text" name="cat_keahlian" class="form-control" placeholder="Jenis keahlian" required="required" />
								</div>
						</div><br>
						</h5>
						<div class="modal-footer">
								<input type="submit" class="btn btn-success" name="next" value="Lanjutkan">
								<button type="button" class="btn btn-danger" data-dismiss="modal" name="close">Close</button>
						</div>
						</form>
				</div>
		</div>
</div>
		<!--end Modal-->
