<section id="form-section"><a class="button-back" href="<?= base_url() ?>">
        <img src="<?= base_url('assets/frontend/img/Vector.png') ?>"></a>
    <h2 class="heading">Daftar Vila</h2>
    <div class="container list-vila">

        <?= empty($datavila) ? '<div class="alert alert-primary" role="alert">
            Data vila tidak ditemukan
        </div>' : '' ?>
        
        <div class="row d-flex align-items-center p-5">

            <?php foreach ($datavila as $getdata) :  ?>
                <div class="col-md-3 card-vila">
                    <div class="card-image">
                        <a href="<?= base_url('detail-vila/') . $getdata->id_vila .'?checkin='. $checkin .'&checkout='. $checkout ?>">
                            <img class="img-fluid" src="<?= base_url('assets/frontend/img/') . $getdata->foto_vila ?>">
                        </a>
                    </div>
                    <div class="card-desc">
                        <div class="card-desc-bottom">
                            <p class="p-left"><i class="fa fa-star"></i><?= $getdata->rating_vila ?></p>
                            <p class="p-right"><?= $getdata->nama_vila ?></p>
                        </div>
                        <div class="card-desc-title">
                            <h5>Rp. <?= number_format($getdata->harga_vila) ?>/malam</h5>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>