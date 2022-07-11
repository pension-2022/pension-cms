<?= $this->extend('app/index'); ?>

<?= $this->section('root'); ?>
<?= $this->include('contents/authentication/layouts/aside/sign-up'); ?>
<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script src="<?= base_url('assets/js/custom/authentication/sign-up/general.js'); ?>"></script>
<?= $this->endSection(); ?>