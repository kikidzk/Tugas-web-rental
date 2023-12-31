<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Transaksi</h1>
    </div>
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
                <th>Status Pembayaran</th>
                <th>Action </th>
            </tr>

            <?php
            $no = 1;
            foreach ($transaksi as $tr) :
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
                <td><?= $tr->status_pembayaran?></td>
                <td>
                    <?php
                        if ($tr->status == "1") {
                            echo "-";
                        } else { ?>
                    <div class="row">
                        <a class="btn btn-sm btn-success"
                            href="<?php echo base_url('admin/transaksi/transaksi_selesai/'.$tr->id_rental) ?>"><i
                                class='fas fa-check'></i></a>
                        <a class="btn btn-sm btn-danger"
                            href="<?php echo base_url('admin/transaksi/transaksi_batal/'.$tr->id_rental) ?>"><i
                                class='fas fa-times'></i></a>
                    </div>

                    <?php } ?>
                </td>
            </tr>

            <?php
            endforeach;
            ?>
        </table>
    </div>
    </section>
</div>