<?php $pdf = false;
if (strpos(current_url(), "printpdf")) {
    $pdf = true;
}
if ($pdf == false) {
?>
    <footer id="footer" class="footer">
        <div class="copyright">
            Copyright &copy; <?= date('Y'); ?> <strong><span>Kisa</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Developed by <a href="<?= base_url('home'); ?>">Kisa</a> and Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer>
<?php } ?>