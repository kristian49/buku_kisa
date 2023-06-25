<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url(); ?>/img/kisafavicon.jpg" rel="icon">
    <link href="<?= base_url(); ?>/img/kisa-apple-touch-icon.jpg" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets-home'); ?>/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url('assets-home'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets-home'); ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets-home'); ?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('assets-home'); ?>/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url('assets-home'); ?>/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets-home'); ?>/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: BizLand
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <?= $this->include('home/templates/topbar'); ?>
    <!-- End Top Bar -->

    <!-- Page Home -->
    <?= $this->renderSection('page-home'); ?>
    <!-- End of Page Home -->

    <!-- ======= Footer ======= -->
    <?= $this->include('home/templates/footer'); ?>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="<?= base_url(); ?>/#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets-home'); ?>/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url('assets-home'); ?>/vendor/aos/aos.js"></script>
    <script src="<?= base_url('assets-home'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets-home'); ?>/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url('assets-home'); ?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('assets-home'); ?>/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url('assets-home'); ?>/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="<?= base_url('assets-home'); ?>/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url('assets-admin'); ?>/vendor/tinymce/tinymce.min.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('assets-home'); ?>/js/main.js"></script>
    <script src="<?= base_url('js/disable_right.js') ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('assets-admin'); ?>/js/main.js"></script>
    <script src="<?= base_url('assets-admin'); ?>/js/3.6.4-jquery.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets-admin'); ?>/js/jquery.easing.min.js"></script>

</body>

</html>