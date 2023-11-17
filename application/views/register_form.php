<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form method="POST" action="<?= base_url('register')?>">
                            <div class=" form-group">
                                <input type="text" class="form-control" id=" nama" name="nama" placeholder="Nama">
                                <?= form_error('nama','<div class="text-small text-danger pl-3">', '</div>');?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="username" name="username"
                                    placeholder="Username">
                                <?= form_error('username','<div class="text-small text-danger pl-3">', '</div>');?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                                <?= form_error('alamat','<div class="text-small text-danger pl-3">', '</div>');?>
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="gender" name="gender" placeholder="Gender">
                                    <option value="">--Pilih Gender--</option>
                                    <option>Laki - laki</option>
                                    <option>Perempuan</option>
                                </select>
                                <?= form_error('gender','<div class="text-small text-danger pl-3">', '</div>');?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="no_telepon" name="no_telepon"
                                    placeholder="No. Telepon">
                                <?= form_error('no_telepon','<div class="text-small text-danger pl-3">', '</div>');?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="no_ktp" name="no_ktp" placeholder="No. KTP">
                                <?= form_error('no_ktp','<div class="text-small text-danger pl-3">', '</div>');?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password">
                                <?= form_error('password1','<div class="text-small text-danger pl-3">', '</div>');?>
                            </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        Register Account
                    </button>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="<?= base_url('auth/login')?>">Already have an account? Login!</a>
                    </div>
                    <hr>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>