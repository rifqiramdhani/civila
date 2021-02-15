<!-- flashdata sweetalert -->
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message') ?>" data-title="<?= $this->session->flashdata('title') ?>" data-type="<?= $this->session->flashdata('type') ?>"></div>

<div class="col-12">
    <a href="<?= base_url('admin/dashboard/tambah') ?>" class="btn btn-warning mt-3 mb-3">
        <i class="fas fa-plus"></i> Tambah
    </a>

    <div class="card card-accent-warning">
        <div class="card-header"><strong>Data Vila</strong></div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped text-center" style="width:100%" id="datavila">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Alamat</th>
                            <th>Kontak Narahubung</th>
                            <th>Kapasitas</th>
                            <th>Fasilitas</th>
                            <th>Rating</th>
                            <th>Foto</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($vila as $getdata) : ?>
                            <tr id="<?= $getdata->id_vila ?>">
                                <td><?= $i ?></td>
                                <td><?= $getdata->nama_vila ?></td>
                                <td>Rp. <?= number_format($getdata->harga_vila) ?>/malam</td>
                                <td><?= $getdata->alamat_vila ?></td>
                                <td><?= $getdata->narahubung_vila ?></td>
                                <td><?= $getdata->kapasitas_vila ?></td>
                                <td><?= $getdata->fasilitas_vila ?></td>
                                <td><?= $getdata->rating_vila ?></td>
                                <td>
                                    <img src="<?= base_url('assets/frontend/img/detail_vila/' . $getdata->foto_vila) ?>" width="100px" alt="Foto Vila">
                                </td>
                                <td>
                                    <a href="<?= base_url('admin/dashboard/edit/' . $getdata->id_vila) ?>" class="btn btn-sm btn-primary mt-1"><i class="fas fa-pen"></i></a>
                                    <button type="button" data-id="<?= $getdata->id_vila ?>" data-nama="<?= $getdata->nama_vila ?>" class="btn btn-sm btn-danger remove mt-1"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        <?php $i++;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>

            <!-- <div class="col-sm-4 news-events-page--list-page">
                <a href="#" data-toggle="modal" data-target="#carouselModal">
                    <img src="http://placehold.it/359x159" class="img-responsive">
                </a>
                <h6><a href="" data-toggle="modal" data-target="#carouselModal">Title Here</a></h6>
            </div> -->
        </div>
    </div>
</div>