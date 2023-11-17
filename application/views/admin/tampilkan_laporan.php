<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-4 text-gray-800">Laporan Transaksi</h1>
    </div>
    <div class="card">
        <div class="card-body">
            <form method="POST" action="<?= base_url('admin/laporan')?>">

                <div class="form-group">
                    <label>Dari Tanggal</label>
                    <input type="date" name="dari" id="dari" class="
            form-control">
                    <?= form_error('dari','<span class="text-small text-danger">','</span>')?>
                </div>

                <div class="form-group">
                    <label>Sampai Tanggal</label>
                    <input type="date" name="sampai" id="sampai" class="
            form-control">
                    <?= form_error('sampai','<span class="text-small text-danger">','</span>')?>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">
                    <i class="fas fa-eye"></i> Tampilkan Data
                </button>

            </form>
            <hr>
            <div class="table-responsive">
                <table class="table table-hover table-striped table-borderd">
                    <tr>
                        <th>No</th>
                        <th>Customer</th>
                        <th>Mobil</th>
                        <th>Tgl. Rental</th>
                        <th>Tgl. Kembali</th>
                        <th>Harga/Hari</th>
                        <th>Denda/Hari</th>
                        <td>Total Denda</td>
                        <th>Tgl. Dikembalikan</th>
                        <th>Status Pengembalian </th>
                        <th>Status Rental</th>
                    </tr>

                    <?php
                    $no = 1;
                    foreach ($laporan as $tr) :
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $tr->nama ?></td>
                        <td><?php echo $tr->merk ?></td>
                        <td><?php echo date('d/m/Y', strtotime($tr->tanggal_rental)); ?></td>
                        <td><?php echo date('d/m/Y', strtotime($tr->tanggal_kembali)); ?></td>
                        <td>Rp. <?php echo number_format($tr->harga, 0, ',', '.') ?></td>
                        <td>Rp. <?php echo number_format($tr->denda, 0, ',', '.') ?></td>
                        <td>Rp. <?= number_format($tr->total_denda, 0, ',', '.') ?></td>

                        <td>
                            <?php
                        if ($tr->tanggal_pengembalian == "0000-00-00") {
                            echo "-";
                        } else {
                            echo date('d/m/Y', strtotime($tr->tanggal_pengembalian));
                        }
                        ?>
                        </td>
                        <td>
                            <?= $tr->status_pengembalian?>
                        </td>
                        <td>
                            <?= $tr->status_rental?>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </table>
            </div>
        </div>
    </div>
</div>