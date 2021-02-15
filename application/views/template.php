<!-- load header from template -->
<?php $this->load->view('admin/template/header') ?>

<!-- load navbar from template -->
<?php $this->load->view('admin/template/navbar') ?>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
	<!-- load navbar from template -->
	<div class="app-body">
		<!-- load dynamic sidebar -->
		<?php $this->load->view('admin/sidebar'); ?>

		<!-- Your content will be here-->
		<main class="main">
			<!-- Breadcrumb-->
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><?= ucfirst($level) ?></li>
				<li class="breadcrumb-item active">Dashboard</li>
			</ol>
			<!-- load dynamic content  -->
			<?= $contents; ?>
		</main>

	</div>

	<!-- load footer from template -->
	<?php $this->load->view('admin/template/footer') ?>