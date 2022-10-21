	 <?php  

	 // $info_Update_Succces = $this->session->flashdata('Succes_Update_Dept');
      	 $info_Add_Succces = $this->session->flashdata('Succes_Add_News');
     	 // $info_Delete_Succces = $this->session->flashdata('Succes_Del_Dept');

	      	// if (!empty($info_Update_Succces)) {
	      	// 	# code...
	      	// 	echo $info_Update_Succces;
	      	// }
	      	// if(!empty($info_Delete_Succces)){
	      	// 	echo $info_Delete_Succces;
	      	// }
	     	if(!empty($info_Add_Succces)){
	      		echo $info_Add_Succces;
	      	}

	    ?>

<div>	
	<form method="post" action="<?php echo base_url().'c_news/tbl_set_news' ?>">
			<div class="row">
				<div class="col-md-5 col-sm-2 col-xs-2" >
					<label class="">Info</label>
					<input type="text" name="Info" class="form-control">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-5 col-sm-2 col-xs-2" >
					<label class="">Tanggal</label>
					<input type="date" name="Tanggal" class="form form-control">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-5 col-sm5 col-xs-2" >
					<label class="">Keterangan</label>
					<textarea  id="ckeditor" class="form form-control" name="Keterangan"></textarea>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-8 col-sm-8 col-xs-4" >
					<button class="btn btn-primary"><i class="fa fa-save"></i> <B>Update</B></a></button>
				</div>
			</div>
	</form>
</div>
