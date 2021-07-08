<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website Resmi LPK/LKP Indera" />
    <meta name="keywords" content="Kursus Mengemudi terbaik di Magelang" />
    <meta name="author" content="Muhammad Rizky Ibrahim" />
    <meta name="email" content="rizkyculture@gmail.com" />
    <meta name="version" content="v1.0" />
    <title><?= $title; ?></title>

    <!-- Start Favicon -->
    <link rel="shortcut icon" href="/assets/backend/images/favicon.ico" type="image/x-icon">
    <!-- End Favicon -->

    <!-- :::::::::::::: Awal File CSS Disini :::::::::::::: -->

    <!-- CSS Fontawesome Icon -->
    <link rel="stylesheet" href="/assets/backend/css/fontawesome.min.css">
    <!-- CSS Icofont -->
    <link rel="stylesheet" href="/assets/backend/css/vendors/icofont.css">
    <!-- CSS Themify Icon -->
    <link rel="stylesheet" href="/assets/backend/css/vendors/themify.css">
    <!-- CSS Flag Icon-->
    <link rel="stylesheet" href="/assets/backend/css/vendors/flag-icon.css">
    <!-- CSS Feather Icon-->
    <link rel="stylesheet" href="/assets/backend/css/vendors/feather-icon.css">
    <!-- CSS Scrollbar -->
    <link rel="stylesheet" href="/assets/backend/css/vendors/scrollbar.css">
    <!-- CSS Bootstrap-->
    <link rel="stylesheet" href="/assets/backend/css/vendors/bootstrap.css">
    <!-- CSS Utama-->
    <link rel="stylesheet" href="/assets/backend/css/style.css">
    <!-- CSS Responsive -->
    <link rel="stylesheet" href="/assets/backend/css/responsive.css">

    <!-- :::::::::::::: Akhir File CSS Disini :::::::::::::: -->
</head>

<body>
    <!-- Start Tombol kembali keatas -->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- End Tombol kembali keatas -->

    <?= $this->renderSection('content'); ?>

    <!-- :::::::::::::: Awal File Javascript Disini :::::::::::::: -->

    <!-- Javascript Jquery Terbaru -->
    <script src="/assets/backend/js/jquery-3.6.0.min.js"></script>
    <!-- Javascript Bootstrap-->
    <script src="/assets/backend/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- Javascript Fontawesome -->
    <script src="/assets/backend/js/fontawesome.min"></script>
    <!-- Javascript Feather Icon -->
    <script src="/assets/backend/js/icons/feather-icon/feather.min.js"></script>
    <script src="/assets/backend/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Javascript Scrollbar -->
    <script src="/assets/backend/js/scrollbar/simplebar.js"></script>
    <script src="/assets/backend/js/scrollbar/custom.js"></script>
    <!-- Javascript Plugins -->
    <script src="/assets/backend/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="/assets/backend/js/sidebar-menu.js"></script>
    <script src="/assets/backend/js/tooltip-init.js"></script>
    <!-- Javascript Konfigurasi -->
    <script src="/assets/backend/js/config.js"></script>
    <!-- Javascript Utama -->
    <script src="/assets/backend/js/script.js"></script>

    <!-- :::::::::::::: Akhir File Javascript Disini :::::::::::::: -->
</body>

</html>