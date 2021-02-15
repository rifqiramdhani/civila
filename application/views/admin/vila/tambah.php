<!-- flashdata sweetalert -->
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message') ?>" data-title="<?= $this->session->flashdata('title') ?>" data-type="<?= $this->session->flashdata('type') ?>"></div>

<div class="col-lg-6 col-md-12 ">
    <div class="card card-accent-success">
        <div class="card-header"><strong>Tambah Data Vila</strong></div>
        <div class="card-body">
            <?= form_open_multipart('admin/dashboard/prosestambah', ['data-toggle' => 'validator', 'role' => 'form']) ?>

            <div class="form-group has-feedback">
                <label for="nama_vila">Nama</label>
                <input type="text" class="form-control" value="<?= set_value('nama_vila'); ?>" id="nama_vila" name="nama_vila" required>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <span class="help-block with-errors"></span>
                <?= form_error('nama_vila', '<div class="text-danger">', '</div>'); ?>
            </div>

            <div class="form-group has-feedback">
                <label for="harga_vila">Harga</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control col-10" value="<?= set_value('harga_vila'); ?>" id="harga_vila" name="harga_vila" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
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
                <input type="text" class="form-control" value="<?= set_value('narahubung_vila'); ?>" id="narahubung_vila" name="narahubung_vila" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <span class="help-block with-errors"></span>
                <?= form_error('harga_vila', '<div class="text-danger">', '</div>'); ?>
            </div>

            <div class="form-group has-feedback">
                <label for="lokasi_vila">Lokasi</label>
                <input type="text" class="form-control" value="<?= set_value('lokasi_vila'); ?>" id="lokasi_vila" name="lokasi_vila" required>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <span class="help-block with-errors"></span>
                <?= form_error('lokasi_vila', '<div class="text-danger">', '</div>'); ?>
            </div>

            <div class="form-group has-feedback">
                <label for="alamat_vila">Alamat</label>
                <input type="text" class="form-control" value="<?= set_value('alamat_vila'); ?>" id="alamat_vila" name="alamat_vila" required>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <span class="help-block with-errors"></span>
                <?= form_error('alamat_vila', '<div class="text-danger">', '</div>'); ?>
            </div>

            <div class="form-group has-feedback">
                <label for="kapasitas_vila">Kapasitas</label>
                <select name="kapasitas_vila" id="kapasitas_vila" class="form-control" required>
                    <option value=""></option>
                    <option value="1 - 5 orang">1 - 5 orang</option>
                    <option value="5 - 10 orang">5 - 10 orang</option>
                    <option value="10 - 15 orang">10 - 15 orang</option>
                    <option value="15 - 20 orang">15 - 20 orang</option>
                    <option value="20 - 25 orang">20 - 25 orang</option>
                    <option value="25 - 30 orang">25 - 30 orang</option>
                    <option value="30 - 35 orang">30 - 35 orang</option>
                    <option value="35 - 40 orang">35 - 40 orang</option>
                    <option value="40 - 45 orang">40 - 45 orang</option>
                    <option value="45 - 50 orang">45 - 50 orang</option>
                    <option value="50 - 55 orang">50 - 55 orang</option>
                    <option value="55 - 60 orang">55 - 60 orang</option>
                </select>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <span class="help-block with-errors"></span>
                <?= form_error('kapasitas_vila', '<div class="text-danger">', '</div>'); ?>
            </div>


            <div class="form-group has-feedback">
                <label for="fasilitas_vila">Fasilitas</label>
                <textarea name="fasilitas_vila" id="fasilitas_vila" cols="30" rows="10" class="form-control" required></textarea>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <span class="help-block with-errors"></span>
                <?= form_error('fasilitas_vila', '<div class="text-danger">', '</div>'); ?>
            </div>

            <div class="form-group has-feedback">
                <label for="rating_vila">Rating</label>

                <div class="rating">
                    <input id="star5" name="rating_vila" type="radio" value="5" class="radio-btn hide" required />
                    <label for="star5">☆</label>
                    <input id="star4" name="rating_vila" type="radio" value="4" class="radio-btn hide" required />
                    <label for="star4">☆</label>
                    <input id="star3" name="rating_vila" type="radio" value="3" class="radio-btn hide" required />
                    <label for="star3">☆</label>
                    <input id="star2" name="rating_vila" type="radio" value="2" class="radio-btn hide" required />
                    <label for="star2">☆</label>
                    <input id="star1" name="rating_vila" type="radio" value="1" class="radio-btn hide" required />
                    <label for="star1">☆</label>
                    <div class="clear"></div>
                </div>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <span class="help-block with-errors"></span>
                <?= form_error('rating_vila', '<div class="text-danger">', '</div>'); ?>
            </div>

            <div class="form-group has-feedback kebawah">
                <label for="foto_mobil">Foto</label>
                <div class=" custom-file">
                    <input type="file" id="foto_mobil" name="files[]" multiple="multiple" class=" custom-file-input" onchange="validate(this);" required>
                    <label class="custom-file-label" for="foto_mobil">
                        <span class="d-inline-block text-truncate w-75">Pilih 1 atau lebih foto<br>
                        </span>
                    </label>
                    <span class="help-block with-errors"></span>
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