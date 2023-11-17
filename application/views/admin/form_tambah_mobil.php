<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-4 text-gray-800">Form Input Data Mobil</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <form method="POST" action="<?=base_url('admin/data_mobil/tambah_mobil_aksi')?>"
                enctype="multipart/form-data">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Merk</label>
                            <input type="text" name="merk" id="merk" class="form-control">
                            <?=form_error('merk','<div class="text-small text-danger">','</div>')?>
                        </div>
                        <div class="form-group">
                            <label>No. Plat</label>
                            <input type="text" name="no_plat" id="no_plat" class="form-control">
                            <?=form_error('no_plat','<div class="text-small text-danger">','</div>')?>
                        </div>
                        <div class="form-group">
                            <label>Warna</label>
                            <input type="text" name="warna" id="warna" class="form-control">
                            <?=form_error('warna','<div class="text-small text-danger">','</div>')?>
                        </div>
                        <div class="form-group">
                            <label>Tahun</label>
                            <input type="text" name="tahun" id="tahun" class="form-control">
                            <?=form_error('tahun','<div class="text-small text-danger">','</div>')?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="">-- Pilih Status --</option>
                                <option value="1">Tersedia</option>
                                <option value="0">Tidak Tersedia</option>
                            </select>
                            <?=form_error('status','<div class="text-small text-danger">','</div>')?>
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="harga" id="harga" class="form-control">
                            <?=form_error('harga','<div class="text-small text-danger">','</div>')?>
                        </div>
                        <div class="form-group">
                            <label>Denda</label>
                            <input type="text" name="denda" id="denda" class="form-control">
                            <?=form_error('denda','<div class="text-small text-danger">','</div>')?>
                        </div>
                        <div class="form-group">
                            <label>Gambar</label>
                            <br>
                            <input type="file" name="gambar" id="gambar">
                            <?=form_error('gambar','<div class="text-small text-danger">','</div>')?>
                        </div>

                        <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                        <button type="reset" class="btn btn-danger mt-4">Reset</button>

                    </div>
                </div>
            </form>
        </div>
    </div>


</div>