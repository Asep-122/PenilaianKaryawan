<?php 

//	$Nip = $_SESSION['Nip'];

?>

<aside class="main-sidebar">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">
			<!-- Sidebar user panel -->
			<div class="user-panel">
				<div class="pull-left image">
					<img src="<?php echo base_url() ?>/assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
				</div>
				<div class="pull-left info">
					<p><b><?php echo $_SESSION['username']; ?></b></p>
					<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
				</div>
			</div>
			<!--End Sidebar-->
			<!-- search form -->
			<form action="#" method="get" class="sidebar-form">
				<div class="input-group">
					<input type="text" name="q" class="form-control" placeholder="Search...">
					<span class="input-group-btn">
								<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
								</button>
							</span>
				</div>
			</form>
			<!-- /.search form -->
			<!-- sidebar menu: : style can be found in sidebar.less -->
			<ul class="sidebar-menu" data-widget="tree">
				<li class="header">MAIN NAVIGATION</li>
				<li class="active">
					<a href="<?php echo base_url(); ?>admin/ca_home">
						<i class="fa fa-bank"></i> <span> Home</span>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url() ?>admin/ca_mailform/">
						<i class="fa fa-bell-o"></i> <span> Notifikasi</span>
						<span class="pull-right-container">
							<small class="label pull-right bg-red">5</small>
						</span>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url() ?>admin/ca_nilai_karyawan/">
						<i class="fa fa-bell-o"></i> <span> Nilai Karyawan</span>
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
				</li> 	
			</ul>
		</section>
		<!-- /.sidebar -->
	</aside>
