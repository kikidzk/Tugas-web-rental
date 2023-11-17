<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                                </div>

                                <span class="m-2"><?= $this->session->set_flashdata('pesan')?></span>

                                <form method="POST" action="<?= base_url('auth/login');?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="username" name="username"
                                            placeholder="Masukan Username">
                                        <?= form_error('username','<div class="text-small text-danger pl-3">', '</div>');?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="Password">
                                        <?= form_error('password','<div class="text-small text-danger pl-3">', '</div>');?>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('register')?>">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>