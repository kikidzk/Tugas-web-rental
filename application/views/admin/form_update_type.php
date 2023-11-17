<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Update Type Mobil</h1>
    </div>

    <div class="card">
        <div class="card-body">

            <?php foreach($type as $tp) : ?>
            <form method="POST" action="<?=base_url('admin/data_type/update_type_aksi')?>"
                enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Kode Type</label>
                            <input type="hidden" name="id_type" id="id_type" value="<?= $tp->id_type ?>">
                            <input type="text" name="kode_type" class="form-control" id="kode_type"
                                value="<?= $tp->kode_type ?>">
                            <?=form_error('kode_type','<div class="text-small text-danger">','</div>')?>
                        </div>
                        <div class="form-group">
                            <label>Nama Type</label>
                            <input type="text" name="nama_type" class="form-control" id="nama_type"
                                value="<?= $tp->nama_type ?>">
                            <?=form_error('nama_type','<div class="text-small text-danger">','</div>')?>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </div>
            </form>
            <?php endforeach;?>

        </div>
    </div>
</div>