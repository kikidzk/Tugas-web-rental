<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-4 text-gray-800">Form Input Data Transaksi</h1>
    </div>
    <div class="card">
        <div class="card-body">
            <form method="POST" action="<?=base_url('admin/input_tr/input_aksi')?>">

                <div class="row">
                    <div class="col-md-6">
                        <div class=" form-group">
                            <label>Id Customer</label>
                            <input type="number" name="id_customer" class="form-control">
                            <?= form_error('id_customer','<span class="text-small text-danger">','</span>') ?>
                            Lihat id customer pada data customer
                        </div>

                        <div class=" form-group">
                            <label>Mobil</label>
                            <input type="text" name="id_mobil" class="form-control">
                            <?= form_error('id_mobil','<span class="text-small text-danger">','</span>') ?>
                        </div>

                        <div class="form-group">
                            <label>Tgl. Rental</label>
                            <input type="date" name="tanggal_rental" class="form-control">
                            <?= form_error('tanggal_rental','<span class="text-small text-danger">','</span>')?>
                        </div>

                        <div class="form-group">
                            <label>Tgl. Kembali</label>
                            <input type="date" name="tanggal_kembali" class="form-control">
                            <?= form_error('tanggal_kembali','<span class="text-small text-danger">','</span>')?>
                        </div>

                        <div class="form-group">
                            <label>Harga Sewa / hari</label>
                            <input type="text" name="harga" class="form-control" readonly>
                            <?= form_error('harga','<span class="text-small text-danger">','</span>')?>
                        </div>


                    </div>
                    <div class="col-md-6">

                        <div class="form-group">
                            <label>Denda / hari</label>
                            <input type="text" name="denda" class="form-control" readonly>
                            <?= form_error('denda','<span class="text-small text-danger">','</span>')?>
                        </div>

                        <div class="form-group">
                            <label>Tgl. Dikembalikan</label>
                            <input type="date" name="tanggal_pengembalian" class="form-control">
                            <?= form_error('tanggal_pengembalian','<span class="text-small text-danger">','</span>')?>
                        </div>

                        <div class="form-group">
                            <label>Status Pengembalian</label>
                            <input type="number" name="status_pengembalian" class="form-control">
                            <?= form_error('status_pengembalian','<span class="text-small text-danger">','</span>')?>
                            0 = Belum Kembali 1 = Sudah Kembali
                        </div>

                        <div class="form-group">
                            <label>Status Rental</label>
                            <input type="text" name="status_rental" class="form-control">
                            <?= form_error('status_rental','<span class="text-small text-danger">','</span>')?>

                        </div>

                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                        <button type="reset" class="btn btn-sm btn-danger">Reset</button>

                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
</div>