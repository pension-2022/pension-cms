<?= $this->extend('layouts/main'); ?>

<?= $this->section('root'); ?>
<?= $this->include('contents/authentication/reset-password'); ?>
<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script src="<?= base_url('assets/js/custom/authentication/password-reset/password-reset.js'); ?>"></script>
<?= $this->endSection(); ?>