<div class="container">
    <div class="card" style="margin-top: 50px; width: 100%">
        <div class="card-header">
            <big>Data Transaksi Anda</big>
        </div>
        <div class="card-body">
            <span class="mt-2 p-2">
                <?= $this->session->set_flashdata('pesan  ')?>
            </span>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>Nama Customer</th>
                    <th>Merk Mobil</th>
                    <th>No Plat</th>
                    <th>Harga Sewa / Hari</th>
                    <th>Action</th>
                    <th>Batal</th>
                </tr>

                <?php $no = 1;
                foreach ($transaksi as $tr) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $tr->nama ?></td>
                    <td><?php echo $tr->merk ?></td>
                    <td><?php echo $tr->no_plat ?></td>
                    <td>Rp. <?php echo number_format($tr->harga, 0, ',', '.') ?></td>
                    <td>
                        <?php if($tr->status_rental=="Kembali"){ ?>
                        <button class="btn btn-sm btn-danger">Rental Selesai</button>
                        <?php }else{?>
                        <a href="<?php echo base_url('customer/transaksi/pembayaran/'.$tr->id_rental) ?>"
                            class="btn btn-sm btn-success">Cek pembayaran</a>
                        <?php } ?>
                    </td>
                    <td>
                        <a onclick="return confirm('Yakin Batal')"
                            href="<?= base_url('customer/transaksi/batal_transaksi/'.$tr->id_rental)?>"
                            class="btn btn-sm btn-danger">Batal</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>