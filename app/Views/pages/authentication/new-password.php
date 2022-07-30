<?= $this->extend('layouts/main'); ?>

<?= $this->section('root'); ?>
<?= $this->include('contents/authentication/new-password'); ?>
<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script src="<?= base_url('assets/js/custom/authentication/password-reset/new-password.js'); ?>"></script>
<?= $this->endSection(); ?>