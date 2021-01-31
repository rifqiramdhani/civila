<div class="sidebar">
	<nav class="sidebar-nav">
		<ul class="nav">
			<li class="nav-item">

				<a class="nav-link" href="<?= base_url() . $level . '/page/dashboard'; ?>">
					<i class="nav-icon icon-speedometer"></i> Dashboard
					<span class="badge badge-primary">NEW</span>
				</a>
			</li>
			<li class="nav-title">Components</li>
			<li class="nav-item nav-dropdown">
				<a class="nav-link nav-dropdown-toggle" href="#">
					<i class="nav-icon icon-puzzle"></i> Base</a>
				<ul class="nav-dropdown-items">

					<li class="nav-item">
						<a class="nav-link" href="<?= base_url() . $level . '/page/forms'; ?>">
							<i class="nav-icon icon-puzzle"></i> Forms</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="<?= base_url() . $level . '/page/tables'; ?>">
							<i class="nav-icon icon-puzzle"></i> Tables</a>
					</li>

				</ul>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url() . $level . '/page/charts'; ?>">
					<i class="nav-icon icon-pie-chart"></i> Charts</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url() . $level . '/page/books'; ?>">
					<i class="nav-icon icon-pie-chart"></i> Buku</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url() . $level . '/page/wizard'; ?>">
					<i class="nav-icon icon-pie-chart"></i> Wizard</a>
			</li>
		</ul>
	</nav>
	<button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>