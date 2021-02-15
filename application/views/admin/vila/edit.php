<!-- flashdata sweetalert -->
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message') ?>" data-title="<?= $this->session->flashdata('title') ?>" data-type="<?= $this->session->flashdata('type') ?>"></div>

<div class="col-lg-6 col-md-12 ">
    <div class="card card-accent-success">
        <div class="card-header"><strong>Tambah Data Vila</strong></div>
        <div class="card-body">
            <?= form_open_multipart('admin/dashboard/prosesedit/' . $vila['id_vila'], ['data-toggle' => 'validator', 'role' => 'form']) ?>

            <div class="form-group has-feedback">
                <label for="nama_vila">Nama</label>
                <input type="text" class="form-control" value="<?= $vila['nama_vila'] ?>" id="nama_vila" name="nama_vila" required>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <span class="help-block with-errors"></span>
                <?= form_error('nama_vila', '<div class="text-danger">', '</div>'); ?>
            </div>

            <div class="form-group has-feedback">
                <label for="harga_vila">Harga</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control col-10" value="<?= $vila['harga_vila'] ?>" id="harga_vila" name="harga_vila" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                    <div class="input-group-append">
                        <span class="input-group-text" id="harga_vila">/malam</span>
                    </div>
                </div>

                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <span class="help-block with-errors"></span>
                <?= form_error('harga_vila', '<div class="text-danger">', '</div>'); ?>
            </div>

            <div class="form-group has-feedback">
                <label for="narahubung_vila">Narahubung</label>
                <input type="text" class="form-control" value="<?= $vila['narahubung_vila']; ?>" id="narahubung_vila" name="narahubung_vila" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <span class="help-block with-errors"></span>
                <?= form_error('harga_vila', '<div class="text-danger">', '</div>'); ?>
            </div>

            <div class="form-group has-feedback">
                <label for="lokasi_vila">Lokasi</label>
                <input type="text" class="form-control" value="<?= $vila['lokasi_vila']; ?>" id="lokasi_vila" name="lokasi_vila" required>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <span class="help-block with-errors"></span>
                <?= form_error('lokasi_vila', '<div class="text-danger">', '</div>'); ?>
            </div>

            <div class="form-group has-feedback">
                <label for="alamat_vila">Alamat</label>
                <input type="text" class="form-control" value="<?= $vila['alamat_vila']; ?>" id="alamat_vila" name="alamat_vila" required>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <span class="help-block with-errors"></span>
                <?= form_error('alamat_vila', '<div class="text-danger">', '</div>'); ?>
            </div>

            <div class="form-group has-feedback">
                <label for="kapasitas_vila">Kapasitas</label>
                <select name="kapasitas_vila" id="kapasitas_vila" class="form-control" required>
                    <option value=""></option>
                    <option value="1 - 5 orang" <?= $vila['kapasitas_vila'] == '1 - 5 orang' ? 'selected' : '' ?>>1 - 5 orang</option>
                    <option value="5 - 10 orang" <?= $vila['kapasitas_vila'] == '5 - 10 orang' ? 'selected' : '' ?>>5 - 10 orang</option>
                    <option value="10 - 15 orang" <?= $vila['kapasitas_vila'] == '1 - 5 orang' ? 'selected' : '' ?>>10 - 15 orang</option>
                    <option value="15 - 20 orang" <?= $vila['kapasitas_vila'] == '15 - 20 orang' ? 'selected' : '' ?>>15 - 20 orang</option>
                    <option value="20 - 25 orang" <?= $vila['kapasitas_vila'] == '20 - 25 orang' ? 'selected' : '' ?>>20 - 25 orang</option>
                    <option value="25 - 30 orang" <?= $vila['kapasitas_vila'] == '25 - 30 orang' ? 'selected' : '' ?>>25 - 30 orang</option>
                    <option value="30 - 35 orang" <?= $vila['kapasitas_vila'] == '30 - 35 orang' ? 'selected' : '' ?>>30 - 35 orang</option>
                    <option value="35 - 40 orang" <?= $vila['kapasitas_vila'] == '35 - 40 orang' ? 'selected' : '' ?>>35 - 40 orang</option>
                    <option value="40 - 45 orang" <?= $vila['kapasitas_vila'] == '40 - 45 orang' ? 'selected' : '' ?>>40 - 45 orang</option>
                    <option value="45 - 50 orang" <?= $vila['kapasitas_vila'] == '45 - 50 orang' ? 'selected' : '' ?>>45 - 50 orang</option>
                    <option value="50 - 55 orang" <?= $vila['kapasitas_vila'] == '50 - 55 orang' ? 'selected' : '' ?>>50 - 55 orang</option>
                    <option value="55 - 60 orang" <?= $vila['kapasitas_vila'] == '55 - 60 orang' ? 'selected' : '' ?>>55 - 60 orang</option>
                </select>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <span class="help-block with-errors"></span>
                <?= form_error('kapasitas_vila', '<div class="text-danger">', '</div>'); ?>
            </div>


            <div class="form-group has-feedback">
                <label for="fasilitas_vila">Fasilitas</label>
                <textarea name="fasilitas_vila" id="fasilitas_vila" cols="30" rows="10" class="form-control" required><?= $vila['fasilitas_vila'] ?></textarea>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <span class="help-block with-errors"></span>
                <?= form_error('fasilitas_vila', '<div class="text-danger">', '</div>'); ?>
            </div>

            <div class="form-group has-feedback">
                <label for="rating_vila">Rating</label>

                <div class="rating">
                    <input id="star5" name="rating_vila" type="radio" value="5" class="radio-btn hide" required <?= $vila['rating_vila'] == '5' ? 'checked' : '' ?>/>
                    <label for="star5">☆</label>
                    <input id="star4" name="rating_vila" type="radio" value="4" class="radio-btn hide" required <?= $vila['rating_vila'] == '4' ? 'checked' : '' ?>/>
                    <label for="star4">☆</label>
                    <input id="star3" name="rating_vila" type="radio" value="3" class="radio-btn hide" required <?= $vila['rating_vila'] == '3' ? 'checked' : '' ?>/>
                    <label for="star3">☆</label>
                    <input id="star2" name="rating_vila" type="radio" value="2" class="radio-btn hide" required <?= $vila['rating_vila'] == '2' ? 'checked' : '' ?>/>
                    <label for="star2">☆</label>
                    <input id="star1" name="rating_vila" type="radio" value="1" class="radio-btn hide" required <?= $vila['rating_vila'] == '1' ? 'checked' : '' ?>/>
                    <label for="star1">☆</label>
                    <div class="clear"></div>
                </div>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <span class="help-block with-errors"></span>
                <?= form_error('rating_vila', '<div class="text-danger">', '</div>'); ?>
            </div>

            <div class="row">
                <div class="col-8">
                    <div class="form-group has-feedback kebawah">
                        <label for="file">Foto</label>
                        <div class=" custom-file">
                            <input type="file" id="file" name="file" class=" custom-file-input" onchange="validate(this);">
                            <label class="custom-file-label" for="file">
                                <span class="d-inline-block text-truncate w-75">Choose file<br>
                                </span>
                            </label>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <img src="<?= base_url('assets/frontend/img/detail_vila/' . $vila['foto_vila']) ?>" width="150px" alt="">
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
                <a href="<?= base_url('admin/dashboard') ?>" class="btn btn-warning"><i class="fas fa-reply"></i> Kembali</a>
            </div>

            </form>
        </div>
    </div>
</div>