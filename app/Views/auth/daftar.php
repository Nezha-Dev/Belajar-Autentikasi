<?= $this->extend('auth/main'); ?>
<?= $this->section('content'); ?>
<!-- Start Halaman Daftar -->
<div class="container-fluid p-0">
    <div class="row m-0">
        <div class="col-12 p-0">
            <div class="login-card">
                <div>
                    <div>
                        <a class="logo" href="index.html"><img class="img-fluid"
                                src="/assets/backend/images/logo/logo-login.png" alt="login" />
                        </a>
                    </div>
                    <div class="login-main">
                        <form class="theme-form">
                            <h4>Form Pendaftaran</h4>
                            <p>Mohon isi data di bawah ini dengan benar</p>
                            <div class="form-group">
                                <label class="col-form-label">Nama Lengkap</label>
                                <input class="form-control" type="text" required=""
                                    placeholder="Masukan nama lengkap" />
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Alamat Email</label>
                                <input class="form-control" type="email" required="" placeholder="Masukan email" />
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Password</label>
                                <div class="form-input position-relative">
                                    <input class="form-control" type="password" name="login[password]" required=""
                                        placeholder="*********" />
                                    <div class="show-hide"><span class="show"></span></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label" for="level">Tipe Akun</label>
                                <select class="form-select" id="level" required="">
                                    <option value=" peserta">Peserta</option>
                                    <option value="instruktur">Instruktur</option>
                                    <option value="admin">Admin</option>
                                </select>
                                <div class="invalid-feedback">
                                    Pilih tipe akun terlebih dahulu.
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <div class="checkbox p-0">
                                    <input id="checkbox1" type="checkbox" />
                                    <label class="text-muted" for="checkbox1">Saya menyetujui
                                        <a class="ms-2" href="#">Syarat dan Ketentuan</a>.
                                    </label>
                                </div>
                                <button class="btn btn-primary btn-block w-100" type="submit">
                                    Buat Akun
                                </button>
                            </div>
                            <p class="mt-4 mb-0">
                                Sudah memiliki akun ?<a class="ms-2" href="/auth">Masuk</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>