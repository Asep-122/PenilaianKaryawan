
<table class="table table-responsive table-striped table-hover table-info table-bordered" id="example1">
	<thead class="bg-black">
		<tr>
			<th>No</th>
			<th>Nip</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Departement</th>
			<th>Jabatan</th>
			<th>Views</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody id="target1">
		
	</tbody>
</table>
<br>
<div class="">
    <button class="btn btn-success m_d" data-toggle="modal" onclick="submit('tambah')" data-backdrop="static" data-target="#myModal1"><i class="fa fa-user-plus"></i> Tambah Data Karyawan</button>
</div>

	  <!--Modal Tambah Data Karyawan-->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-label="myModalLabel"> 
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <button type="button" class="close danger" data-dismiss="modal" arial-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Tambah Data Karyawan </h4>
            </div>
            <form method="post" action="<?php echo base_url() ?>c_home/input_karyawan">
            <h5 class="modal-body">
            	<div>
          	<!--Nav Tabs-->
          	<ul class="nav nav-tabs" role="tablist">
          		<li role="presentation" class="active">
          			<a href="#home_add" id="homes" aria-controls="home_add" role="tab" data-toggle="tab"><h4><b><i class="fa fa-users"></i> Identitas</b></h4></a>
          		</li>
          		<li role="presentation">
          			<a href="#profile_add" id="jobs" aria-controls="profile_add" role="tab" data-toggle="tab"><h4><b><i class="fa fa-diamond"></i> Job Desk</b></h4></a>
          		</li>
          	</ul>
          	<div class="tab-content">
          		<div role="tabpanel" class="tab-pane active" id="home_add">
       				<!--Bidang/Spesialis-->
       				<br>
       				<div class="row">
       					<div class="col-md-6 col-sm-6">
       						<label for="nip">Nip</label>
       						<input type="text" id="nip_add" name="nip" class="form-control">
       					</div>
       					<div class="col-md-6 col-sm-6">
       						<label for="nama">Nama</label>
       						<input type="text" name="nama" class="form-control">
       					</div>
       				</div><br>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <label>Jenis Kelamin</label>
                    <div class="form-control">
                    	<input type="radio" class="minimal-red" name="jk" value="Laki-Laki" checked /> Laki-Laki   
                    	<input type="radio" class="flat-red" name="jk" value="Perempuan"> Perempuan
                	</div>
            	</div>
            	<div class="col-md-6 col-sm-6">
                <label>Agama</label>
                <select class="form-control" style="width: 100%;">
                  <option>Budha</option>
                  <option>Hindu</option>
                  <option selected="selected">Islam</option>
                  <option>Kristen</option>
                  <option>Khatolik<s/option>
                  <option>Konghucu</option>
                </select>
              </div>
          </div><br>
          <div class="row">
          	<div class="col-md-6 col-sm-6">
                <label>Tanggal Lahir</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="tgl_lahir">
                </div>
                <!-- /.input group -->
              </div>
              <div class="col-md-6 col-sm-6">
          		<label class="control-label">Foto</label>
          		<div class="form-control">
          			<input type="file"  name="foto">
          		</div>
            </div>
          </div><br>
          <label class="control-label">ALamat</label>
            	<div class="form-group">
            		<textarea class="" cols="78" rows="5" name="alamat"></textarea>
              </div>
          </div>
         <div role="tabpanel" class="tab-pane" id="profile_add">
         	<br>	
          <div class="row">
              <div class="col-md-6 col-sm-6">
                <label>Departement</label>
                <select class="form-control" style="width: 100%;" id="dept">
                	<option>!--Pilih--!</option>
                	<?php foreach ($query_dept as $key){ ?>
        	          		<option value="<?php echo $key['Id_Departement']; ?>"><?php echo $key['Nama_Dept']; ?></option>	
                	<?php } ?>
                </select>
              </div>
              <div class="col-md-6 col-sm-6">
                <label>Jabatan</label>
                <select class="form-control" style="width: 100%;" id="jabt">
                </select>
              </div>
          </div><br>
          <div class="row">
              <div class="col-md-6 col-sm-6">
                <label>Masa Kontrak</label>
                <select class="form-control" style="width: 100%;">
                  <?php foreach ($query_kontrak as $key): ?>
                  		<option><?php echo $key['Masa_Kontrak'] ?></option>
                  <?php endforeach ?>
                </select>
              </div>
              <div class="col-md-6 col-sm-6">
                <label>Active Kerja</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="active_kerja">
                </div>
                <!-- /.input group -->
            </div>
          </div><br>
          <div class="row">
          	<div class="col-md-12">
                <label>No Telpon:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control" name="telp" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                </div>
             </div><br>
                <!-- /.input group -->
          </div>  		
		          </div>
          	</div>
          </div>
            
            
            </h5>
            <div class="modal-footer select_modal">
                <input type="button" onclick="tambahdata()" class="btn btn-success" name="next" value="Lanjutkan" id="tambah">
                <button type="button" class="btn btn-danger" onclick="ubahdata()" data-dismiss="modal" id="Ubah" name="Ubah">Ubah</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" name="close">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>	  
	  
	  
	  
