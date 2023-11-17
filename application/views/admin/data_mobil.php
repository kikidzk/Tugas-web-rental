<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Mobil</h1>
    </div>
    <a href="<?= base_url('admin/data_mobil/tambah_mobil')?>" class="btn btn-primary mb-3">Tambah Data</a>

    <?= $this->session->flashdata('pesan')?>

    <table class="table table-hover table-striped table-borderd">
        <thead>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Merk</th>
                <th>No. Plat</th>
                <th>Status</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
                foreach($mobil as $mb) :
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td>
                    <img width="60px" src="<?= base_url().'assets/upload/'.$mb->gambar?>" alt="">
                </td>
                <td><?= $mb->merk?></td>
                <td><?= $mb->no_plat?></td>
                <td>
                    <?php 
                if ($mb->status == "0"){
                    echo "<span class ='badge badge-danger'>Tidak Tersedia</span>";
                }else {
                    echo "<span class ='badge badge-primary'>Tersedia</span>";
                }
                ?>
                </td>
                <td><?= $mb->harga?></td>
                <td>
                    <a href="<?= base_url('admin/data_mobil/detail_mobil/').$mb->id_mobil?>"
                        class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                    <a href="<?= base_url('admin/data_mobil/delete_mobil/').$mb->id_mobil?>"
                        class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    <a href="<?= base_url('admin/data_mobil/update_mobil/').$mb->id_mobil?>"
                        class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                </td>
            </tr>
            <?php
                endforeach;
            ?>
        </tbody>
    </table>
</div>