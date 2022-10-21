<div class="col-md-6 col-sm-6">
										<label>Nip</label>
										<input class="form-control" name="kode" value="<?php //echo $Nip; ?>" readonly />
								</div>
								<div class="col-md-6 col-sm-6">
										<label>Nama</label>
										<input type="text" name="cat_keahlian" class="form-control" placeholder="Jenis keahlian" required="required" />
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
								<select class="form-control select2" style="width: 100%;">
									<option selected="selected">Islam</option>
									<option>Budha</option>
									<option>Hindu</option>
									<option>Islam</option>
									<option>Kristen</option>
									<option>Khatoli</option>
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
									<input type="text" class="form-control pull-right" id="datepicker">
								</div>
								<!-- /.input group -->
							</div>
							<div class="col-md-6 col-sm-6">
								<label>Departement</label>
								<select class="form-control select2" data-placeholder="Select a State"
												style="width: 100%;">
									<option></option>
									<option>Hindu</option>
									<option>Islam</option>
									<option>Kristen</option>
									<option>Khatoli</option>
									<option>Konghucu</option>
								</select>
							</div>
					</div><br>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<label class="control-label">Foto</label>
							<div class="form-control">
								<input type="file"  name="foto">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
								<label>Active Kerja</label>
								<div class="input-group date">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input type="text" class="form-control pull-right" id="datepicker">
								</div>
								<!-- /.input group -->
						</div>
				 </div><br>
								<label>No Telpon:</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-phone"></i>
									</div>
									<input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
								</div><br>
								<!-- /.input group -->
									<label class="control-label">ALamat</label>
									<div class="form-group">
									<textarea class="" cols="87" rows="5"></textarea>
								</div>
