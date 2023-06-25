<?= $this->extend('home/templates/index'); ?>

<?= $this->section('page-home'); ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <h1>Selamat datang di <span>Kisa</span></h1>
        <h2>Kisa adalah tim proyek pembuatan website khusus buku tamu digital</h2>
        <?php
        if (session()->getFlashData('success')) {
        ?>
            <div class="alert alert-success alert-dismissible fade show border border-success" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                <?= session()->getFlashData('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Input Tamu Section ======= -->
    <section id="input_utama_tamu" class="about section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Input Tamu</h2>
                <h3>Silahkan diisi <span>buku tamu Kisa </span>ini</h3>
            </div>

            <div class="row">
                <!-- Floating Labels Form -->
                <form class="row g-3 needs-validation" method="post" action="<?= site_url('tambah_tamu_utama_form') ?>" novalidate>
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
                        <button type="submit" class="btn btn-primary" href="<?= base_url('home'); ?>">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>
            </div>

        </div>
    </section><!-- End Input Tamu Section -->

    <!-- ======= Tentang Kami Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Tentang Kami</h2>
                <h3>Cari Tahu Lebih Banyak <span>Tentang Kisa</span></h3>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <img src="<?= base_url('assets-home'); ?>/img/about_kisa.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <h3>Sebuah proyek dalam bentuk website dengan pengalaman berbeda.</h3>
                    <p class="fst-italic">
                        Kisa merupakan website buku tamu untuk mendata tamu secara digital.
                    </p>
                    <ul>
                        <li>
                            <i class="bx bx-universal-access"></i>
                            <div>
                                <h5>Desain buku tamu yang praktis</h5>
                                <p>Dapat dilakukan secara online dan ramah lingkungan</p>
                            </div>
                        </li>
                        <li>
                            <i class="bx bx-time-five"></i>
                            <div>
                                <h5>Menghemat Waktu & Tenaga</h5>
                                <p>Informasi tamu dalam dimuat lebih cepat dan nyaman</p>
                            </div>
                        </li>
                    </ul>
                    <p>
                        Kami berupaya menjadikan website buku tamu lebih berkesan ketika digunakan di berbagai layar perangkat gawai dengan berbagai kemudahan yang kami tawarkan.
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End Tentang Kami Section -->

    <!-- ======= Frequently Pertanyaan yang Diajukan Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>PERTANYAAN YANG SERING DIAJUKAN</h2>
                <h3>Pertanyaan Yang Sering <span>Diajukan</span></h3>
                <p>Beberapa pertanyaan yang sering diajukan ke Kisa akan kami tampilkan di bawah ini.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <ul class="faq-list">

                        <li>
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Apa itu e-Visitor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    E-Visitor atau disebut juga Visitor Management System adalah aplikasi buku tamu yang dapat diakses di internet. Aplikasi ini diharapkan dapat mendata tamu dan keperluan/maksud dari tamu terhadap salah satu atau beberapa kegiatan yang tersedia.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Apa yang bisa saya dapatkan dari e-visitor Kisa? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Kami memberikan informasi terhadap suatu kegiatan yang akan dihadiri tamu dan menyediakan layanan pendataan tamu kepada suatu kegiatan yang akan dihadiri. Dalam hal ini kami juga berusaha bekerjasama dengan para staf kami agar informasi suatu kegiatan yang akan dihadiri tersebut benar dan akurat.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Mengapa saya harus menggunakan e-visitor Kisa? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Anda dapat menggunakan e-visitor Kisa karena aplikasi ini dihadirkan secara praktis dan sederhana sehingga setiap tamu dapat menghemat waktu dalam mendata dirinya pada suatu kegiatan tertentu. E-visitor Kisa juga dapat memberikan intisari suatu kegiatan yang akan dihadiri tamu secara ringkas.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Bagaimana cara menghubungi Kisa? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Jika Anda memiliki pertanyaan atau menginginkan informasi lainnya, Anda dapat menghubungi kontak kami di nomor: +62 8123 4567 890, setiap hari Senin sampai Jumat pukul 09.00 WIB s/d 15.00 WIB. Untuk pertanyaan lebih lanjut, Anda juga dapat mengirimkan pertanyaan e-mail ke: kisa@gmail.com
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Saya tidak dapat mengakses e-visitor Kisa saat ini, apa yang harus saya lakukan? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Hal pertama yang harus Anda pastikan adalah periksa kembali pengaturan koneksi internet Anda. Jika masih membutuhkan bantuan teknis lainnya, Anda juga dapat menghubungi kami di nomor: +62 8123 4567 890 atau e-mail ke: kisa@gmail.com.
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>

        </div>
    </section><!-- End Frequently Pertanyaan yang Diajukan Section -->

    <!-- ======= Kontak Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Kontak</h2>
                <h3><span>Kontak Kami</span></h3>
                <p>Untuk menghubungi kami, Anda dapat langsung datang ke kantor kami atau melalui pesan jarak jauh. </p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>Alamat Kami</h3>
                        <p>204A Cikutra Street, Bandung, West Java 40125</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Via Email</h3>
                        <p>kisa16424@gmail.com</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Via Telepon</h3>
                        <p>+62 8123 4567 890</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Kontak Section -->

</main><!-- End #main -->
<?= $this->endSection(); ?>