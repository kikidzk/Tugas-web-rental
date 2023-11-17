<div class="container">
    <?= $this->session->flashdata('pesan')?>
    <div class="card">
        <div class="card-body">
            <?php foreach ($detail as $dt) : ?>
            <div class="row">
                <div class="col-lg-6">
                    <img style="width: 450px" src="<?php echo base_url('assets/upload/' . $dt->gambar) ?>">
                </div>
                <div class="col-lg-6">
                    <table class="table">
                        <tr>
                            <th>Merk</th>
                            <td><?php echo $dt->merk ?></td>
                        </tr>
                        <tr>
                            <th>Nomor Plat</th>
                            <td><?php echo $dt->no_plat ?></td>
                        </tr>
                        <tr>
                            <th>Warna</th>
                            <td><?php echo $dt->warna ?></td>
                        </tr>
                        <tr>
                            <th>Tahun Produksi</th>
                            <td><?php echo $dt->tahun ?></td>
                        </tr>
                        <tr>
                            <th>Harga</th>
                            <td>Rp. <?php echo number_format($dt->harga),'.' ?></td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td><?php if ($dt->status == '1') {
                                        echo "Tersedia";
                                    } else {
                                        echo "Tidak Tersedia/Sedang Dirental";
                                    } ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Syarat & Ketentuan</th>
                            <td><li>Bagi penyewa lepas kunci wajib memiliki SIM
                                    <li>Memiliki KTP yang akan disimpan oleh pemilik sewa selama penyewaan</li>
                                    <li>Ada nya ketentuan denda sewa jika melebihi batas waktu sewa</li>
                                    <li>Pihak sewa mobil berhak menolak pelanggan sesuai kriteria</li>
                                    <li>Tidak diperkenankan untuk digunakan balapan tidak resmi</li>
                                    <li>Durasi penyewaan dianggap digunakan secara full 1 x 24 Jam</li></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <?php
                                    if ($dt->status == "0") {
                                        echo "<span class='btn btn-danger' disable>Telah di Rental</span>";
                                    } else {
                                        echo anchor('customer/rental/tambah_rental/' . $dt->id_mobil, '<button class="btn btn-success">Rental</button>');
                                    }
                                    ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>