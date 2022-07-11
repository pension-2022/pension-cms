<?= $this->extend('app/index'); ?>

<?= $this->section('root'); ?>
<?= $this->include('contents/authentication/layouts/aside/reset-password'); ?>
<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script src="<?= base_url('assets/js/custom/authentication/password-reset/password-reset.js'); ?>"></script>
<?= $this->endSection(); ?>