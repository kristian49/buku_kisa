<?= $this->extend('user/templates/index'); ?>

<?= $this->section('page-content'); ?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('home'); ?>">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">

                    <!-- Customers Card -->
                    <div class="col-xxl-4 col-xl-12">

                        <div class="card info-card customers-card">

                            <div class="card-body">
                                <h5 class="card-title">Dashbord Message</span></h5>

                                <div>
                                    <h5>Hai, <?= user()->username; ?>!</h5>
                                    <p>Selamat Datang di Kisa Administrator</p>
                                </div>

                            </div>
                        </div>

                    </div><!-- End Customers Card -->

                    <!-- Pegawai Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="filter">
                                <a class="icon" href="<?= base_url('pegawai'); ?>"><i class="bi bi-arrow-right-square"></i></a>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Jumlah Pegawai</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $pegawai; ?></h6>
                                        <span class="text-muted small pt-2 ps-1">orang</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Pegawai Card -->

                    <!-- Tamu Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">

                            <div class="filter">
                                <a class="icon" href="<?= base_url('tamu'); ?>"><i class="bi bi-arrow-right-square"></i></a>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Jumlah Tamu</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $tamu; ?></h6>
                                        <span class="text-muted small pt-2 ps-1">orang</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Tamu Card -->

                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-4">

                <!-- Jadwal -->
                <div class="card">

                    <div class="card-body">
                        <h5 class="card-title">Quotes</span></h5>

                        <div class="activity">

                            <div class="activity-item d-flex">
                                <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                <div class="activity-content">
                                    “Rahasia hidup adalah jatuh tujuh kali dan bangun delapan kali”. - Paulo Coelho
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                <div class="activity-content">
                                    “Harapan dan perubahan adalah hal-hal yang diperjuangkan dengan keras”. - Michelle Obama
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                <div class="activity-content">
                                    “Hidup bisa sederhana dan indah. Fokus pada hal-hal yang baik”. - Maxime Lagace
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                <div class="activity-content">
                                    “Kamu tidak dapat kembali dan mengubah awal, tetapi kamu dapat memulai dari posisimu sekarang dan mengubah akhir cerita”. - CS Lewis
                                </div>
                            </div><!-- End activity item-->

                        </div>

                    </div>
                </div><!-- End Jadwal -->

            </div><!-- End Right side columns -->

        </div>
    </section>

</main>
<?= $this->endSection(); ?>