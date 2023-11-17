<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-4 text-gray-800">Transaksi Selesai</h1>
    </div>


    <?php foreach($transaksi as $tr) : ?>
    <form method="POST" action="<?= base_url('admin/transaksi/transaksi_selesai_aksi')?>">
        <input type="hidden" name="id_rental" id="id_rental" value="<?php echo $tr->id_rental?>">
        <input type="hidden" name="tanggal_kembali" id="tanggal_kembali" value="<?= $tr->tanggal_kembali?>">
        <input type="hidden" name="denda" id="denda" value="<?= $tr->denda?>">
        <input type="hidden" name="status_pembayaran" id="status_pembayaran" value="<?= $tr->status_pembayaran?>">

        <div class="form-group">
            <label>Tanggal Pengembalian</label>
            <input type="date" name="tanggal_pengembalian" id="tanggal_pengembalian" class="form-control"
                value="<?= $tr->tanggal_pengembalian?>">
        </div>
        <div class="form-group">
            <label>Status Pengembalian</label>
            <select name="status_pengembalian" id="status_pengembalian" class="form-control">
                <option value="<?= $tr->status_pengembalian?>"><?= $tr->status_pengembalian?></option>
                <option value="Kembali">Kembali</option>
                <option value="Belum Kembali">Belum Kembali</option>
            </select>
        </div>
        <div class="form-group">
            <label>Status Rental</label>
            <select name="status_rental" id="status_rental" class="form-control">
                <option value="<?= $tr->status_rental?>"><?= $tr->status_rental?></option>
                <option value="Kembali">Selesai</option>
                <option value="Belum Selesai">Belum Selesai</option>
            </select>
        </div>
        <div class="form-group">
            <label>Status Pembayaran</label>
            <select name="status_pembayaran" id="status_pembayaran" class="form-control">
                <option value="<?= $tr->status_pembayaran?>"><?= $tr->status_pembayaran?></option>
                <option value="1">1</option>
            </select>
        </div>

        <button type="submit" class="btn btn-sm btn-success">Save</button>

    </form>
    <?php endforeach; ?>
</div>