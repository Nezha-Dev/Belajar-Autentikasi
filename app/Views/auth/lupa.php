<?= $this->extend('auth/main'); ?>
<?= $this->section('content'); ?>
<!-- Start Halaman Daftar -->
<!-- tap on top starts-->
<div class="tap-top"><i data-feather="chevrons-up"></i></div>
<!-- tap on tap ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="login-card">
                    <div>
                        <div>
                            <a class="logo" href="index.html"><img class="img-fluid"
                                    src="/assets/backend/images/logo/logo-login.png" alt="login" />
                            </a>
                        </div>
                        <div class="login-main">
                            <form class="theme-form">
                                <h4>Lupa Password</h4>
                                <div class="form-group">
                                    <label class="form-label ">Masukan alamat email yang valid</label>
                                    <div class="row">
                                        <div class="form-label">
                                            <input class="form-control" type="email" placeholder="alamat@email.com">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-0">
                                    <button class="btn btn-primary btn-block w-100" type="submit">Kirim </button>
                                </div>
                                <p class="mt-4 mb-0 text-center">Sudah ingat kata sandi anda ?<a class="ms-2"
                                        href="/auth">Masuk</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?= $this->endSection(); ?>