<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>
<div class="card-body">

    <div class="pt-4 pb-2">
        <h5 class="card-title text-center pb-0 fs-4"><?= lang('Auth.register') ?></h5>
        <p class="text-center small">Enter your personal details to create account</p>
    </div>

    <?= view('Myth\Auth\Views\_message_block') ?>

    <form action="<?= url_to('register') ?>" method="post" class="row g-3 needs-validation" novalidate>
        <?= csrf_field() ?>

        <div class="col-12">
            <label for="email" class="form-label"><?= lang('Auth.email') ?></label>
            <input type="email" name="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" value="<?= old('email') ?>" required>
            <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
            <div class="invalid-feedback">Please enter a valid Email adddress!</div>
        </div>

        <div class="col-12">
            <label for="username" class="form-label"><?= lang('Auth.username') ?></label>
            <div class="input-group has-validation">
                <input type="text" name="username" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" value="<?= old('username') ?>" required>
                <div class="invalid-feedback">Please choose a username.</div>
            </div>
        </div>

        <div class="col-12">
            <label for="password" class="form-label"><?= lang('Auth.password') ?></label>
            <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" autocomplete="off" required>
            <div class="invalid-feedback">Please enter your password!</div>
        </div>

        <div class="col-12">
            <label for="pass_confirm" class="form-label"><?= lang('Auth.repeatPassword') ?></label>
            <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" autocomplete="off" required>
            <div class="invalid-feedback">Please enter your password again!</div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary w-100" type="submit"><?= lang('Auth.register') ?></button>
        </div>
    </form>

</div>
<?= $this->endSection(); ?>