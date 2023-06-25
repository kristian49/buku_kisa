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
    <link href="https:/fonts.gstatic.com" rel="preconnect">
    <link href="https:/fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets-admin'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets-admin'); ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets-admin'); ?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('assets-admin'); ?>/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?= base_url('assets-admin'); ?>/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?= base_url('assets-admin'); ?>/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('assets-admin'); ?>/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets-admin'); ?>/css/style.css" rel="stylesheet">

    <?= $this->renderSection('styles') ?>

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https:/bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https:/bootstrapmade.com/license/
  ======================================================== -->
</head>

<body id="page-top">

    <!-- ======= Header or Topbar ======= -->
    <?= $this->include('user/templates/topbar'); ?>
    <!-- End Header or Topbar -->

    <!-- ======= Sidebar ======= -->
    <?= $this->include('user/templates/sidebar'); ?>
    <!-- End Sidebar-->

    <!-- Begin Page Content -->
    <?= $this->renderSection('page-content'); ?>
    <!-- End Page Content -->

    <!-- ======= Footer ======= -->
    <?= $this->include('user/templates/footer'); ?>
    <!-- End Footer -->

    <a href="#page-top" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <?php $pdf = false;
    if (strpos(current_url(), "printpdf")) {
        $pdf = true;
    }
    if ($pdf == false) {
    ?>
        <!-- Modal -->
        <div class="modal fade" id="logoutModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Yakin untuk Keluar?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Pilih "Keluar" di bawah jika Anda siap untuk mengakhiri sesi Anda saat ini.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <a class="btn btn-primary" href="<?= base_url('logout'); ?>">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets-admin'); ?>/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="<?= base_url('assets-admin'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets-admin'); ?>/vendor/chart.js/chart.umd.js"></script>
    <script src="<?= base_url('assets-admin'); ?>/vendor/echarts/echarts.min.js"></script>
    <script src="<?= base_url('assets-admin'); ?>/vendor/quill/quill.min.js"></script>
    <script src="<?= base_url('assets-admin'); ?>/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="<?= base_url('assets-admin'); ?>/vendor/tinymce/tinymce.min.js"></script>
    <script src="<?= base_url('assets-admin'); ?>/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('assets-admin'); ?>/js/main.js"></script>
    <script src="<?= base_url('assets-admin'); ?>/js/3.6.4-jquery.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets-admin'); ?>/js/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('js/disable_right.js') ?>"></script>

    <?= $this->renderSection('scripts') ?>

    <?= $this->renderSection('phps') ?>

</body>

</html>