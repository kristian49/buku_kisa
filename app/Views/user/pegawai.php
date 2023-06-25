<?= $this->extend('user/templates/index'); ?>

<?php $this->section('styles') ?>
<!-- Custom styles for this page -->

<?= $this->endSection(); ?>

<?= $this->section('page-content'); ?>
<main id="main" class="main">

    <?php $pdf = false;
    if (strpos(current_url(), "printpdf")) {
        $pdf = true;
    }
    if ($pdf == false) {
    ?>
        <div class="pagetitle">
            <h1>Pegawai</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                    <li class="breadcrumb-item active">Pegawai</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
    <?php } ?>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center teksCenter">Daftar Pegawai</h3>
                        <p>Ini adalah data pegawai Kisa.</p>
                        <p>Tanggal: <?php echo hari_indo();
                                    echo tanggal_indo(date('Y-m-d')); ?>
                            pada pukul <?php
                                        echo date('H:i'); ?>
                        </p>

                        <?php
                        if (session()->getFlashData('success')) {
                        ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="bi bi-check-circle me-1"></i>
                                <?= session()->getFlashData('success') ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php } ?>

                        <div class="d-flex justify-content-end grid gap-3 mt-5">
                            <?php $pdf = false;
                            if (strpos(current_url(), "printpdf")) {
                                $pdf = true;
                            }
                            if ($pdf == false) {
                            ?>
                                <?php if (in_groups('admin')) : ?>
                                    <a href="<?= base_url('register'); ?>" class="btn btn-primary mb-2 ml-2"><i class="bi bi-plus-lg"></i> Registrasi</a>
                                <?php endif; ?>
                            <?php } ?>
                        </div>

                        <!-- Table with stripped rows -->
                        <table class="table table-bordered table-hover datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">NIP</th>
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">Pekerjaan</th>
                                    <?php $pdf = false;
                                    if (strpos(current_url(), "printpdf")) {
                                        $pdf = true;
                                    }
                                    if ($pdf == false) {
                                    ?>
                                        <th scope="col">Aksi</th>
                                    <?php } ?>
                                    <th scope="col">Tanggal Registrasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pegawai as $i => $peg) { ?>
                                    <tr>
                                        <td><?= ++$i ?></td>
                                        <td><?= $peg->nip; ?></td>
                                        <td><?= $peg->fullname; ?></td>
                                        <td><?= $peg->job; ?></td>
                                        <?php $pdf = false;
                                        if (strpos(current_url(), "printpdf")) {
                                            $pdf = true;
                                        }
                                        if ($pdf == false) {
                                        ?>
                                            <td>
                                                <a href="#" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal<?= $peg->id; ?>"><i class="bi bi-eye"></i> Detail</a>
                                                <?php if (in_groups('admin')) : ?>
                                                    <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal<?= $peg->id; ?>"><i class="bi bi-pencil"></i> Edit</a>
                                                    <a href="#" data-href="<?= base_url('pegawai/hapus/' . $peg->id); ?>" onclick="confirmToDelete(this)" class="btn btn-outline-danger btn-sm"><i class="bi bi-trash"></i> Hapus</a>
                                                <?php endif; ?>
                                                <?php $pdf = false;
                                                if (strpos(current_url(), "printpdf")) {
                                                    $pdf = true;
                                                }
                                                if ($pdf == false) {
                                                ?>
                                                    <!-- Modal Detail -->
                                                    <div class="modal fade" id="detailModal<?= $peg->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Detail Pegawai</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body table-responsive">
                                                                    <table class="table table-bordered no-margin">
                                                                        <tbody>
                                                                            <tr>
                                                                                <th>NIP</th>
                                                                                <td><?= $peg->nip; ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Nama Lengkap</th>
                                                                                <td><?= $peg->fullname; ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Nama Panggilan</th>
                                                                                <td><?= $peg->nickname; ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Email</th>
                                                                                <td><?= $peg->email; ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Username</th>
                                                                                <td><?= $peg->username; ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Pekerjaan</th>
                                                                                <td><?= $peg->job; ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Tanggal Registrasi</th>
                                                                                <td><?= $peg->created_at; ?></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Tutup</button>
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </td>
                                        <?php } ?>
                                        <td><?php echo tanggal_indo(date('Y-m-d', strtotime($peg->created_at))); ?> <?php echo date('H:i:s', strtotime($peg->created_at)); ?></td>
                                    </tr>

                                    <?php $pdf = false;
                                    if (strpos(current_url(), "printpdf")) {
                                        $pdf = true;
                                    }
                                    if ($pdf == false) {
                                    ?>
                                        <?php if (in_groups('admin')) : ?>
                                            <!-- Modal Edit -->
                                            <div class="modal fade" id="editModal<?= $peg->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Pegawai</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form action="<?= base_url('pegawai/edit/' . $peg->id) ?>" method="post">
                                                            <?= csrf_field(); ?>
                                                            <div class="modal-body">
                                                                <div class="form-group mb-3">
                                                                    <label for="nip">NIP</label>
                                                                    <input type="text" name="nip" class="form-control" id="nip" value="<?= $peg->nip; ?>" placeholder="NIP">
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <label for="fullname">Nama Lengkap</label>
                                                                    <input type="text" name="fullname" class="form-control" id="fullname" value="<?= $peg->fullname; ?>" placeholder="Nama Lengkap">
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <label for="nickname">Nama Panggilan</label>
                                                                    <input type="text" name="nickname" class="form-control" id="nickname" value="<?= $peg->nickname; ?>" placeholder="Nama Panggilan">
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <label for="email">Email</label>
                                                                    <input type="email" name="email" class="form-control" id="email" value="<?= $peg->email; ?>" placeholder="Email" required>
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <label for="username">Username</label>
                                                                    <input type="text" name="username" class="form-control" id="username" value="<?= $peg->username; ?>" placeholder="Username" required>
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <label for="job">Pekerjaan</label>
                                                                    <input type="text" name="job" class="form-control" id="job" value="<?= $peg->job; ?>" placeholder="Pekerjaan">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Tutup</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php } ?>
                                <?php } ?>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php $pdf = false;
    if (strpos(current_url(), "printpdf")) {
        $pdf = true;
    }
    if ($pdf == false) {
    ?>
        <?php if (in_groups('admin')) : ?>
            <!-- Modal Hapus -->
            <div class="modal fade" id="hapusModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Apa kamu yakin?</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Data akan dihapus dan hilang selamanya</p>
                        </div>
                        <div class="modal-footer">
                            <a href="#" role="button" id="tombolHapus" class="btn btn-danger">Hapus</a>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php } ?>

</main><!-- End #main -->
<?= $this->endSection(); ?>

<?php $this->section('scripts') ?>
<!-- Page level custom scripts -->
<script>
    // Call the dataTables jQuery plugin
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });

    function confirmToDelete(el) {
        $("#tombolHapus").attr("href", el.dataset.href);
        $("#hapusModal").modal('show');
    }
</script>
<?php $this->endSection(); ?>

<?php $this->section('phps') ?>
<!-- untuk format hari -->
<?php function hari_indo()
{
    $hari = date("D");

    switch ($hari) {
        case 'Mon':
            $hari_indo = "Senin";
            break;

        case 'Tue':
            $hari_indo = "Selasa";
            break;

        case 'Wed':
            $hari_indo = "Rabu";
            break;

        case 'Thu':
            $hari_indo = "Kamis";
            break;

        case 'Fri':
            $hari_indo = "Jumat";
            break;

        case 'Sat':
            $hari_indo = "Sabtu";
            break;

        case 'Sun':
            $hari_indo = "Minggu";
            break;

        default:
            $hari_indo = "Tidak diketahui";
            break;
    }

    return $hari_indo . ", ";
}
?>

<!-- untuk format tanggal -->
<?php function tanggal_indo($tanggal)
{
    $bulan = array(
        1 => 'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    // variabel pecahkan 0 = hari
    // variabel pecahkan 1 = tanggal
    // variabel pecahkan 2 = bulan

    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}
?>
<?php $this->endSection(); ?>