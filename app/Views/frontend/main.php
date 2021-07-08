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
    <link rel="shortcut icon" href="/assets/frontend/images/favicon.ico" type="image/x-icon">
    <!-- End Favicon -->

    <!-- :::::::::::::: Awal File CSS Disini :::::::::::::: -->

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="/assets/frontend/css/bootstrap.min.css">
    <!-- CSS Tobii -->
    <link rel="stylesheet" href="/assets/frontend/css/tobii.min.css">
    <!-- CSS Material Design Icons -->
    <link rel="stylesheet" href="/assets/frontend/css/materialdesignicons.css">
    <!-- CSS Fontawesome Icons -->
    <link rel="stylesheet" href="/assets/frontend/css/fontawesome.min.css">
    <!-- CSS Unicons Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- CSS AOS -->
    <link rel="stylesheet" href="/assets/frontend/css/aos.css">
    <!-- CSS Slider -->
    <link rel="stylesheet" href="/assets/frontend/css/tiny-slider.css" />
    <!-- CSS Utama -->
    <link rel="stylesheet" href="/assets/frontend/css/style.css">
    <link rel="stylesheet" href="/assets/frontend/css/default.css">

    <!-- :::::::::::::: Akhir File CSS Disini :::::::::::::: -->

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-navlist" data-bs-offset="20">
    <!-- Loader -->
    <!--<div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>-->
    <!-- Loader -->

    <?= $this->include('frontend/header'); ?>
    <?= $this->renderSection('content'); ?>

    <?= $this->include('frontend/footer'); ?>

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-primary back-to-top"><i
            data-feather="arrow-up" class="icons"></i></a>



    <!-- :::::::::::::: Awal File Javascript Disini :::::::::::::: -->

    <!-- Javascript Bootstrap -->
    <script src="/assets/frontend/js/bootstrap.min.js"></script>
    <!-- Javascript Slider -->
    <script src="/assets/frontend/js/tiny-slider.js "></script>
    <!-- Javascrip Tobii -->
    <script src="/assets/frontend/js/tobii.min.js"></script>
    <!-- Javascript Shuffle -->
    <script src="/assets/frontend/js/shuffle.min.js"></script>
    <!-- Javascript AOS -->
    <script src="/assets/frontend/js/aos.js "></script>
    <!-- Javascript Counter -->
    <script src="/assets/frontend/js/counter.init.js"></script>
    <!-- Javascript Fontawesome Icons -->
    <script src="/assets/frontend/js/fontawesome.min.js"></script>
    <!-- Javascript Feather Icons -->
    <script src="/assets/frontend/js/feather.min.js"></script>
    <!-- Javascript Switcher -->
    <script src="/assets/frontend/js/switcher.js"></script>
    <!-- Javascript Plugins -->
    <script src="/assets/frontend/js/plugins.init.js"></script>
    <!-- Javascript Utama -->
    <script src="/assets/frontend/js/app.js"></script>


    <!-- :::::::::::::: Akhir File Javascript Disini :::::::::::::: -->
</body>

</html>