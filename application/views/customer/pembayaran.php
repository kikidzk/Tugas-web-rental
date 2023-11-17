<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card" style="margin: top 150px">
                <div class="card-header alert alert-success">
                    Invoice Pembayaran Anda
                </div>
                <div class="card-body">
                    <table class="table">
                        <?php foreach($transaksi as $tr):?>
                        <tr>
                            <th>Merk Mobil</th>
                            <td>:</td>
                            <td><?php echo $tr->merk?></td>
                        </tr>
                        <tr>
                            <th>Tanggal Rental</th>
                            <td>:</td>
                            <td><?php echo $tr->tanggal_rental?></td>
                        </tr>
                        <tr>
                            <th>Tanggal Kembali</th>
                            <td>:</td>
                            <td><?php echo $tr->tanggal_kembali?></td>
                        </tr>
                        <tr>
                            <th>Biaya Sewa/Hari</th>
                            <td>:</td>
                            <td>Rp.<?php echo number_format($tr->harga,0,',','.') ?></td>
                        </tr>
                        <tr>
                            <th>Biaya Sewa/Hari</th>
                            <td>:</td>
                            <td><?php echo number_format($tr->harga,0,',','.') ?></td>
                        </tr>
                        <tr>
                            <?php
                                $x= strtotime($tr->tanggal_kembali);
                                $y= strtotime($tr->tanggal_rental);
                                $jmlhari= abs(($x-$y)/(60*60*24));
                            ?>
                            <th>Jumlah Hari Sewa</th>
                            <td>:</td>
                            <td><?php echo $jmlhari ?>Hari</td>
                        </tr>
                        <tr class="text-succes">
                            <th>Jumlah Pembayaran</th>
                            <td>:</td>
                            <td><button class="btn btn-sm btn-success">Rp.
                                    <?php echo number_format($tr->harga*$jmlhari,0,',','.')?></button></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="margin-top:10%">
                <div class="card-header alert alert-primary">
                    Informasi Pembayaran
                </div>

                <div class="card-body">
                    <p class="text-success mb-3 ">Silahkan Melakukan Pembayaran Melalui Nomor Rekening Dibawah ini:</p>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Bank BCA 123456789876543</li>
                        <li class="list-group-item">Bank Mandiri 12321432167887</li>
                        <li class="list-group-item">Bank BNI 098765432112345</li>
                    </ul>
                    <br>
                    <ul>Jika Sudah Melakukan Pembayaran Harap Hubungi Nomor Berikut (08123456789)</ul>
                    <ul> <a href="https://wa.me/62816832177">Nomor Whatsapp Admin"</a></ul>
                    <?php
                    if($tr->status_pembayaran == '0'){ ?>
                    <button style="width:100%" type="button" class="btn btn-sm btn-warning"><i
                            class="fas fa-clock-o">Menunggu Konfirmasi</i>
                    </button>
                    <?php
                    }elseif($tr->status_pembayaran == '1'){ ?>
                    <button style="width:100%" type="button" class="btn btn-sm btn-success"><i
                            class="fas fa-clock-o">Pembayaran Selesai</i>
                    </button>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>