<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
	<meta name="author" content="Łukasz Holeczek">
	<meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
	<title>CoreUI Free Bootstrap Admin Template</title>
	<!-- Icons-->
	<link href="<?= base_url(); ?>assets/vendors/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/vendors/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/vendors/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
	<!-- favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/img/apple-touch-icon.png') ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/img/favicon-32x32.png') ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/img/favicon-16x16.png') ?>">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<!-- datatables -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
	<!-- custom -->
	<link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">
	<!-- Main styles for this application-->
	<link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/vendors/pace-progress/css/pace.min.css') ?>" rel="stylesheet">
	<!-- jquery ui -->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<!-- smartwizard multistep form -->
	<link href="<?= base_url('assets/css/smart_wizard_theme_arrows.min.css') ?> " rel="stylesheet" type="text/css" />
	<style>
	.ui-autocomplete-loading {
		background: white url(<?= base_url('assets/img/ui-anim_basic_16x16.gif'); ?>) right center no-repeat;
	}
	</style>

</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
	<header class="app-header navbar">
		<button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="#">
			<img class="navbar-brand-full" src="<?= base_url(); ?>assets/img/brand/logo.svg" width="89" height="25" alt="CoreUI Logo">
			<img class="navbar-brand-minimized" src="<?= base_url(); ?>assets/img/brand/sygnet.svg" width="30" height="30" alt="CoreUI Logo">
		</a>
		<button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
			<span class="navbar-toggler-icon"></span>
		</button>
		<!-- navbar kanan -->
		<ul class="nav navbar-nav ml-auto">
			<li class="nav-item dropdown">
				<a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
					<img class="img-avatar" src="<?= base_url(); ?>assets/img/<?= $this->session->userdata('avatar') ?>" >
				</a>
				<div class="dropdown-menu dropdown-menu-right">
					<div class="dropdown-header text-center">
						<strong>Account</strong>
					</div>
					<a class="dropdown-item" href="#">
						<i class="fa fa-user"></i> Profile</a>
					<a class="dropdown-item" href="#">
						<i class="fa fa-wrench"></i> Settings</a>
					<a class="dropdown-item" href="<?= base_url('auth/logout') ?>">
						<i class="fa fa-lock"></i> Logout</a>
				</div>
			</li>
		</ul>
		<button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
			<span class="navbar-toggler-icon"></span>
		</button>
		<button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
			<span class="navbar-toggler-icon"></span>
		</button>
	</header>
	<div class="app-body">
		<?php $this->load->view($level . '/sidebar') ?>

		<!-- Your content will be here-->
		<main class="main">
			<!-- Breadcrumb-->
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><?= ucwords($this->uri->segment(1)) ?></li>
				<li class="breadcrumb-item"><?= ucwords($this->uri->segment(2)) ?></li>
				<li class="breadcrumb-item active"><?= ucwords($this->uri->segment(3)) ?></li>
			</ol>
			<!-- content  -->
			<?= $contents; ?>
		</main>

		<aside class="aside-menu">
			<ul class="nav nav-tabs" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">
						<i class="icon-list"></i>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#messages" role="tab">
						<i class="icon-speech"></i>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#settings" role="tab">
						<i class="icon-settings"></i>
					</a>
				</li>
			</ul>
			<!-- Tab panes-->
			<div class="tab-content">
				<div class="tab-pane active" id="timeline" role="tabpanel">
					<div class="list-group list-group-accent">
						<div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Today</div>
						<div class="list-group-item list-group-item-accent-warning list-group-item-divider">
							<div class="avatar float-right">
								<img class="img-avatar" src="<?= base_url(); ?>assets/img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
							</div>
							<div>Meeting with
								<strong>Lucas</strong>
							</div>
							<small class="text-muted mr-3">
								<i class="icon-calendar"></i>  1 - 3pm</small>
							<small class="text-muted">
								<i class="icon-location-pin"></i>  Palo Alto, CA</small>
						</div>
						<div class="list-group-item list-group-item-accent-info">
							<div class="avatar float-right">
								<img class="img-avatar" src="<?= base_url(); ?>assets/img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
							</div>
							<div>Skype with
								<strong>Megan</strong>
							</div>
							<small class="text-muted mr-3">
								<i class="icon-calendar"></i>  4 - 5pm</small>
							<small class="text-muted">
								<i class="icon-social-skype"></i>  On-line</small>
						</div>
						<div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Tomorrow</div>
						<div class="list-group-item list-group-item-accent-danger list-group-item-divider">
							<div>New UI Project -
								<strong>deadline</strong>
							</div>
							<small class="text-muted mr-3">
								<i class="icon-calendar"></i>  10 - 11pm</small>
							<small class="text-muted">
								<i class="icon-home"></i>  creativeLabs HQ</small>
							<div class="avatars-stack mt-2">
								<div class="avatar avatar-xs">
									<img class="img-avatar" src="<?= base_url(); ?>assets/img/avatars/2.jpg" alt="admin@bootstrapmaster.com">
								</div>
								<div class="avatar avatar-xs">
									<img class="img-avatar" src="<?= base_url(); ?>assets/img/avatars/3.jpg" alt="admin@bootstrapmaster.com">
								</div>
								<div class="avatar avatar-xs">
									<img class="img-avatar" src="<?= base_url(); ?>assets/img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
								</div>
								<div class="avatar avatar-xs">
									<img class="img-avatar" src="<?= base_url(); ?>assets/img/avatars/5.jpg" alt="admin@bootstrapmaster.com">
								</div>
								<div class="avatar avatar-xs">
									<img class="img-avatar" src="<?= base_url(); ?>assets/img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
								</div>
							</div>
						</div>
						<div class="list-group-item list-group-item-accent-success list-group-item-divider">
							<div>
								<strong>#10 Startups.Garden</strong> Meetup</div>
							<small class="text-muted mr-3">
								<i class="icon-calendar"></i>  1 - 3pm</small>
							<small class="text-muted">
								<i class="icon-location-pin"></i>  Palo Alto, CA</small>
						</div>
						<div class="list-group-item list-group-item-accent-primary list-group-item-divider">
							<div>
								<strong>Team meeting</strong>
							</div>
							<small class="text-muted mr-3">
								<i class="icon-calendar"></i>  4 - 6pm</small>
							<small class="text-muted">
								<i class="icon-home"></i>  creativeLabs HQ</small>
							<div class="avatars-stack mt-2">
								<div class="avatar avatar-xs">
									<img class="img-avatar" src="<?= base_url(); ?>assets/img/avatars/2.jpg" alt="admin@bootstrapmaster.com">
								</div>
								<div class="avatar avatar-xs">
									<img class="img-avatar" src="<?= base_url(); ?>assets/img/avatars/3.jpg" alt="admin@bootstrapmaster.com">
								</div>
								<div class="avatar avatar-xs">
									<img class="img-avatar" src="<?= base_url(); ?>assets/img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
								</div>
								<div class="avatar avatar-xs">
									<img class="img-avatar" src="<?= base_url(); ?>assets/img/avatars/5.jpg" alt="admin@bootstrapmaster.com">
								</div>
								<div class="avatar avatar-xs">
									<img class="img-avatar" src="<?= base_url(); ?>assets/img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
								</div>
								<div class="avatar avatar-xs">
									<img class="img-avatar" src="<?= base_url(); ?>assets/img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
								</div>
								<div class="avatar avatar-xs">
									<img class="img-avatar" src="<?= base_url(); ?>assets/img/avatars/8.jpg" alt="admin@bootstrapmaster.com">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane p-3" id="messages" role="tabpanel">
					<div class="message">
						<div class="py-3 pb-5 mr-3 float-left">
							<div class="avatar">
								<img class="img-avatar" src="<?= base_url(); ?>assets/img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
								<span class="avatar-status badge-success"></span>
							</div>
						</div>
						<div>
							<small class="text-muted">Lukasz Holeczek</small>
							<small class="text-muted float-right mt-1">1:52 PM</small>
						</div>
						<div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
						<small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
					</div>
					<hr>
					<div class="message">
						<div class="py-3 pb-5 mr-3 float-left">
							<div class="avatar">
								<img class="img-avatar" src="<?= base_url(); ?>assets/img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
								<span class="avatar-status badge-success"></span>
							</div>
						</div>
						<div>
							<small class="text-muted">Lukasz Holeczek</small>
							<small class="text-muted float-right mt-1">1:52 PM</small>
						</div>
						<div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
						<small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
					</div>
					<hr>
					<div class="message">
						<div class="py-3 pb-5 mr-3 float-left">
							<div class="avatar">
								<img class="img-avatar" src="<?= base_url(); ?>assets/img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
								<span class="avatar-status badge-success"></span>
							</div>
						</div>
						<div>
							<small class="text-muted">Lukasz Holeczek</small>
							<small class="text-muted float-right mt-1">1:52 PM</small>
						</div>
						<div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
						<small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
					</div>
					<hr>
					<div class="message">
						<div class="py-3 pb-5 mr-3 float-left">
							<div class="avatar">
								<img class="img-avatar" src="<?= base_url(); ?>assets/img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
								<span class="avatar-status badge-success"></span>
							</div>
						</div>
						<div>
							<small class="text-muted">Lukasz Holeczek</small>
							<small class="text-muted float-right mt-1">1:52 PM</small>
						</div>
						<div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
						<small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
					</div>
					<hr>
					<div class="message">
						<div class="py-3 pb-5 mr-3 float-left">
							<div class="avatar">
								<img class="img-avatar" src="<?= base_url(); ?>assets/img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
								<span class="avatar-status badge-success"></span>
							</div>
						</div>
						<div>
							<small class="text-muted">Lukasz Holeczek</small>
							<small class="text-muted float-right mt-1">1:52 PM</small>
						</div>
						<div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
						<small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
					</div>
				</div>
				<div class="tab-pane p-3" id="settings" role="tabpanel">
					<h6>Settings</h6>
					<div class="aside-options">
						<div class="clearfix mt-4">
							<small>
								<b>Option 1</b>
							</small>
							<label class="switch switch-label switch-pill switch-success switch-sm float-right">
								<input class="switch-input" type="checkbox" checked="">
								<span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
							</label>
						</div>
						<div>
							<small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
						</div>
					</div>
					<div class="aside-options">
						<div class="clearfix mt-3">
							<small>
								<b>Option 2</b>
							</small>
							<label class="switch switch-label switch-pill switch-success switch-sm float-right">
								<input class="switch-input" type="checkbox">
								<span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
							</label>
						</div>
						<div>
							<small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
						</div>
					</div>
					<div class="aside-options">
						<div class="clearfix mt-3">
							<small>
								<b>Option 3</b>
							</small>
							<label class="switch switch-label switch-pill switch-success switch-sm float-right">
								<input class="switch-input" type="checkbox">
								<span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
							</label>
						</div>
					</div>
					<div class="aside-options">
						<div class="clearfix mt-3">
							<small>
								<b>Option 4</b>
							</small>
							<label class="switch switch-label switch-pill switch-success switch-sm float-right">
								<input class="switch-input" type="checkbox" checked="">
								<span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
							</label>
						</div>
					</div>
					<hr>
					<h6>System Utilization</h6>
					<div class="text-uppercase mb-1 mt-4">
						<small>
							<b>CPU Usage</b>
						</small>
					</div>
					<div class="progress progress-xs">
						<div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<small class="text-muted">348 Processes. 1/4 Cores.</small>
					<div class="text-uppercase mb-1 mt-2">
						<small>
							<b>Memory Usage</b>
						</small>
					</div>
					<div class="progress progress-xs">
						<div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<small class="text-muted">11444GB/16384MB</small>
					<div class="text-uppercase mb-1 mt-2">
						<small>
							<b>SSD 1 Usage</b>
						</small>
					</div>
					<div class="progress progress-xs">
						<div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<small class="text-muted">243GB/256GB</small>
					<div class="text-uppercase mb-1 mt-2">
						<small>
							<b>SSD 2 Usage</b>
						</small>
					</div>
					<div class="progress progress-xs">
						<div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<small class="text-muted">25GB/256GB</small>
				</div>
			</div>
		</aside>
	</div>
	<footer class="app-footer">
		<div>
			<a href="https://coreui.io">CoreUI</a>
			<span>&copy; 2018 creativeLabs.</span>
		</div>
		<div class="ml-auto">
			<span>Powered by</span>
			<a href="https://coreui.io">CoreUI</a>
		</div>
	</footer>

	<?php $CI = &get_instance(); ?>
	<script>
		var csrf_name = '<?= $CI->security->get_csrf_token_name(); ?>';
		var csrf_hash = '<?= $CI->security->get_csrf_hash(); ?>';
	</script>
	<script src="<?= base_url(); ?>assets/vendors/jquery/js/jquery.min.js">
	</script>
	<script src="<?= base_url(); ?>assets/vendors/popper.js/js/popper.min.js"></script>
	<script src="<?= base_url(); ?>assets/vendors/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>assets/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
	<script src="<?= base_url('assets/vendors/pace-progress/js/pace.min.js') ?>"></script>
	<script src="<?= base_url('assets/vendors/@coreui/coreui/js/coreui.min.js') ?>"></script>
	<!-- Plugins and scripts required by this view-->
	<script src="<?= base_url(); ?>assets/vendors/chart.js/js/Chart.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/charts.js"></script>
	<!-- form validation -->

	<script src="<?= base_url(); ?>assets/node_modules/bootstrap-validator/dist/validator.min.js"></script>
	<!-- datatables -->
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
	<!-- custom js -->
	<script src="<?= base_url('assets/js/custom.js'); ?>" type="text/javascript" charset="utf-8"></script>
	<!-- fontawesome -->
	<script src="https://kit.fontawesome.com/5e43405e99.js" crossorigin="anonymous"></script>
	<script src="<?= base_url('assets/vendors/pace-progress/js/pace.min.js') ?>"></script>
	<!-- jquery ui -->
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<!-- smartwizard multistep form -->
	<script src="<?= base_url('assets/js/jquery.smartWizard.min.js') ?>"></script>
	<!-- sweetaler 2 -->
	<script src="<?= base_url('assets/js/sweetalert2.all.min.js') ?>"></script>
	<script>
		// Setup datatables 
		$(document).ready(function() {
			// Setup datatables
			$.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings) {
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

			var table = $("#datatableserver").dataTable({
				initComplete: function() {
					var api = this.api();
					$('#datatableserver_filter input')
						.off('.DT')
						.on('input.DT', function() {
							api.search(this.value).draw();
						});
				},
				responsive: true,
				oLanguage: {
					sProcessing: '<div class="loader" id="loader-3"></div>'
				},
				processing: true,
				serverSide: true,
				ajax: {
					"url": "<?= base_url('index.php/' . $level . '/page/get_books_json') ?>",
					"type": "POST"
				},
				columns: [{
						"data": "id",
						"orderable": false
					},
					{
						"data": "kode_buku"
					},
					{
						"data": "judul"
					},
					{
						"data": "penulis"
					},
					{
						"data": "penerbit"
					},
					{
						"data": "ISBN"
					},
					{
						"data": "nama_kategori"
					},
					{
						"data": "jumlah_buku" 
					},
					{
						"data": "view"
					}
				],
				order: [
					[1, 'asc']
				],
				rowCallback: function(row, data, iDisplayIndex) {
					var info = this.fnPagingInfo();
					var page = info.iPage;
					var length = info.iLength;
					var index = page * length + (iDisplayIndex + 1);
					$('td:eq(0)', row).html(index);
				}

			});

			// end setup datatables

			// get Edit Records
			$('#datatableserver').on('click', '.edit_record', function() {
				var kode = $(this).data('kode');
				var judul = $(this).data('judul');
				var penulis = $(this).data('penulis');
				var isbn = $(this).data('isbn');
				var kategori = $(this).data('kategori');
				$('#ModalUpdate').modal('show');
				$('[name="kode_buku"]').val(kode);
				$('[name="judul"]').val(judul);
				$('[name="penulis"]').val(penulis);
				$('[name="kategori"]').val(kategori);
				$('[name="isbn"]').val(isbn);
			});
			// End Edit Records

			// get Hapus Records
			$('#datatableserver').on('click', '.hapus_record', function() {
				var kode = $(this).data('kode');
				$('#ModalHapus').modal('show');
				$('[name="kode_buku"]').val(kode);
			});
			// End Hapus Records

			//get view record
			$('#datatableserver').on('click', '.view_record', function() {
				var kode = $(this).data('kode');
				var judul = $(this).data('judul');
				var penulis = $(this).data('penulis');
				var isbn = $(this).data('isbn');
				var kategori = $(this).data('kategori');
				$('#ModalView').modal('show');
				$('[name="kode_buku"]').val(kode);
				$('[name="judul"]').val(judul);
				$('[name="penulis"]').val(penulis);
				$('[name="kategori"]').val(kategori);
				$('[name="isbn"]').val(isbn);
			});
			// end view record

			//ajax autocomplete
			// autocomplete
			$(function() {
				function log(message) {
					$("<div>").text(message).prependTo("#log");
					$("#log").scrollTop(0);
				}

				$("#nf-email").autocomplete({
					source: function(request, response) {
						$.ajax({
							url: "<?= base_url('index.php/admin/page/get_buku_json') ?>",
							dataType: "json",
							data: {
								term: request.term
							},
							success: function(data) {
								response(data);
							}
						});
					},
					minLength: 1,
					select: function(event, ui) {
						$('#nf-password').val(ui.item.judul)
						log("Selected: " + ui.item.value + " aka " + ui.item.id);
					}
				});
			});

		
			$(function() {
				function log(message) {
					$("<div>").text(message).prependTo("#log");
					$("#log").scrollTop(0);
				}

				$("input[name='level']").autocomplete({
					source: function(request, response) {
						$.ajax({
							url: "<?= base_url('index.php/admin/page/get_level') ?>",
							dataType: "json",
							data: {
								term: request.term
							},
							success: function(data) {
								$('#tableWizard tbody').remove();
								$('#tableWizard').show();
								
								tbody = $("<tbody></tbody>");
								
								$.each(data, function(key, value) {
									tr = $("<tr></tr>");
									tr.append("<td>" + value.nama + "</td>");
									tr.append("<td>" + value.email + "</td>");
									tr.append("<td>" + value.alamat + "</td>");
									
									$("#tableWizard").append(tbody);
									$("#tableWizard tbody").append(tr);
								});
							}
						});
					},
					minLength: 1,
				});
			});

			//wizard multistep form
			// Toolbar extra buttons
			var btnFinish = $('<button></button>').text('Finish')
				.addClass('btn btn-info')
				.on('click', function() {
					if (!$(this).hasClass('disabled')) {
						var elmForm = $("#myForm");
						if (elmForm) {
							elmForm.validator('validate');
							var elmErr = elmForm.find('.has-error');
							if (elmErr && elmErr.length > 0) {
								alert('Tolong lengkapi data di form');
								return false;
							} else {
								elmForm.submit();
								return false;
							}
						}
					}
				});


			$('#smartwizard').smartWizard({
				selected: 0,
				theme: 'arrows',
				transitionEffect: 'fade',
				transitionEffect: 'fade', // Effect on navigation, none/fade/slide/slideleft
				enableFinishButton: true, // makes finish button enabled always,
				contentCache: true,
				onFinish: onFinishCallback,
				labelFinish: 'Finish', // label for Finish button     
				labelCancel: 'Cancel',
				toolbarSettings: {
					toolbarPosition: 'bottom',
					toolbarExtraButtons: [btnFinish]
				},
			})

			function onFinishCallback() {
				$.ajax({
					type: 'POST',
					url: 'index.cfm?action=addClassData&nolayout',
					data: $('#myForm').serialize(),
					cache: false,
					success: function(ress) {
						alert("successful post");
				
					}
				});
			}

			$("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
				var elmForm = $("#form-step-" + stepNumber);
				// stepDirection === 'forward' :- this condition allows to do the form validation
				// only on forward navigation, that makes easy navigation on backwards still do the validation when going next
				if (stepDirection === 'forward' && elmForm) {
					elmForm.validator('validate');
					var elmErr = elmForm.children('.has-error');
					if (elmErr && elmErr.length > 0) {
						// Form validation failed
						return false;
					}
				}
				return true;
			});

			$("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
				// Enable finish button only on last step
				if (stepNumber == 3) {
					$('.btn-finish').removeClass('disabled');
				} else {
					$('.btn-finish').addClass('disabled');
				}
			});

		});
	</script>
</body>

</html>