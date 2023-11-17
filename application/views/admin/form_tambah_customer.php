<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-4 text-gray-800">Form Input Data Customer</h1>
    </div>
    <div class="card">
        <div class="card-body">
            <form method="POST" action="<?=base_url('admin/data_customer/tambah_customer_aksi')?>">

                <div class="row">
                    <div class="col-md-6">
                        <div class=" form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control">
                            <?= form_error('nama','<span class="text-small text-danger">','</span>') ?>
                        </div>

                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control">
                            <?= form_error('username','<span class="text-small text-danger">','</span>')?>
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control">
                            <?= form_error('alamat','<span class="text-small text-danger">','</span>')?>
                        </div>

                        <div class="form-group">
                            <label>Gender</label>
                            <select class="form-control" name="gender">
                                <option value="">--Pilih Gender--</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                            <?= form_error('gender','<span class="text-small text-danger">','</span>')?>
                        </div>

                        <div class="form-group">
                            <label>No. Telepon</label>
                            <input type="text" name="no_telepon" class="form-control">
                            <?= form_error('no_telepon','<span class="text-small text-danger">','</span>')?>
                        </div>

                        <div class="form-group">
                            <label>No. KTP</label>
                            <input type="text" name="no_ktp" class="form-control">
                            <?= form_error('no_ktp','<span class="text-small text-danger">','</span>')?>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                            <?= form_error('password','<span class="text-small text-danger">','</span>')?>
                        </div>

                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                        <button type="reset" class="btn btn-sm btn-danger">Reset</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>