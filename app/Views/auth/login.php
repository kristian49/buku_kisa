<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>
<div class="card-body">

    <div class="pt-4 pb-2">
        <h5 class="card-title text-center pb-0 fs-4"><?= lang('Auth.loginTitle') ?></h5>
        <p class="text-center small">Enter your username & password to login</p>
    </div>

    <?= view('Myth\Auth\Views\_message_block') ?>

    <form action="<?= url_to('login') ?>" method="post" class="row g-3 needs-validation" novalidate>
        <?= csrf_field() ?>

        <?php if ($config->validFields === ['email']) : ?>
            <div class="col-12">
                <label for="login" class="form-label"><?= lang('Auth.email') ?></label>
                <div class="input-group has-validation">
                    <input type="email" name="login" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" required>
                    <div class="invalid-feedback">Please enter your email or username.</div>
                </div>
            </div>
        <?php else : ?>
            <div class="col-12">
                <label for="login" class="form-label"><?= lang('Auth.emailOrUsername') ?></label>
                <div class="input-group has-validation">
                    <input type="text" name="login" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" required>
                    <div class="invalid-feedback">Please enter your email or username.</div>
                </div>
            </div>
        <?php endif; ?>

        <div class="col-12">
            <label for="password" class="form-label"><?= lang('Auth.password') ?></label>
            <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" id="yourPassword" required>
            <div class="invalid-feedback">Please enter your password!</div>
        </div>

        <?php if ($config->allowRemembering) : ?>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?> type="checkbox" name="remember" value="true">
                    <label class="form-check-label" for="rememberMe"><?= lang('Auth.rememberMe') ?></label>
                </div>
            </div>
        <?php endif; ?>

        <div class="col-12">
            <button class="btn btn-primary w-100" type="submit"><?= lang('Auth.loginAction') ?></button>
        </div>

        <?php if ($config->activeResetter) : ?>
            <div class="col-12">
                <p class="small mb-0">Recreate your password <a href="<?= url_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a></p>
            </div>
        <?php endif; ?>

    </form>

</div>
<?= $this->endSection(); ?>