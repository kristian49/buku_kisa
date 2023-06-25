<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>
<div class="card-body">

    <div class="pt-4 pb-2">
        <h5 class="card-title text-center pb-0 fs-4">Forgot Your Password?</h5>
        <p class="text-center small"><?= lang('Auth.enterEmailForInstructions') ?></p>

        <!-- alert message -->
        <?= view('Myth\Auth\Views\_message_block') ?>

    </div>

    <form action="<?= url_to('forgot') ?>" method="post" class="row g-3 needs-validation" novalidate>
        <?= csrf_field() ?>

        <div class="col-12">
            <label for="login" class="form-label"><?= lang('Auth.emailAddress') ?></label>
            <div class="input-group has-validation">
                <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>">
                <div class="invalid-feedback">
                    <?= session('errors.email') ?>
                </div>
            </div>
        </div>

        <div class="col-12 mt-4">
            <button class="btn btn-primary w-100" type="submit"><?= lang('Auth.sendInstructions') ?></button>
        </div>

    </form>

</div>
<?= $this->endSection(); ?>