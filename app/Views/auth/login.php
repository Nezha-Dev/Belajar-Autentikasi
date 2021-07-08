<?= $this->extend('auth/main'); ?>
<?= $this->section('content'); ?>

<!-- Start Halaman Login -->
<div class="container-fluid p-0">
    <div class="row m-0">
        <div class="col-12 p-0">
            <div class="login-card">
                <div>
                    <div>
                        <a class="logo" href="/"><img class="img-fluid" src="/assets/backend/images/logo/logo-login.png"
                                alt="login"></a>
                    </div>
                    <div class="login-main">
                        <form class="theme-form">
                            <h4>Login</h4>
                            <p>Bagi kamu yang sudah terdaftar, silakan masuk</p>
                            <div class="form-group">
                                <label class="col-form-label">Email</label>
                                <input class="form-control" type="email" required="" placeholder="alamat@email.com">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Password</label>
                                <div class="form-input position-relative">
                                    <input class="form-control" type="password" name="login[password]" required=""
                                        placeholder="*********">
                                    <div class="show-hide"><span class="show"> </span></div>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <div class="checkbox p-0">
                                    <input id="checkbox1" type="checkbox">
                                    <label class="text-muted" for="checkbox1">Ingat saya</label>
                                </div><a class="link" href="/auth/lupa">Lupa password?</a>
                                <div class="text-end mt-3">
                                    <button class="btn btn-primary btn-block w-100" type="submit">Masuk</button>
                                </div>
                            </div>
                            <p class="mt-4 mb-0 text-center">Tidak punya akun?<a class="ms-2" href="/auth/daftar">Buat
                                    Akun</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Halaman Login -->
<?= $this->endSection(); ?>