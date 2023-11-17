<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-4 text-gray-800">Filter Laporan Transaksi</h1>
    </div>
    <div class="card">
        <div class="card-body">
            <form method="POST" action="<?= base_url('admin/laporan')?>">

                <div class="form-group">
                    <label>Dari Tanggal</label>
                    <input type="date" name="dari" id="dari" class="form-control">
                    <?= form_error('dari','<span class="text-small text-danger">','</span>')?>
                </div>

                <div class="form-group">
                    <label>Sampai Tanggal</label>
                    <input type="date" name="sampai" id="sampai" class="form-control">
                    <?= form_error('sampai','<span class="text-small text-danger">','</span>')?>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">
                    <i class="fas fa-eye"></i> Tampilkan Data
                </button>

            </form>
        </div>
    </div>
</div>