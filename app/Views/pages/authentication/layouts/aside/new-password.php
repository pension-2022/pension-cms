<?= $this->extend('app/index'); ?>

<?= $this->section('root'); ?>
<?= $this->include('contents/authentication/layouts/aside/new-password'); ?>
<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script src="<?= base_url('assets/js/custom/authentication/password-reset/new-password.js'); ?>"></script>
<?= $this->endSection(); ?>