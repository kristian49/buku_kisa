<?= $this->extend('user/templates/index'); ?>

<?= $this->section('page-content'); ?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Input Tamu</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Input Tamu</li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Input Tamu</h5>

            <?php
            if (session()->getFlashData('success')) {
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle me-1"></i>
                    <?= session()->getFlashData('success') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>

            <!-- Floating Labels Form -->
            <form class="row g-3 needs-validation" method="post" action="<?= site_url('tambah_tamu_form') ?>" novalidate>
                <?= csrf_field(); ?>
                <div class="col-md-6">
                    <label for="nama_tamu" class="form-label">Nama Tamu</label>
                    <input type="text" class="form-control" name="nama_tamu" placeholder="Nama Tamu" required>
                    <div class="invalid-feedback">
                        Silahkan masukkan nama tamu.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="instansi" class="form-label">Instansi</label>
                    <input type="text" class="form-control" name="instansi" placeholder="Instansi" required>
                    <div class="invalid-feedback">
                        Silahkan masukkan instansi.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="keperluan" class="form-label">Keperluan</label>
                    <input type="text" class="form-control" name="keperluan" placeholder="Keperluan" required>
                    <div class="invalid-feedback">
                        Silahkan masukkan keperluan.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="fullname" class="form-label">Ketemu Pegawai</label>
                    <input type="text" class="form-control" name="fullname" placeholder="Ketemu Pegawai" required>
                    <div class="invalid-feedback">
                        Silahkan masukkan ketemu pegawai.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" placeholder="Tanggal" required>
                    <div class="invalid-feedback">
                        Silahkan masukkan tanggal.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="waktu" class="form-label">Waktu</label>
                    <input type="time" class="form-control" name="waktu" placeholder="Waktu" required>
                    <div class="invalid-feedback">
                        Silahkan masukkan waktu.
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" href="<?= base_url('user/input_tamu'); ?>">Simpan</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form>
        </div>
    </div>

</main>
<?= $this->endSection(); ?>