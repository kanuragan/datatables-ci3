<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Absen</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?=base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet"
		href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Tempusdominus Bootstrap 4 -->
	<link rel="stylesheet"
		href="<?=base_url()?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?=base_url()?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- JQVMap -->
	<link rel="stylesheet" href="<?=base_url()?>assets/plugins/jqvmap/jqvmap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?=base_url()?>assets/dist/css/adminlte.min.css">
	<!-- custome style -->
	<link rel="stylesheet" href="<?=base_url()?>assets/dist/css/style.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="<?=base_url()?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="<?=base_url()?>assets/plugins/daterangepicker/daterangepicker.css">
	<!-- summernote -->
	<link rel="stylesheet" href="<?=base_url()?>assets/plugins/summernote/summernote-bs4.min.css">

	<link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
	<!-- Site wrapper -->
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
			</ul>

			<!-- SEARCH FORM -->
			<form class="form-inline ml-3">
				<div class="input-group input-group-sm">

				</div>
			</form>

			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<!-- Messages Dropdown Menu -->
				<li class="nav-item dropdown">

				</li>
				<!-- Notifications Dropdown Menu -->
				<li class="nav-item dropdown">

				</li>
				<li class="nav-item">
					<a class="nav-link" data-widget="fullscreen" href="#" role="button">
						<i class="fas fa-expand-arrows-alt"></i>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
						<i class="fas fa-th-large"></i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="index3.html" class="brand-link">
				<img src="<?=base_url()?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
					style="opacity: .8">
				<span class="brand-text font-weight-light">Absensi</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
						data-accordion="false">
						<li class="nav-item active">
							<a href="<?=site_url()?>" class="nav-link">
								<i class="nav-icon fas fa-file"></i>
								<p>
									Cuti dan Izin
								</p>
							</a>
						</li>
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6 mt-1">
							<h4>Permohonan Cuti dan Izin</h4>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Absen</a></li>
								<li class="breadcrumb-item active">Permohonan Cuti dan Izin </li>
							</ol>
						</div>
					</div>
				</div><!-- /.container-fluid -->
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-12">
								<button class="btn btn-outline-dark btn-sm">download</button>
							</div>
						</div>
						<hr>
						<div class="row mb-2">
							<div class="col-2">
								<label class="label">Status</label>
								<select id="status" id="" class="form-control">
									<option value="approved">approved</option>
									<option value="reject">reject</option>
									<option value="menunggu approval">menunggu approval</option>
								</select>
							</div>
							<div class="col-2">
								<label class="label">Departement</label>
								<input id="departement" type="text" class="form-control" placeholder="Departement">
							</div>
							<div class="col-2">
								<label class="label">NIK</label>
								<input id="nik" type="text" class="form-control" placeholder="Nomer Induk Karyawan (NIK)">
							</div>
							<div class="col-2 float-sm-right">
								<label class="label">action</label>
								<button class="btn btn-sm btn-outline-primary form-control" onclick="filter_search()">CARI</button>
							</div>
						</div>
						<hr>
						<table id="example1" class="table table-bordered table-striped" data-source="<?=site_url('Welcome/get_data')?>">
							<thead>
								<tr>
									<th>NIK</th>
									<th>Nama</th>
									<th>Departement</th>
									<th>Tanggal Permohonan</th>
									<th>Keterangan</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>

							<tfoot>
								<tr>
									<th>NIK</th>
									<th>Nama</th>
									<th>Departement</th>
									<th>Tanggal Permohonan</th>
									<th>Keterangan</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</tfoot>
						</table>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->

			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				<b>Version</b> 3.1.0-rc
			</div>absensi
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="<?=base_url()?>assets/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- DataTables  & Plugins -->
	<script src="<?=base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?=base_url()?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?=base_url()?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?=base_url()?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
	<script src="<?=base_url()?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
	<script src="<?=base_url()?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
	<script src="<?=base_url()?>assets/plugins/jszip/jszip.min.js"></script>
	<script src="<?=base_url()?>assets/plugins/pdfmake/pdfmake.min.js"></script>
	<script src="<?=base_url()?>assets/plugins/pdfmake/vfs_fonts.js"></script>
	<script src="<?=base_url()?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
	<script src="<?=base_url()?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
	<script src="<?=base_url()?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?=base_url()?>assets/dist/js/demo.js"></script>
	<script>
		$(document).ready(function() {
			data_table();
		});
		function filter_search() {
			$("#example1").DataTable().destroy();
			data_table();
		}
		function data_table() {
			var url = $('#example1').attr('data-source');
			var status = $('#status').val();
			var departement = $('#departement').val();
			var nik = $('#nik').val();
		
			$.fn.dataTableExt.oApi.fnPagingInfo = function (oSettings) {
				return {
					"iStart": oSettings._iDisplayStart,
					"iEnd": oSettings.fnDisplayEnd(),
					"iLength": oSettings._iDisplayLength,
					"iTotal": oSettings.fnRecordsTotal(),
					"iFilteredTotal": oSettings.fnRecordsDisplay(),
					"iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
					"iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
				};
			};

			var table = $("#example1").dataTable({
				initComplete: function () {
					var api = this.api();
					$('#mytable_filter input')
						.off('.DT')
						.on('input.DT', function () {
							api.search(this.value).draw();
						});
				},
				oLanguage: {
					sProcessing: "loading..."
				},
				processing: true,
				serverSide: true,
				searching: false,
				ajax: {
					"url": url,
					"type": "POST",
					"data": {
						status: status,
						departement: departement,
						nik: nik,
					}
				},
				columns: [{
						"data": "nik"
					},
					{
						"data": "nama"
					},
					{
						"data": "departement"
					},
					{
						"data": "tanggal"
					},
					{
						"data": "keterangan"
					},
					{
						"data": "status"
					},
					{
						"data": "action"
					},
				],
				columnDefs: [{
					"targets": [3,6],
					"orderable": false,
					"searchable": false,
				}],
				order: [],
				rowCallback: function (row, data, iDisplayIndex) {
					var info = this.fnPagingInfo();
					var page = info.iPage;
					var length = info.iLength;
					$('td:eq(0)', row).html();
				}

			});
		}


		//action edit dan delete
		$(document).on('click', '.edit', function(e) {
			alert('action edit');
		})
		$(document).on('click', '.delete', function(e) {
			alert('action delete');
		})

	</script>
</body>

</html>
