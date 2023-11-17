<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Customer</h1>
    </div>
    <a href="<?= base_url('admin/data_customer/tambah_customer')?>" class="btn btn-primary mb-3">Tambah Customer </a>

    <?= $this->session->flashdata('pesan')?>

    <table class="table table-hover table-striped table-borderd">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Alamat</th>
                <th>Gender</th>
                <th>No. Telepon</th>
                <th>No. KTP</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($customer as  $cs) :?>
            <tr>
                <td><?php echo $cs->id_customer ?></td>
                <td><?php echo $cs->nama ?></td>
                <td><?php echo $cs->username ?></td>
                <td><?php echo $cs->alamat ?></td>
                <td><?php echo $cs->gender ?></td>
                <td><?php echo $cs->no_telepon ?></td>
                <td><?php echo $cs->no_ktp ?></td>
                <td><?php echo $cs->password ?></td>
                <td>
                    <a href="<?= base_url('admin/data_customer/delete_customer/').$cs->id_customer?>"
                        class="btn btn-sm btn-danger"><i class="fas fa-trash "></i></a>
                    <a href="<?= base_url('admin/data_customer/update_customer/').$cs->id_customer?>"
                        class="btn btn-sm btn-primary"><i class="fas fa-edit "></i></a>
                </td>

            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>