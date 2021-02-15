<div class="container-fluid">
	<div class="animated fadeIn">
		<div class="row ">

			<div class="container-fluid">
				<div class="animated fadeIn">
					<div class="row">
						<div class="col-lg-6 col-sm-6 col-xs-12  mx-auto">
							<div class="info-box bg-pink hover-expand-effect">
								<div class="icon">
									<i class="fas fa-car"></i>
								</div>
								<div class="content">
									<div class="text text-white">MOBIL YANG TERSEDIA</div>
									<div class="number count-to  text-white"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-sm-6 col-xs-12  mx-auto">
							<div class="info-box bg-cyan hover-expand-effect">
								<div class="icon">
									<i class="fas fa-users"></i>
								</div>
								<div class="content">
									<div class="text text-white">PELANGGAN</div>
									<div class="number count-to  text-white"><?= $pelanggan['jumlah'] ?></div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6 col-xs-12  mx-auto">
							<div class="info-box bg-green hover-expand-effect">
								<div class="icon">
									<i class="fas fa-file-invoice"></i>
								</div>
								<div class="content">
									<div class="text text-white">PERMINTAAN PEMESANAN</div>
									<div class="number count-to  text-white"><?= $pemesanan['jumlah'] ?></div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6 col-xs-12  mx-auto">
							<div class="info-box bg-danger hover-expand-effect">
								<div class="icon">
									<i class="fas fa-ban"></i>
								</div>
								<div class="content">
									<div class="text text-white">PERMINTAAN PEMBATALAN</div>
									<div class="number count-to  text-white"><?= $pembatalan['jumlah'] ?></div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6 col-xs-12  mx-auto">
							<div class="info-box bg-warning hover-expand-effect">
								<div class="icon">
									<i class="fas fa-calendar-check"></i>
								</div>
								<div class="content">
									<div class="text text-white">PERMINTAAN PENAMBAHAN HARI</div>
									<div class="number count-to  text-white"><?= $penambahanhari['jumlah'] ?></div>
								</div>
							</div>
						</div>

						<!--/.col-->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>