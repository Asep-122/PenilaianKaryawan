<?php
      	 $info_Update_Succces = $this->session->flashdata('Succes_Update_Pos');
      	 $info_Add_Succces = $this->session->flashdata('Succes_Add_Pos');
     	 $info_Delete_Succces = $this->session->flashdata('Succes_Del_Pos');

	      	if (!empty($info_Update_Succces)) {
	      		# code...
	      		echo $info_Update_Succces;
	      	}
	      	if(!empty($info_Delete_Succces)){
	      		echo $info_Delete_Succces;
	      	}
	     	if(!empty($info_Add_Succces)){
	      		echo $info_Add_Succces;
	      	}
?>
<table class="table table-responsive table-striped table-bordered" id="example1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Divisi</th>
			<th>Nama Posisi</th>
			<th><a href="" data-toggle="modal" data-backdrop="static" data-target="#myModal2"><span class="fa fa-plus-circle"></span> Add Posisi</a></th>
		</tr>
	</thead>
	<tbody class=>
		
		<?php 
			$No = 1;
			foreach ($query as $key){ 
		?>
		<tr>
			<td><?php echo $No++; ?></td>	
			<td><?php echo $key['Nama_Dept']; ?></td>
			<td><?php echo $key['Nama_Jabatan']; ?></td>
			<td>
					<a href="#" class="btn btn-info" data-toggle="modal" data-backdrop="static" data-target="#myModal1_Edit<?=$key['Id_Jabatan'] ?> "><i class="fa fa-edit"></i> Edit</a>
					<a href="<?php echo site_url('c_posisi/tbl_del_pos/'.$key['Id_Jabatan']) ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
				</td>
		</tr>
	<?php } ?>
	</tbody>
</table>
		<!--Modal-->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-label="myModalLabel"> 
		<div class="modal-dialog" role="document">
				<div class="modal-content">
						<div class="modal-header bg-primary">
								<button type="button" class="close" data-dismiss="modal" arial-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Tambah Data Posisi </h4>
						</div>
						<form method="post" action="<?php echo site_url('c_posisi/tbl_set_Pos') ?>">
						<h5 class="modal-body">
						<div class="row">
								<div class="col-md-6 col-sm-6">
									<label>Nama Divisi</label>
									<select class="form-control" style="width: 100%" name="Posisi">
										<option><---Pilih---></option>
										<?php foreach ($queryDept1 as $value): ?>
										<option value="<?php echo $value['Id_Departement']; ?>"><?php echo $value['Nama_Dept']; ?></option>
										<?php endforeach ?>				
									</select>
								</div>
								<div class="col-md-6 col-sm-6">
										<label>Nama Posisi</label>
										<input type="text" name="Nama_Posisi" class="form-control" placeholder="Nama Posisi" required="required" />
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
<?php $no=0; foreach ($query as $key ):$no++ ?>
	
<div class="modal fade" id="myModal1_Edit<?=$key['Id_Jabatan']?>" tabindex="-1" role="dialog" aria-label="myModalLabel"> 
		<div class="modal-dialog" role="document">
				<div class="modal-content">
						<div class="modal-header bg-primary">
								<button type="button" class="close" data-dismiss="modal" arial-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Tambah Data Departement </h4>
						</div>
						<form method="post" action="<?php echo site_url('c_posisi/tbl_Update_Pos') ?>">	
						<h5 class="modal-body">
							<input type="hidden" readonly value="<?=$key['Id_Jabatan'];?>" name="Id_Jabatan" class="form-control" >
						<div class="row">
								<div class="col-md-6 col-sm-6">
										<label>Nama Posisi Lama</label>
										<input type="text" name="Nama_Posisi_Old" class="form-control" 
										value="<?php echo $key['Nama_Jabatan']; ?>" required="required" disabled="disabled" />
								</div>
								<div class="col-md-6 col-sm-6">
										<label>Nama Posisi Baru</label>
										<input type="text" name="Nama_Posisi_New" class="form-control" placeholder="Nama Posisi" required="required" />
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
<?php endforeach ?>

		<!--end Modal-->
