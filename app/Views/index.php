<?= $this->extend('frontend/main'); ?>
<?= $this->section('content'); ?>

<!-- Awal Section Pengenalan -->
<section class="bg-half-80 d-table w-100" id="tentang">
    <div class="container">
        <div class="row mt-5 align-items-center position-relative" style="z-index: 1;">
            <div class="col-lg-6">
                <div class="title-heading text-center text-lg-start">
                    <h5 class="text-dark">Selamat datang di Website</h5>
                    <h1 class="heading fw-bold mt-2 mb-3">Kursus Mengemudi <br><span class="text-primary">LPK-LKP
                            INDERA</span> </h1>
                    <p class="para-desc text-muted">Bagi anda yang ingin belajar mengemudi mobil, kami telah mempunyai
                        pengalaman lebih dari 40 tahun untuk sekolah belajar mengemudi.</p>
                    <div class="mt-3">
                        <a href="https://wa.me/6282137136565" class="btn btn-primary me-2 mt-2"><i
                                class="fab fa-whatsapp"></i> Whatsapp Kami</a>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdfFr8m_DMcfKGSVD3Nj3ZAN09O02AEEKW-j7lD55P9WlvJXw/viewform"
                            class="btn btn-soft-primary mt-2">Daftar Online <i class="fad fa-paper-plane"></i></a>
                    </div>
                </div>
            </div>
            <!-- Akhir Col Judul Pengenalan -->
            <div class="col-lg-6 mt-4 pt-2 mt-lg-0 pt-lg-0">
                <div class="card border-0 shadow rounded ms-lg-4 overflow-hidden">
                    <div class="d-flex p-2 bg-light justify-content-between align-items-center">
                        <div>
                            <a href="javascript:void(0)" class="text-danger"><i class="mdi mdi-circle"></i></a>
                            <a href="javascript:void(0)" class="text-warning"><i class="mdi mdi-circle"></i></a>
                            <a href="javascript:void(0)" class="text-success"><i class="mdi mdi-circle"></i></a>
                        </div>
                        <small class="fw-bold"><i class="mdi mdi-circle-medium text-primary"></i> LPK-LKP INDERA</small>
                    </div>
                    <div class="bg-light px-2 position-relative">
                        <video controls class="w-100 rounded" preload="none"
                            poster="/assets/frontend/images/video/thumbnail.jpg">
                            <source src="/assets/frontend/images/video/profil.mp4" type="video/mp4">
                        </video>
                        <div class="position-absolute top-0 start-0">
                            <div class="mt-2 ms-3">
                                <span class="badge bg-danger">Youtube</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Akhir Col Konten Pengenalan -->
        </div>
        <!-- Akhir Row Pengenalan -->
    </div>
</section>
<!-- Akhir Section Pengenalan -->

<!-- Awal Section Counter -->
<section class="section-three bg-primary" id="counter">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-6 mt-4 pt-2">
                <div class="counter-box text-center text-white">
                    <h1><i class="fas fa-hourglass-start "></i></h1>
                    <h2 class="mb-0 mt-4 "><span class="counter-value" data-target="47">1</span>+</h2>
                    <h6 class="counter-head text-light">Tahun Pengalaman</h6>
                </div>
            </div>
            <!-- Akhir Col Tahun Pengalaman -->

            <div class="col-md-3 col-6 mt-4 pt-2">
                <div class="counter-box text-center text-white">
                    <h1><i class="far fa-user "></i></h1>
                    <h2 class="mb-0 mt-4"><span class="counter-value" data-target="600">780</span>+</h2>
                    <h6 class="counter-head text-light">Siswa per tahun</h6>
                </div>
            </div>
            <!-- Akhir Col Siswa per tahun -->

            <div class="col-md-3 col-6 mt-4 pt-2">
                <div class="counter-box text-center text-white">
                    <h1><i class="fas fa-users"></i></h1>
                    <h2 class="mb-0 mt-4"><span class="counter-value" data-target="20">1</span>+</h2>
                    <h6 class="counter-head text-light">Instruktur</h6>
                </div>
            </div>
            <!-- Akhir Col Instruktur -->

            <div class="col-md-3 col-6 mt-4 pt-2">
                <div class="counter-box text-center text-white">
                    <h1><i class="fad fa-trophy"></i></h1>
                    <h2 class="mb-0 mt-4"><span class="counter-value" data-target="50">1</span>+</h2>
                    <h6 class="counter-head text-light">Penghargaan</h6>
                </div>
            </div>
            <!-- Akhir Col Penghargaan -->
        </div>
        <!-- Akhir Row -->
    </div>
</section>
<!-- Akhir Section Counter -->

<!-- Awal Section Pelayanan -->
<section class="section" id="pelayanan">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="600">Pelayanan Kami</h4>
                    <p class="text-muted para-desc mx-auto mb-0" data-aos="fade-up" data-aos-duration="1000">Alasan
                        mengapa anda harus memilih <span class="text-primary fw-bold">kami</span>, sebagai tempat
                        pelatihan?</p>
                </div>
            </div>
            <!-- Akhir Col Judul Pelayanan -->
        </div>
        <!-- Akhir Row Judul Pelayanan -->

        <div class="row">
            <div class="col-md-4 col-12 mt-5">
                <div class="features text-center">
                    <div class="image position-relative d-inline-block">
                        <i class="far fa-shield-check h2 text-primary"></i>
                    </div>

                    <div class="content mt-4">
                        <h5>Terpercaya</h5>
                        <p class="text-muted mb-0">Hingga saat ini LPK-LKP INDERA sudah mengajarkan ribuan siswa kursus
                            diseluruh Magelang, menjadikan kami sebagai salah satu kursus mengemudi terbaik di Magelang.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Akhir Col Terpercaya -->

            <div class="col-md-4 col-12 mt-5">
                <div class="features text-center">
                    <div class="image position-relative d-inline-block">
                        <i class="far fa-wallet h2 text-primary"></i>
                    </div>
                    <div class="content mt-4">
                        <h5>Harga Relatif Murah</h5>
                        <p class="text-muted mb-0">Mahir menyetir dengan biaya yang terjangkau dan murah adalah tujuan
                            kami dalam memberikan pelayanan terbaik serta fasilitas terbaik dengan biaya termurah.</p>
                    </div>
                </div>
            </div>
            <!-- Akhir Col Harga Relatif Murah -->

            <div class="col-md-4 col-12 mt-5">
                <div class="features text-center">
                    <div class="image position-relative d-inline-block">
                        <i class="far fa-smile-beam h2 text-primary"></i>
                    </div>

                    <div class="content mt-4">
                        <h5>Pelayanan Terbaik</h5>
                        <p class="text-muted mb-0">Staff dan Instruktur kami merupakan yang beRp engalaman dibidangnya
                            sehingga selalu bekerja dengan sepenuh hati untuk bisa mengajarkan anda mahir mengemudi.</p>
                    </div>
                </div>
            </div>
            <!-- Akhir Col Pelayanan Terbaik -->

            <div class="col-md-4 col-12 mt-5">
                <div class="features text-center">
                    <div class="image position-relative d-inline-block">
                        <i class="far fa-calendar-alt h2 text-primary"></i>
                    </div>

                    <div class="content mt-4">
                        <h5>Jadwal Belajar Flexible</h5>
                        <p class="text-muted mb-0">Jangan khawatir apabila anda mempunyai jadwal yang padat, disini anda
                            bisa menentukan hari dan jam Kursus anda sesuka hati.</p>
                    </div>
                </div>
            </div>
            <!-- Akhir Col Jadwal Belajar Flexible -->

            <div class="col-md-4 col-12 mt-5">
                <div class="features text-center">
                    <div class="image position-relative d-inline-block">
                        <i class="far fa-wrench h2 text-primary"></i>
                    </div>

                    <div class="content mt-4">
                        <h5>Maintenance Rutin</h5>
                        <p class="text-muted mb-0">Kami selalu menjaga kondisi mobil secara berkala dengan baik agar
                            tidak mengurangi kenyaman anda dalam belajar.</p>
                    </div>
                </div>
            </div>
            <!-- Akhir Col Maintenance Rutin -->

            <div class="col-md-4 col-12 mt-5">
                <div class="features text-center">
                    <div class="image position-relative d-inline-block">
                        <i class="far fa-car h2 text-primary"></i>
                    </div>

                    <div class="content mt-4">
                        <h5>Terima Antar-Jemput</h5>
                        <p class="text-muted mb-0">Tidak perlu repot-repot datang ke kantor kami karena anda akan
                            dijemput di tempat anda dan diantar kembali setelah selesai kursus.</p>
                    </div>
                </div>
            </div>
            <!-- Akhir Col Terima Antar-Jemput -->

        </div>
        <!-- Akhir Row Konten Pelayanan -->
    </div>
</section>
<!-- Akhir Section Pelayanan -->


<!-- Start -->
<div class="container-fluid px-0">
    <div class="py-5 bg-primary bg-gradient">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="section-title">
                        <div class="d-flex">
                            <i class="fal fa-badge-percent display-4 text-white title-dark"></i>
                            <div class="flex-1 ms-md-4 ms-3">
                                <h4 class="fw-bold text-light title-dark mb-1">Dapatkan Promo Menarik Lainnya.</h4>
                                <p class="text-white-50 mb-0">Hubungi kami sekarang juga.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Col-->

                <div class="col-md-5 mt-4 mt-sm-0">
                    <div class="text-md-end ms-5 ms-sm-0">
                        <a href="https://wa.me/6282137136565" class="btn btn-light me-2 me-lg-2 me-md-0 my-2"><i
                                class="fab fa-whatsapp"></i>
                            Hubungi Kami</a>
                    </div>
                </div>
                <!-- End Col-->
            </div>
            <!-- End Row-->
        </div>
        <!--end container-->
    </div>
    <!--end div-->
</div>
<!--end container-->

<!-- Awal Section Testimoni -->
<section class="section bg-light" id="testimoni">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="600">Kata Mereka</h4>
                    <p class="text-muted para-desc mb-0 mx-auto" data-aos="fade-up" data-aos-duration="1000">Berikut
                        adalah pendapat mereka tentang <span class="text-primary fw-bold">kami</span>.</p>
                </div>
            </div>
            <!-- Akhir Col -->
        </div>
        <!-- Akhir Row -->

        <div class="row justify-content-center">
            <div class="col-lg-12 mt-4">
                <div class="tiny-three-item">
                    <div class="tiny-slide">
                        <div class="d-flex client-testi m-2" data-aos="fade-up" data-aos-duration="600">
                            <img src="/assets/frontend/images/testimoni/01.jpg"
                                class="avatar avatar-small client-image rounded shadow" alt="">
                            <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" Kursus stir mobil disini sangat recommended sekali.
                                    Instrukturnya sangat profesional dalam mengajar. "</p>
                                <h6 class="text-primary">- Rizka Dianti <small class="text-muted">Polwan</small></h6>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="d-flex client-testi m-2" data-aos="fade-up" data-aos-duration="1000">
                            <img src="/assets/frontend/images/testimoni/02.jpg"
                                class="avatar avatar-small client-image rounded shadow" alt="">
                            <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" Kursus Mengemudi dengan legalitas dan perijinan lengkap.
                                    Instruktur sabar dan kompeten serta bersertifikat. Kursus yang berijin dan
                                    tersertifikasi. "</p>
                                <h6 class="text-primary">- Ana Dewi <small class="text-muted">Polwan</small></h6>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="d-flex client-testi m-2" data-aos="fade-up" data-aos-duration="1800">
                            <img src="/assets/frontend/images/testimoni/03.jpg"
                                class="avatar avatar-small client-image rounded shadow" alt="">
                            <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" Pelayanan sangat memuaskan, instruktur juga sabar dalam
                                    mendampingi,rekomended buat yang mau belajar. "</p>
                                <h6 class="text-primary">- Eni Rina <small class="text-muted">Ibu Rumah Tangga</small>
                                </h6>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="d-flex client-testi m-2" data-aos="fade-up" data-aos-duration="2200">
                            <img src="/assets/frontend/images/testimoni/04.jpg"
                                class="avatar avatar-small client-image rounded shadow" alt="">
                            <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" Lembaga sudah terakreditasi, bikin sim juga dibantu. "</p>
                                <h6 class="text-primary">- Rere Damayanti <small class="text-muted">Mahasiswi</small>
                                </h6>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="d-flex client-testi m-2" data-aos="fade-up" data-aos-duration="2400">
                            <img src="/assets/frontend/images/testimoni/05.jpg"
                                class="avatar avatar-small client-image rounded shadow" alt="">
                            <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" Pelayanan sangat memuaskan, instruktur juga sabar dalam
                                    mendampingi,rekomended buat yang mau belajar. "</p>
                                <h6 class="text-primary">- Indah Wati <small class="text-muted">Ibu Rumah Tangga</small>
                                </h6>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="d-flex client-testi m-2" data-aos="fade-up" data-aos-duration="2800">
                            <img src="/assets/frontend/images/testimoni/06.jpg"
                                class="avatar avatar-small client-image rounded shadow" alt="">
                            <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" Kursus stir mobil terdepan dalam inovasi dan layanan.
                                    Pioneer sebagai lembaga pelatihan dan Alhamdulillah sudah terakreditasi. "</p>
                                <h6 class="text-primary">- Gabriella T <small class="text-muted">Ibu Rumah
                                        Tangga</small></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Akhir Col -->

        </div>
        <!-- Akhir Row -->
    </div>
    <!-- Akhir Container -->
</section>
<!-- Akhir Section Testimoni-->

<!-- Awal Section Galeri -->
<section class="section" id="galeri">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="600">Galeri Kami</h4>
                    <p class="text-muted para-desc mb-0 mx-auto" data-aos="fade-up" data-aos-duration="1000">Berikut
                        adalah Galeri yang <span class="text-primary fw-bold">kami</span> tunjukkan kepada anda sebagai
                        bukti pelayanan.</p>
                </div>
            </div>
            <!-- Akhir Col -->
        </div>
        <!-- Akhir Row -->


        <div class="row justify-content-center">
            <div class="col-12 mb-4 filters-group-wrap">
                <div class="filters-group">
                    <ul class="container-filter list-inline mb-0 filter-options text-center">
                        <li class="list-inline-item categories-name border text-dark rounded active" data-group="all">
                            Semua</li>
                        <li class="list-inline-item categories-name border text-dark rounded" data-group="sarana">Sarana
                        </li>
                        <li class="list-inline-item categories-name border text-dark rounded" data-group="testimoni">
                            Testimoni</li>
                        <li class="list-inline-item categories-name border text-dark rounded" data-group="pelatihan">
                            Pelatihan</li>
                        <li class="list-inline-item categories-name border text-dark rounded" data-group="acara">Acara
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Col-->
        </div>
        <!-- End Row-->

        <div id="grid" class="row">
            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["sarana"]'>
                <div class="card border-0 work-container work-modern position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <img src="/assets/frontend/images/galeri/sarana-02.jpg" class="img-fluid" alt="work-image">
                        <div class="overlay-work bg-dark"></div>
                        <div class="icons text-center">
                            <a href="/assets/frontend/images/galeri/sarana-02.jpg"
                                class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i
                                    data-feather="camera" class="fea icon-sm image-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Col-->

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["testimoni"]'>
                <div class="card border-0 work-container work-modern position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <img src="/assets/frontend/images/galeri/testi-1.png" class="img-fluid" alt="work-image">
                        <div class="overlay-work bg-dark"></div>
                        <div class="icons text-center">
                            <a href="/assets/frontend/images/galeri/testi-1.png"
                                class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i
                                    data-feather="camera" class="fea icon-sm image-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Col-->

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["pelatihan"]'>
                <div class="card border-0 work-container work-modern position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <img src="/assets/frontend/images/galeri/pelatihan-1.png" class="img-fluid" alt="work-image">
                        <div class="overlay-work bg-dark"></div>
                        <div class="icons text-center">
                            <a href="/assets/frontend/images/galeri/pelatihan-1.png"" class=" text-primary work-icon
                                bg-white d-inline-block rounded-pill lightbox"><i data-feather="camera"
                                    class="fea icon-sm image-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Col-->

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["acara"]'>
                <div class="card border-0 work-container work-modern position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <img src="/assets/frontend/images/galeri/acara-03.jpg" class="img-fluid" alt="work-image">
                        <div class="overlay-work bg-dark"></div>
                        <div class="icons text-center">
                            <a href="/assets/frontend/images/galeri/acara-03.jpg"
                                class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i
                                    data-feather="camera" class="fea icon-sm image-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Col-->

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["sarana"]'>
                <div class="card border-0 work-container work-modern position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <img src="/assets/frontend/images/galeri/sarana-01.jpg" class="img-fluid" alt="work-image">
                        <div class="overlay-work bg-dark"></div>
                        <div class="icons text-center">
                            <a href="/assets/frontend/images/galeri/sarana-01.jpg"
                                class=" text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i
                                    data-feather="camera" class="fea icon-sm image-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Col-->

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["sarana"]'>
                <div class="card border-0 work-container work-modern position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <img src="/assets/frontend/images/galeri/sarana-03.jpg" class="img-fluid" alt="work-image">
                        <div class="overlay-work bg-dark"></div>
                        <div class="icons text-center">
                            <a href="/assets/frontend/images/galeri/sarana-03.jpg"
                                class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i
                                    data-feather="camera" class="fea icon-sm image-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Col-->

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["testimoni"]'>
                <div class="card border-0 work-container work-modern position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <img src="/assets/frontend/images/galeri/testi-10.png" class="img-fluid" alt="work-image">
                        <div class="overlay-work bg-dark"></div>
                        <div class="icons text-center">
                            <a href="/assets/frontend/images/galeri/testi-10.png"
                                class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i
                                    data-feather="camera" class="fea icon-sm image-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Col-->

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["testimoni"]'>
                <div class="card border-0 work-container work-modern position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <img src="/assets/frontend/images/galeri/testi-7.png" class="img-fluid" alt="work-image">
                        <div class="overlay-work bg-dark"></div>
                        <div class="icons text-center">
                            <a href="/assets/frontend/images/galeri/testi-7.png"
                                class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i
                                    data-feather="camera" class="fea icon-sm image-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["acara"]'>
                <div class="card border-0 work-container work-modern position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <img src="/assets/frontend/images/galeri/acara-01.jpg" class="img-fluid" alt="work-image">
                        <div class="overlay-work bg-dark"></div>
                        <div class="icons text-center">
                            <a href="/assets/frontend/images/galeri/acara-01.jpg"
                                class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i
                                    data-feather="camera" class="fea icon-sm image-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Col-->

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["pelatihan"]'>
                <div class="card border-0 work-container work-modern position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <img src="/assets/frontend/images/galeri/pelatihan-4.png" class="img-fluid" alt="work-image">
                        <div class="overlay-work bg-dark"></div>
                        <div class="icons text-center">
                            <a href="/assets/frontend/images/galeri/pelatihan-4.png"
                                class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i
                                    data-feather="camera" class="fea icon-sm image-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Col-->

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["pelatihan"]'>
                <div class="card border-0 work-container work-modern position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <img src="/assets/frontend/images/galeri/pelatihan-5.png" class="img-fluid" alt="work-image">
                        <div class="overlay-work bg-dark"></div>
                        <div class="icons text-center">
                            <a href="/assets/frontend/images/galeri/pelatihan-5.png"
                                class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i
                                    data-feather="camera" class="fea icon-sm image-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Col-->

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["acara"]'>
                <div class="card border-0 work-container work-modern position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <img src="/assets/frontend/images/galeri/acara-02.jpg" class="img-fluid" alt="work-image">
                        <div class="overlay-work bg-dark"></div>
                        <div class="icons text-center">
                            <a href="/assets/frontend/images/galeri/acara-02.jpg"
                                class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i
                                    data-feather="camera" class="fea icon-sm image-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Col-->
        </div>
        <!-- End Row-->

        <!-- Awal Col Tombol -->
        <div class="col-lg-12 text-center col-md-4 mt-4 pt-2">
            <a href="javascript:void(0)" class="btn btn-primary">Galeri Lainnya <i data-feather="arrow-right"
                    class="fea icon-sm"></i></a>
        </div>
        <!-- Akhir Col Tombol -->
    </div>
    <!--end container-->
</section>
<!-- Akhir Section Galeri -->

<!-- Awal Section Pertanyaan -->
<section class="section" id="pertanyaan">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="600">Tanyakan Kami Apapun</h4>
                    <p class="text-muted para-desc mb-0 mx-auto" data-aos="fade-up" data-aos-duration="1000">Berikut
                        adalah pertanyaan yang sering diajukan kepada<span class="text-primary fw-bold"> kami</span>.
                    </p>
                </div>
            </div>
        </div>
        <!-- Awal Row Pertanyaan -->
        <div class="row">
            <div class="col-md-6 col-12 mt-4 pt-2">
                <div class="d-flex">
                    <i data-feather="help-circle" class="fea icon-ex-md text-primary me-2 mt-1"></i>
                    <div class="flex-1">
                        <h5 class="mt-0">Apakah Biaya pelatihan dapat diangsur?</h5>
                        <p class="answer text-muted mb-0">Sangat Bisa! biaya latihan bisa diangsur 2x, yaitu pada saat
                            mendaftar dan latihan ke 3.</p>
                    </div>
                </div>
            </div>
            <!-- Akhir Col -->

            <div class="col-md-6 col-12 mt-4 pt-2">
                <div class="d-flex">
                    <i data-feather="help-circle" class="fea icon-ex-md text-primary me-2 mt-1"></i>
                    <div class="flex-1">
                        <h5 class="mt-0">Apakah bisa memilih jadwal sendiri?</h5>
                        <p class="answer text-muted mb-0">Tentu saja bisa. Jadwal latihan ditentukan oleh siswa sendiri
                            disesuaikan dengan paket yang diambil dan jadwal yang sudah ada.</p>
                    </div>
                </div>
            </div>
            <!-- End Col-->

            <div class="col-md-6 col-12 mt-4 pt-2">
                <div class="d-flex">
                    <i data-feather="help-circle" class="fea icon-ex-md text-primary me-2 mt-1"></i>
                    <div class="flex-1">
                        <h5 class="mt-0">Apakah siswa latihan akan digabung ?</h5>
                        <p class="answer text-muted mb-0">Tidak, Siswa latihan hanya ada 1 di dalam mobil bersama
                            instruktur, Jadi 1 Siswa = 1 Mobil.</p>
                    </div>
                </div>
            </div>
            <!-- End Col-->

            <div class="col-md-6 col-12 mt-4 pt-2">
                <div class="d-flex">
                    <i data-feather="help-circle" class="fea icon-ex-md text-primary me-2 mt-1"></i>
                    <div class="flex-1">
                        <h5 class="mt-0">Apakah boleh mengajak seseorang pada saat latihan?</h5>
                        <p class="answer text-muted mb-0">Tidak diperkenankan karena dapat mengganggu konsentrasi siswa
                            maupun instruktur saat mengajar.</p>
                    </div>
                </div>
            </div>
            <!-- End Col-->
        </div>
        <!-- Akhir Row Pertanyaan -->

        <!-- Awal Col Tombol -->
        <div class="col-lg-12 text-center col-md-4 mt-4 pt-2">
            <a href="javascript:void(0)" class="btn btn-primary">Pertanyaan Lainnya <i data-feather="arrow-right"
                    class="fea icon-sm"></i></a>
        </div>
        <!-- Akhir Col Tombol -->
    </div>
    <!-- Akhir Container Pertanyaan -->
</section>
<!-- Akhir Section Pertanyaan-->

<!-- Start Section Contact -->
<section class="section pb-0" id="contact">
    <!-- Start Container Contact -->
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="600">Kontak Kami</h4>
                    <p class="text-muted para-desc mx-auto mb-0" data-aos="fade-up" data-aos-duration="1000">Beritahu
                        <span class="text-primary fw-bold">kami</span> jika Anda memiliki pertanyaan, ingin memberi
                        komentar, atau ingin informasi lebih lanjut tentang LPK-LKP INDERA.
                    </p>
                </div>
            </div>
        </div>
        <!-- End Row Judul Section Contact -->

        <!-- Start Row Form Section Contact -->
        <div class="row align-items-center">
            <!-- Start Kirim Pesan -->
            <div class="col-lg-5 col-md-6 mt-4 pt-2 order-2 order-md-1">
                <div class="card rounded shadow border-0" data-aos="fade-up" data-aos-duration="600">
                    <div class="card-body">
                        <!-- Start Contact-Form -->
                        <div class="custom-form bg-white">
                            <div id="message"></div>
                            <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                                <!-- Start Row Kirim Pesan -->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Masukan Nama Anda <span
                                                    class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input name="name" id="name" type="text" class="form-control ps-5"
                                                    placeholder="Nama Anda :">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col Form Nama -->
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Masukan Email Anda <span
                                                    class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input name="email" id="email2" type="email" class="form-control ps-5"
                                                    placeholder="Email Anda :">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col Form Email -->
                                    <!-- Start Col Form Komentar -->
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Masukan Komentar</label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                <textarea name="comments" id="comments" rows="4"
                                                    class="form-control ps-5" placeholder="Komentar Anda :"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col Form Komentar -->
                                </div>
                                <!-- End Row Kirim Pesan -->
                                <!-- Start Row Tombol Kirim -->
                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <div class="d-grid">
                                            <input type="submit" id="submit" name="send" class="btn btn-primary"
                                                value="Kirim Pesan">
                                            <div id="simple-msg"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Row Tombol Kirim -->
                            </form>
                        </div>
                        <!-- End Row Contact-Form -->
                    </div>
                </div>
            </div>
            <!-- End Kirim Pesan -->

            <!-- Start Contact Detail -->
            <div class="col-lg-7 col-md-6 mt-4 pt-2 order-1 order-md-2">
                <div class="title-heading ms-lg-4">
                    <h4 class="mb-4" data-aos="fade-up" data-aos-duration="600">Kontak Detail</h4>
                    <p class="text-muted" data-aos="fade-up" data-aos-duration="1000">Anda dapat juga dapat menghubungi
                        <span class="text-primary fw-bold">kami</span> di Alamat berikut :
                    </p>
                    <!-- Start Email -->
                    <div class="card border-0 bg-transparent">
                        <div class="card-body p-0">
                            <div class="contact-detail d-flex align-items-center mt-3" data-aos="fade-up"
                                data-aos-duration="1200">
                                <div class="icon">
                                    <i data-feather="mail" class="fea icon-m-md text-dark me-3"></i>
                                </div>
                                <div class="content overflow-hidden d-block">
                                    <h6 class="fw-bold mb-0">Email</h6>
                                    <a href="mailto:kursusindera@gmail.com"
                                        class="text-primary">kursusindera@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Email -->
                    <!-- Start Phone -->
                    <div class="card border-0 bg-transparent">
                        <div class="card-body p-0">
                            <div class="contact-detail d-flex align-items-center mt-3" data-aos="fade-up"
                                data-aos-duration="1000">
                                <div class="icon">
                                    <i data-feather="phone" class="fea icon-m-md text-dark me-3"></i>
                                </div>
                                <div class="content overflow-hidden d-block">
                                    <h6 class="fw-bold mb-0">Phone</h6>
                                    <a href="tel:+6282137136565" class="text-primary">0821-3713-6565</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Phone -->
                    <!-- Start Maps -->
                    <div class="card border-0 bg-transparent">
                        <div class="card-body p-0">
                            <div class="contact-detail d-flex align-items-center mt-3" data-aos="fade-up"
                                data-aos-duration="1600">
                                <div class="icon">
                                    <i data-feather="map-pin" class="fea icon-m-md text-dark me-3"></i>
                                </div>
                                <div class="content overflow-hidden d-block">
                                    <h6 class="fw-bold mb-0">Location</h6>
                                    <a href="https://goo.gl/maps/CoN8xjWPM3kHMrxF8" class="text-primary">Lihat di Google
                                        Maps</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Maps -->
                </div>
            </div>
            <!-- End Contact Detail -->
        </div>
    </div>
    <!-- End Container Contact -->

    <!-- Start Google Maps -->
    <div class="container-fluid mt-100 mt-60">
        <div class="row">
            <div class="col-12 p-0">
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63279.5278336847!2d110.24494317910155!3d-7.5781910999999935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a8bb460dff8fb%3A0xfd5d996fd977499e!2sLPK%2FLKP%20INDERA!5e0!3m2!1sid!2sid!4v1619558280465!5m2!1sid!2sid"
                        style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- End Google Maps -->
</section>
<!-- End Section Contact -->

<?= $this->endSection(); ?>