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
            <h1>Tamu</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                    <li class="breadcrumb-item active">Tamu</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
    <?php } ?>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center">Daftar Tamu</h3>
                        <p>Ini adalah data tamu yang berkunjung ke Universitas Widyatama menggunakan Kisa.</p>
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
                                <a onclick="window.open('<?php echo site_url('TamuController/printpdf') ?>','blank')" class="btn btn-danger mb-2"><i class="bi bi-file-earmark-pdf"></i> Unduh PDF</a>
                                <?php if (in_groups('admin')) : ?>
                                    <a href="#" class="btn btn-primary mb-2 ml-2" data-bs-toggle="modal" data-bs-target="#tambahModal"><i class="bi bi-plus-lg"></i> Tambah Tamu</a>
                                <?php endif; ?>
                            <?php } ?>
                        </div>

                        <!-- Table with stripped rows -->
                        <table class="table table-bordered table-hover datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Tamu</th>
                                    <th scope="col">Instansi</th>
                                    <th scope="col">Keperluan</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Waktu</th>
                                    <?php $pdf = false;
                                    if (strpos(current_url(), "printpdf")) {
                                        $pdf = true;
                                    }
                                    if ($pdf == false) {
                                    ?>
                                        <th scope="col">Aksi</th>
                                    <?php } ?>
                                    <th scope="col">Tanggal Buat</th>
                                    <th scope="col">Tanggal Ubah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($tamu as $i => $tam) { ?>
                                    <tr>
                                        <td><?= ++$i ?></td>
                                        <td><?= $tam->nama_tamu; ?></td>
                                        <td><?= $tam->instansi; ?></td>
                                        <td><?= $tam->keperluan; ?></td>
                                        <td><?php echo tanggal_indo(date('Y-m-d', strtotime($tam->tanggal))); ?></td>
                                        <td><?php echo date('H:i', strtotime($tam->waktu)); ?></td>
                                        <?php $pdf = false;
                                        if (strpos(current_url(), "printpdf")) {
                                            $pdf = true;
                                        }
                                        if ($pdf == false) {
                                        ?>
                                            <td>
                                                <a href="#" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal<?= $tam->no; ?>"><i class="bi bi-eye"></i> Detail</a>
                                                <?php if (in_groups('admin')) : ?>
                                                    <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal<?= $tam->no; ?>"><i class="bi bi-pencil"></i> Edit</a>
                                                    <a href="#" data-href="<?= base_url('tamu/hapus/' . $tam->no); ?>" onclick="confirmToDelete(this)" class="btn btn-outline-danger btn-sm"><i class="bi bi-trash"></i> Hapus</a>
                                                <?php endif; ?>
                                                <?php $pdf = false;
                                                if (strpos(current_url(), "printpdf")) {
                                                    $pdf = true;
                                                }
                                                if ($pdf == false) {
                                                ?>
                                                    <!-- Modal Detail -->
                                                    <div class="modal fade" id="detailModal<?= $tam->no; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Detail Tamu</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body table-responsive">
                                                                    <table class="table table-bordered no-margin">
                                                                        <tbody>
                                                                            <tr>
                                                                                <th>Nama Tamu</th>
                                                                                <td><?= $tam->nama_tamu; ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Instansi</th>
                                                                                <td><?= $tam->instansi; ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Keperluan</th>
                                                                                <td><?= $tam->keperluan; ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Ketemu Pegawai</th>
                                                                                <td><?= $tam->fullname; ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Tanggal</th>
                                                                                <td><?= $tam->tanggal; ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Waktu</th>
                                                                                <td><?= $tam->waktu; ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Tanggal Buat</th>
                                                                                <td><?= $tam->tanggal_buat; ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Tanggal Ubah</th>
                                                                                <td><?= $tam->tanggal_ubah; ?></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Tutup</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </td>
                                        <?php } ?>
                                        <td><?php echo tanggal_indo(date('Y-m-d', strtotime($tam->tanggal_buat))); ?> <?php echo date('H:i:s', strtotime($tam->tanggal_buat)); ?></td>
                                        <td><?php echo tanggal_indo(date('Y-m-d', strtotime($tam->tanggal_ubah))); ?> <?php echo date('H:i:s', strtotime($tam->tanggal_ubah)); ?></td>
                                    </tr>

                                    <?php $pdf = false;
                                    if (strpos(current_url(), "printpdf")) {
                                        $pdf = true;
                                    }
                                    if ($pdf == false) {
                                    ?>
                                        <?php if (in_groups('admin')) : ?>
                                            <!-- Modal Edit -->
                                            <div class="modal fade" id="editModal<?= $tam->no; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Tamu</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form action="<?= base_url('tamu/edit/' . $tam->no) ?>" method="post">
                                                            <?= csrf_field(); ?>
                                                            <div class="modal-body">
                                                                <div class="form-group mb-3">
                                                                    <label for="nama_tamu">Nama Tamu</label>
                                                                    <input type="text" name="nama_tamu" class="form-control" id="nama_tamu" value="<?= $tam->nama_tamu; ?>" placeholder="Nama Tamu" required>
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <label for="instansi">Instansi</label>
                                                                    <input type="text" name="instansi" class="form-control" id="instansi" value="<?= $tam->instansi; ?>" placeholder="Instansi" required>
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <label for="keperluan">Keperluan</label>
                                                                    <input type="text" name="keperluan" class="form-control" id="keperluan" value="<?= $tam->keperluan; ?>" placeholder="Keperluan" required>
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <label for="fullname">Ketemu Pegawai</label>
                                                                    <input type="text" name="fullname" class="form-control" id="fullname" value="<?= $tam->fullname; ?>" placeholder="Ketemu Pegawai" required>
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <label for="tanggal">Tanggal</label>
                                                                    <input type="date" name="tanggal" class="form-control" id="tanggal" value="<?= $tam->tanggal; ?>" placeholder="Tanggal" required>
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <label for="waktu">Waktu</label>
                                                                    <input type="time" name="waktu" class="form-control" id="waktu" value="<?= $tam->waktu; ?>" placeholder="Waktu" required>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
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
            <!-- Modal Tambah -->
            <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Tamu</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="<?= base_url('tamu') ?>" method="post">
                            <?= csrf_field(); ?>
                            <div class="modal-body">
                                <div class="form-group mb-3">
                                    <label for="nama_tamu">Nama Tamu</label>
                                    <input type="text" name="nama_tamu" class="form-control" id="nama_tamu" placeholder="Nama Tamu" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="instansi">Instansi</label>
                                    <input type="text" name="instansi" class="form-control" id="instansi" placeholder="Instansi" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="keperluan">Keperluan</label>
                                    <input type="text" name="keperluan" class="form-control" id="keperluan" placeholder="Keperluan" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="fullname">Ketemu Pegawai</label>
                                    <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Ketemu Pegawai" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control" id="tanggal" placeholder="Tanggal" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="waktu">Waktu</label>
                                    <input type="time" name="waktu" class="form-control" id="waktu" placeholder="Waktu" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php } ?>

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