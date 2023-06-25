<?php $pdf = false;
if (strpos(current_url(), "printpdf")) {
    $pdf = true;
}
if ($pdf == false) {
?>
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="<?= base_url('dashboard'); ?>">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <?php if (in_groups('admin')) : ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= base_url('input_tamu'); ?>">
                        <i class="bi bi-people"></i>
                        <span>Input Tamu (Cadangan)</span>
                    </a>
                </li><!-- End Input Tamu Page Nav -->
            <?php endif; ?>

            <li class="nav-heading">Data Tamu<?php if (in_groups('user')) : ?> dan Pegawai<?php endif; ?></li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('tamu'); ?>">
                    <i class="bi bi-people"></i>
                    <span>Tamu</span>
                </a>
            </li><!-- End Tamu Page Nav -->

            <?php if (in_groups('admin')) : ?>
                <li class="nav-heading">Manajemen Pegawai</li>
            <?php endif; ?>

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('pegawai'); ?>">
                    <i class="bi bi-person"></i>
                    <span>Pegawai<?php if (in_groups('admin')) : ?> (Akun)<?php endif; ?></span>
                </a>
            </li><!-- End Pegawai Page Nav -->

        </ul>

    </aside>
<?php } ?>