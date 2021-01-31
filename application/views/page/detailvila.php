<section id="form-section">
    <a class="button-back" href="<?= base_url('daftar-vila') ?>">
        <img src="<?= base_url('assets/frontend/img/Vector.png') ?>">
    </a>

    <h2 class="heading">Detail Vila</h2>
    <div class="container list-vila">
        <div class="row p-5">
            <div class="col-md-6">
                <div class="gallery">
                    <div class="xzoom-container thumbnail-foto">
                        <img src="<?= base_url() ?>assets/frontend/img/detail_vila/<?= $thumbnail_vila['foto'] ?>" class="xzoom" id="xzoom-default" xoriginal="<?= base_url() ?>assets/frontend/img/detail_vila/<?= $thumbnail_vila['foto'] ?>">
                    </div>
                    <div class="xzoom-thumbs">
                        <?php foreach ($foto_vila as $getfoto) : ?>
                            <a href="<?= base_url() ?>assets/frontend/img/detail_vila/<?= $getfoto->foto ?>">
                                <img src="<?= base_url() ?>assets/frontend/img/detail_vila/<?= $getfoto->foto ?>" class="xzoom-gallery" width="128" height="80" xpreview="<?= base_url() ?>assets/frontend/img/detail_vila/<?= $getfoto->foto ?>">
                            </a>
                        <?php endforeach ?>
                    </div>
                </div>

                <div class="row maps">
                    <div class="col-12">
                        <h2><?= strtoupper($detail_vila['nama_vila']) ?></h2>
                        <div class="map-clean map-section mb-5">
                            <iframe allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBOJ37w3VWjmycpvWeMEs3k_R67S8OnGrA&q=<?= $detail_vila['nama_vila'] ?>&zoom=20" width="100%" height="200"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 deskripsi">
                <div class="table-responsive table-borderless border-hitam">
                    <h2 class="mt-4">Deskripsi</h2>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Alamat</td>
                                <td>: <?= $detail_vila['alamat_vila'] ?></td>
                            </tr>
                            <tr>
                                <td>Kapasitas</td>
                                <td>: <?= $detail_vila['kapasitas_vila'] ?></td>
                            </tr>
                            <tr>
                                <td>Fasilitas</td>
                                <td>
                                    <ul class="dashed">
                                        <?php foreach ($fasilitas_vila as $getfasilitas) : ?>
                                            <li><?= $getfasilitas ?></li>
                                        <?php endforeach ?>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <?php
                $hp = $detail_vila['narahubung_vila'];
                $hp62 = substr_replace($hp, '62', 0, 1);
                ?>

                <div class="row button-info mt-5">
                    <div class="col-12 text-center">
                        <a href="http://api.whatsapp.com/send?phone=<?= $hp62 ?>&text=Saya%20ingin%20memesan%20vila%20paniisan%20pada%0Atanggal%2020/02/2020%20sampai%2021/02/2020" class="btn btn-submit" target="_blank"><i class="fa fa-whatsapp"></i>Info Pemesanan</a>
                        <a href="#" class="btn btn-submit" data-toggle="modal" data-target="#modalVocher"><i class="fa fa-ticket"></i>Kode Vocher</a>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="modalVocher" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Silahkan Bagikan Untuk Mendapatkan Kode Vocher</p>
                <a href="http://www.facebook.com/sharer.php?u=<?= base_url() ?>" class="btn btn-info" id="sharefacebook" onclick="window.open(this.href,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=350,height=250'); return false">
                    <i class="fa fa-facebook"></i>
                </a>

                <div class="selamat text-center" style="display: none;">
                    <hr>
                    <h5>Selamat Anda Mendapatkan Kode Vocher</h5>
                    <p><b><?= strtoupper(generate_string(5)) ?></b></p>
                    <p>
                        Gunakan saat akan memesan vila <br>
                        beritahu kode refferal anda kepada narahubung
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>