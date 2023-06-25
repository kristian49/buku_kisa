<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>
<div class="card-body">

    <div class="pt-4 pb-2">
        <h5 class="card-title text-center pb-0 fs-4">Reset Account!</h5>
        <p class="text-center small"><?= lang('Auth.enterCodeEmailPassword') ?></p>
    </div>

    <!-- alert message -->
    <?= view('Myth\Auth\Views\_message_block') ?>

    <form action="<?= url_to('reset-password') ?>" method="post" class="row g-3 needs-validation" novalidate>
        <?= csrf_field() ?>

        <div class="col-12">
            <label for="token" class="form-label"><?= lang('Auth.token') ?></label>
            <input type="text" class="form-control <?php if (session('errors.token')) : ?>is-invalid<?php endif ?>" name="token" value="<?= old('token', $token ?? '') ?>">
            <div class="invalid-feedback">
                <?= session('errors.token') ?>
            </div>
        </div>

        <div class="col-12">
            <label for="email" class="form-label"><?= lang('Auth.email') ?></label>
            <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" value="<?= old('email') ?>">
            <div class="invalid-feedback">
                <?= session('errors.email') ?>
            </div>
        </div>

        <div class="col-12">
            <label for="password" class="form-label"><?= lang('Auth.newPassword') ?></label>
            <input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password">
            <div class="invalid-feedback">
                <?= session('errors.password') ?>
            </div>
        </div>

        <div class="col-12">
            <label for="pass_confirm" class="form-label"><?= lang('Auth.newPasswordRepeat') ?></label>
            <input type="password" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm">
            <div class="invalid-feedback">
                <?= session('errors.pass_confirm') ?>
            </div>
        </div>

        <div class="col-12">
            <button class="btn btn-primary w-100" type="submit"><?= lang('Auth.resetPassword') ?></button>
        </div>
        <div class="col-12">
            <p class="small mb-0"><?= lang('Auth.alreadyRegistered') ?> <a href="<?= url_to('login') ?>"><?= lang('Auth.signIn') ?></a></p>
        </div>
    </form>

</div>
<?= $this->endSection(); ?>