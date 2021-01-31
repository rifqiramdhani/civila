<section id="top-section"></section>
<section id="form-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 border-hitam p-5">
                <form action="<?= base_url('daftar-vila') ?>" method="get">
                    <div class="form-group"><label class="form-label ml-3">Lokasi</label>
                        <div class="input-group mb-3 col-md-12">
                            <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                            <input class="form-control" type="text" name="lokasi" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-inline">
                            <div class="col-md-6"><label class="form-label">Check in</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    <input class="form-control" type="text" id="checkin" name="checkin" onkeypress="return false;" required>
                                </div>
                            </div>
                            <div class="col-md-6"><label class="form-label">Check out</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    <input class="form-control" type="text" id="checkout" name="checkout" onkeypress="return false;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group"><label class="ml-3">Kapasitas</label>
                        <div class="input-group mb-3 col-md-6">
                            <span class="input-group-text"><i class="fa fa-male"></i></span>
                            <select name="kapasitas" id="kapasitas" class="form-control col-10">
                                <option value="1 - 5 orang">1 - 5 orang</option>
                                <option value="5 - 10 orang">5 - 10 orang</option>
                                <option value="10 - 15 orang">10 - 15 orang</option>
                                <option value="15 - 20 orang">15 - 20 orang</option>
                                <option value="20 - 30 orang">20 - 30 orang</option>
                                <option value="40 - 50 orang">40 - 50 orang</option>
                                <option value="50 - 60 orang">50 - 60 orang</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group"><button type="submit" class="btn ml-3 mt-5 btn-submit" role="button">Cari Akomodasi</button></div>
                </form>
            </div>
        </div>
    </div>
</section>