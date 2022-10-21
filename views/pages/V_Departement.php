
<?php
      	 $info_Update_Succces = $this->session->flashdata('Succes_Update_Dept');
      	 $info_Add_Succces = $this->session->flashdata('Succes_Add_Dept');
     	 $info_Delete_Succces = $this->session->flashdata('Succes_Del_Dept');

	      	if (!empty($info_Update_Succces)) {
	      		# code...
	      		echo '<script type="text/javascript">

	      			swal({
					  title: "Data Berhasil Di update!",
					  icon: "success",
					});
	      			</script>';
	      		echo $info_Update_Succces;

	      	}
	      	if(!empty($info_Delete_Succces)){
	      		echo $info_Delete_Succces;
	      	}
	     	if(!empty($info_Add_Succces)){
	      		echo $info_Add_Succces;
	      	}
?>

<table class="table table-responsive table-striped table-hover table-bordered" id="example1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Divisi</th>
		<!--	<th>Keterangan</th>-->
			<th><a href="" data-toggle="modal" data-backdrop="static" data-target="#myModal2"><span class="fa fa-plus-circle"></span> Add Divisi</a></th>
		</tr>
	</thead>
	<tbody class>
		
		<?php 
			$No = 1;
			foreach ($query as $key){ 
		?>
		<tr>
			<td><?php echo $No++; ?></td>	
			<td><?php echo $key['Nama_Dept']; ?></td>
			<td>
					<a 
					 	class="btn btn-info btn-circle" data-toggle='modal' data-popup="tooltip" data-placement="top" title="Edit Data" data-backdrop="static" data-target="#myModal1-edit<?=$key['Id_Departement'] ?>"><i class="fa fa-edit"></i> Edit</a>
					<a href="<?php echo site_url('c_divisi/tbl_del_Dept/'.$key['Id_Departement']) ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
				</td>
		</tr>
	<?php } ?>
	</tbody>
</table>

		<!--Modal Tambah-->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-label="myModalLabel"> 
		<div class="modal-dialog" role="document">
				<div class="modal-content">
						<div class="modal-header bg-primary">
								<button type="button" class="close" data-dismiss="modal" arial-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Tambah Data Divisi </h4>
						</div>
						<form method="post" action="<?php echo site_url('c_divisi/tbl_set_Dept') ?>">
						<h5 class="modal-body">
						<div class="row">
								<div class="col-md-6 col-sm-6">
										<label>Nama Divisi</label>
										<input type="text" name="Nama_Dept" class="form-control" placeholder="Nama Departement"  required="required" />
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

<?php $no=0;foreach ($query as  $value) :$no++;
	# code...
?>
<div class="modal fade" id="myModal1-edit<?=$value['Id_Departement']?>" tabindex="-1" role="dialog" aria-label="myModalLabel"> 
		<div class="modal-dialog" role="document">
				<div class="modal-content">
						<div class="modal-header bg-primary">
								<button type="button" class="close" data-dismiss="modal" arial-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Edit Data Departement </h4>
						</div>
						<form method="post" action="<?php echo site_url('c_divisi/ambilId_Dept') ?>">
						<h5 class="modal-body">
						<input type="hidden" readonly value="<?=$value['Id_Departement'];?>" name="Id_Departement" class="form-control" >
						<div class="row">
								<div class="col-md-6 col-sm-6">
										<label>Nama Departement Lama</label>
										<input type="text" name="Nama_Dept_old" class="form-control" required="required" disabled="disabled" autocomplete="off"
										value="<?php echo $value['Nama_Dept'] ?>" />
								</div>
								<div class="col-md-6 col-sm-6">
										<label>Nama Departement Baru</label>
										<input type="text" name="Nama_Dept_New" class="form-control" placeholder="Nama Departement" required="required" />
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
