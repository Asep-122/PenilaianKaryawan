
<?php if ($this->session->userdata('masuk') == '1'){

	# code...
?>
				<li class="active">
					<a href="<?php echo base_url(); ?>c_home">
						<i class="fa fa-bank"></i> <span> Home</span>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url() ?>c_mailform/">
						<i class="fa fa-bell-o"></i> <span> Notifikasi</span>
						<span class="pull-right-container">
							<small class="label pull-right bg-red">5</small>
						</span>
					</a>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-maxcdn"></i> <span> Master</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li class="active"><a href="<?php echo base_url(); ?>c_home/tbl_karyawan"><i class="fa fa-users"></i> Karyawan <span class="pull-right-container"><i class="fa fa-edit"></i></span></a></li>
						<li><a href="<?php echo base_url(); ?>c_divisi"><i class="fa fa-building"></i> Departement<span class="pull-right-container"><i class="fa fa-edit"></i></span></a></li>
						<li><a href="<?php echo base_url(); ?>c_posisi"><i class="fa fa-houzz"></i> Posisi<span class="pull-right-container"><i class="fa fa-edit"></i></span></a></li>
						<li><a href="<?php echo base_url(); ?>c_home/tbl_kriteria"><i class="fa fa-get-pocket"></i> Kriteria<span class="pull-right-container"><i class="fa fa-edit"></i></span></a></li>
					</ul>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-folder-open"></i> <span> Transaksi Data</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li class="active"><a href="<?php echo base_url() ?>c_home/tbl_nilai"><i class="fa fa-circle-o"></i> Nilai Karyawan</a></li>
						<li><a href="index2.html"><i class="fa fa-circle-o"></i> Periode</a></li>
					</ul>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-list-alt"></i> <span> Laporan</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Nilai Karyawan</a></li>
						<li><a href="index2.html"><i class="fa fa-circle-o"></i> Status Kontrak Karyawan</a></li>
					</ul>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-gears"></i> <span>Setting Penilaian</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li class="active"><a href="<?php echo base_url() ?>c_home/tbl_staf"><i class="fa fa-circle-o"></i> Staff Penilai</a></li>
						<li><a href="<?php echo base_url() ?>c_home/tbl_periode"><i class="fa fa-circle-o"></i> Periode</a></li>
					</ul>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-wrench"></i> <span>Account</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li class="active"><a href="index.html"><i class="fa fa-lock"></i> Ubah Password</a></li>
					</ul>


<?php }

else {
	# code...
?>
		<li class="active">
			<a href="<?php echo base_url(); ?>c_home">
				<i class="fa fa-bank"></i> <span> Home</span>
			</a>
		</li>
		<li>
			<a href="<?php echo base_url() ?>c_mailform/">
				<i class="fa fa-bell-o"></i> <span> Notifikasi</span>
				<span class="pull-right-container">
					<small class="label pull-right bg-red">5</small>
				</span>
			</a>
		</li>
		<li class="treeview">
		<a href="#">
			<i class="fa fa-wrench"></i> <span>Account</span>
			<span class="pull-right-container">
				<i class="fa fa-angle-left pull-right"></i>
			</span>
		</a>
		<ul class="treeview-menu">
			<li class="active"><a href="index.html"><i class="fa fa-lock"></i> Ubah Password</a></li>
		</ul>

	
<?php } ?>

