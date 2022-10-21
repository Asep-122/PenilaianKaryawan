<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="" uiv="X-UA-Compatible" content="IE=edge">
	<title>AdminLTE 2 | Dashboard</title>
	<!-- Switch Alert -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/timepicker/bootstrap-timepicker.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<!--profile.css-->
	<link href="<?php echo base_url(); ?>assets/profile/profile.css" rel="stylesheet">
	<!-- Select2 -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/select2/dist/css/select2.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
			 folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
	<!-- Morris chart -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/morris.js/morris.css">
	<!-- jvectormap -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/jvectormap/jquery-jvectormap.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="<?php echo base_url(); ?>assets/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

	<header class="main-header">
		<!-- Logo -->
		<a href="<?php echo base_url(); ?>assets/index2.html" class="logo">
			<!-- mini logo for sidebar mini 50x50 pixels -->
			<span class="logo-mini"><b>A</b>LT</span>
			<!-- logo for regular state and mobile devices -->
			<span class="logo-lg"><b>Admin</b>LTE</span>
		</a>
		<!-- Header Navbar: style can be found in header.less -->
		<nav class="navbar navbar-static-top">
			<!-- Sidebar toggle button-->
			<a href="<?php echo base_url(); ?>assets/#" class="sidebar-toggle" data-toggle="push-menu" role="button">
				<span class="sr-only">Toggle navigation</span>
			</a>

			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					<!-- Messages: style can be found in dropdown.less-->
					<li class="dropdown messages-menu">
						<a href="<?php echo base_url(); ?>assets/#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-envelope-o"></i>
							<span class="label label-success">4</span>
						</a>
						<ul class="dropdown-menu">
							<li class="header">You have 4 messages</li>
							<li>
								<!-- inner menu: contains the actual data -->
								<ul class="menu">
									<li><!-- start message -->
										<a href="<?php echo base_url(); ?>assets/#">
											<div class="pull-left">
												<img src="<?php echo base_url(); ?>assets/<?php echo base_url(); ?>/dist/img/avatar5.jpg" class="img-circle" alt="User Image">
											</div>
											<h4>
												Support Team
												<small><i class="fa fa-clock-o"></i> 5 mins</small>
											</h4>
											<p>Why not buy a new awesome theme?</p>
										</a>
									</li>
									<!-- end message -->
									<li>
										<a href="<?php echo base_url(); ?>assets/#">
											<div class="pull-left">
												<img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
											</div>
											<h4>
												AdminLTE Design Team
												<small><i class="fa fa-clock-o"></i> 2 hours</small>
											</h4>
											<p>Why not buy a new awesome theme?</p>
										</a>
									</li>
								</ul>
							</li>
							<li class="footer"><a href="<?php echo base_url(); ?>assets/#">See All Messages</a></li>
						</ul>
					</li>
					<!-- Notifications: style can be found in dropdown.less -->
					<li class="dropdown notifications-menu">
						<a href="<?php echo base_url(); ?>assets/#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-bell-o"></i>
							<span class="label label-warning">10</span>
						</a>
						<ul class="dropdown-menu">
							<li class="header">You have 10 notifications</li>
							<li>
								<!-- inner menu: contains the actual data -->
								<ul class="menu">
									<li>
										<a href="<?php echo base_url(); ?>assets/#">
											<i class="fa fa-shopping-cart text-green"></i> 25 sales made
										</a>
									</li>
									<li>
										<a href="<?php echo base_url(); ?>assets/#">
											<i class="fa fa-user text-red"></i> You changed your username
										</a>
									</li>
								</ul>
							</li>
							<li class="footer"><a href="<?php echo base_url(); ?>assets/#">View all</a></li>
						</ul>
					</li>
					<!-- User Account: style can be found in dropdown.less -->
					<li class="dropdown user user-menu">
						<a href="<?php echo base_url(); ?>assets/#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
							<span class="hidden-xs"><?php echo $_SESSION['username']; ?></span>
						</a>
						<ul class="dropdown-menu">
							<!-- User image -->
							<li class="user-header">
								<img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

								<p>
									Alexander Pierce - Web Developer
									<small>Member since Nov. 2012</small>
								</p>
							</li>
							<!-- Menu Body -->
							<li class="user-body">
								<div class="row">
									<div class="col-xs-4 text-center">
										<a href="<?php echo base_url(); ?>assets/#">Followers</a>
									</div>
									<div class="col-xs-4 text-center">
										<a href="<?php echo base_url(); ?>assets/#">Sales</a>
									</div>
									<div class="col-xs-4 text-center">
										<a href="<?php echo base_url(); ?>assets/#">Friends</a>
									</div>
								</div>
								<!-- /.row -->
							</li>
							<!-- Menu Footer-->
							<li class="user-footer">
								<div class="pull-left">
									<a href="<?php echo base_url(); ?>c_profile/my_profile/<?php echo $_SESSION['nip']; ?>" class="btn btn-default btn-flat"><i class="fa fa-user-circle"></i> Profile</a>
								</div>
								<div class="pull-right">
									<a href="<?php echo base_url('c_home/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
								</div>
							</li>
						</ul>
					</li>
					<!-- Control Sidebar Toggle Button -->
					<li>
						<a href="<?php echo base_url(); ?>assets/#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- Left sidebar -->
		<?php $this->load->view('v_left_sidebar.php'); ?>
	<!--End Left sidebar

	<!- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>.</h1>
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url() ?>c_home"><i class="fa fa-dashboard"></i> Homes</a></li>
				<li class="active"><?php echo $judul; ?></li>
			</ol>  
		</section>
	<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h3 class=""><?php echo $judul; ?></h3>
						</div>
						<div class="panel-body">	
							<?php $this->load->view($content); ?>		
					</div>
					</div>
				</div>
			</div>
	</section>
		<!-- /.content -->
	</div>
	<!-- /.content-footer -->
		<?php $this->load->view('v_footer.php'); ?>
	<!--/.End Footer-->

	<!-- Control Sidebar -->
		<?php $this->load->view('v_control_sidebar.php'); ?>
	<!-- /.End control-sidebar -->
	<!-- Add the sidebar's background. This div must be placed
			 immediately after the control sidebar -->
	<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button);
</script>
<script src="<?php echo base_url(); ?>assets/profile/profile.js"></script>
<!--DataTabbles-->
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url(); ?>assets/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!--Select2-->
<script src="<?php echo base_url(); ?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url(); ?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url() ?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>

<script>
	$(function () {
		//table karyawan
		// var table = $('#example1').DataTable({

		// 	'paging'      : true,
		// 	'lengthChange': true,
		// 	'searching'   : true,
		// 	'ordering'    : true,
		// 	'info'        : true,
		// 	'autoWidth'   : false
		// })
		
		$('.select2').select2()
			 //Date picker
		$('#tgl_lahir').datepicker({
			autoclose: true
		})
		$('#active_kerja').datepicker({
			autoclose: true
		})
		 $('[data-mask]').inputmask()
		 
		 //time picker
		$('.timepicker').timepicker({
      		showInputs: false
		})
		$('.timepicker1').timepicker({
      		showInputs: false
		})
	});	
	
	function submit(x) {
		// body...
		if (x=='tambah') {
			$('#tambah').show();
			$('#Ubah').hide();
		}
		else{
			$('#tambah').hide();
			$('#Ubah').show();
			
			$.ajax({
					url: '<?php echo base_url() ?>c_home/ambilNip',
					type: 'POST',
					dataType: 'json',
					data: 'Nip='+x,
					success : function (argument) {
						// body...
					    $('[name="nip"]').val(argument[0].Nip);
						$('[name="nama"]').val(argument[0].Nama);
					}
				})
					
		}
	}
	
	ambilData();
	
		function ambilData() {
			// body...
			$.ajax({
				url: '<?php echo base_url() ?>c_home/ambildata',
				type: 'POST',
				dataType: 'json',
				success: function (argument) {
					// body...
					var baris = '';
					var no=1;
					for (var i = 0; i < argument.length; i++) {
							baris += '<tr>'+
										   '<td>'+ no++ +'</td>' +
										   '<td>'+argument[i].Nip+'</td>' +
										   '<td>'+argument[i].Nama+'</td>' +
										   '<td>'+argument[i].Jenis_Kelamin+'</td>' +
										   '<td>'+argument[i].Departement+'</td>' +	
										   '<td>'+argument[i].Jabatan+'</td>' +
										   '<td><a href="<?php echo base_url(); ?>c_profile/profile/'+argument[i].Nip+'" class="fa fa-eye"></a></td>' +
										   '<td><a class="btn btn-info" data-toggle="modal" data-backdrop="static" data-target="#myModal1" onclick="submit('+argument[i].Nip+')"><i class="fa fa-edit"></i> Edit</a>  <a href="<?php echo base_url() ?>c_home/del_karyawan/'+argument[i].Nip+'" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a></td>' +
									 '</tr>';
					}
					$('#target1').html(baris);
					$('#example1').DataTable({
					'paging'      : true,
					'lengthChange': true,
					'searching'   : true,
					'ordering'    : true,
					'info'        : true,
					'autoWidth'   : false
				})
				}
			})
		}
		
		jQuery(document).ready(function($) {
			$('.m_d').click(function() {
				/* Act on the event */
				$('.select_modal').hide();
			});
			$('#jobs').click(function(event) {
				/* Act on the event */
				$('.select_modal').show();
			})
			});
			
		jQuery(document).ready(function() {
		$.ajaxSetup({
			url: '<?php echo base_url().'c_home/tbl_check' ?>',
			type: 'POST',
			cache : false
		})
		
		$('#dept_staf').change(function(event) {
			/* Act on the event */
			var value = $(this).val();
			if (value>0) {
				$.ajax({
					data: {modul: 'check',id:value},
					success: function (argument) {
						// body...
						console.log(argument.length);
						if (argument.length > 0) {
							$('.posisi').text('Posisi');
							$('#check').html(argument);
							$('#sub').html('<input type="submit" class="btn btn-primary" value="Update">');
						}else{
							$('.posisi').text('');
							$('#check').html('');
							$('#sub').html('Data Kosong');
						}
					}
				})
				
			}

		});
	});		
		jQuery(document).ready(function($) {
			$('#dept').change(function(event) {
				/* Act on the event */
				var id = $(this).val();
				$.ajax({
					url: '<?php echo base_url() ?>c_home/tbl_combo',
					type: 'POST',
					dataType: 'json',
					data: {id: id},
					async : false,
					success : function (data) {
						// body...
						var html = '';
						var i;
						for(i=0;i<data.length;i++){
							html += '<option>'+data[i].Nama_Jabatan+'</option>';
						}
						$('#jabt').html(html)
					}
				})
				
			});
		});

		$('#homes').click(function(){
			$('.modal-footer').hide();
			console.log('a');
		})

		$('#jobs').click(function(){
			$('.modal-footer').show();
		})

	jQuery(document).ready(function($) {
		$("#SearchDiv").change(function(event) {
			/* Act on the event */
			var id = $(this).val();
				$.ajax({
				url: '<?php echo base_url() ?>c_home/tbl_combo',
				type: 'POST',
				dataType: 'json',
				data: {id: id},
				async : false,
				success : function (data) {
					// body...
					var html = '';
					var i;
					for(i=0;i<data.length;i++){
						html += '<option>'+data[i].Nama_Jabatan+'</option>';
					}
					$('#SearchPos').prop('disabled',false);
					$('#SearchPos').html(html);

				}
				});
					if($('#SearchDiv').val() == 'Semua'){
						$('#SearchPos').prop('disabled',true);
					}
		});	
	})

	jQuery(document).ready(function($) {
		$('#SearchNilai').click(function(event) {
			/* Act on the event */
			var Divisi = $('#SearchDiv').val();
			var Posisi = $('#SearchPos').val();

			$.ajax({
				 	url: '<?= base_url('c_home/SearchNilai') ?>',
				 	type: 'post',
				 	dataType: 'json',
				 	data: {Divisi: 'Divisi',Posisi :'Posisi'},
				 	async : false,
				 	success : function(argument) {
				 		// body...
				 		$("#table").text('some text');
				 	}
				 })
				 					 

		});
	});
</script>
</body>
</html>


