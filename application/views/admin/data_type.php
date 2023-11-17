<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Type Mobil</h1>
    </div>

    <a href="<?= base_url('admin/data_type/tambah_type')?>" class="btn btn-primary mb-3">Tambah Type</a>

    <?= $this->session->flashdata('pesan')?>

    <table class="table table-hover table-striped table-borderd">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Type</th>
                <th>Nama Type</th>
                <th>Aksi</th>
        </thead>

        <tbody>
            <?php 
            $no =1;
            foreach($type as $tp) : ?>
            <tr>
                <td><?=  $no++ ?></td>
                <td><?= $tp->kode_type?></td>
                <td><?= $tp->nama_type?></td>
                <td>
                    <a class="btn btn-sm btn-primary"
                        href="<?= base_url('admin/data_type/update_type/'.$tp->id_type) ?>">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a class="btn btn-sm btn-danger"
                        href="<?= base_url('admin/data_type/delete_type/'.$tp->id_type) ?>">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>