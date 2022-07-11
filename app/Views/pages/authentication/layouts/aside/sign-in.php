<?= $this->extend('app/index'); ?>

<?= $this->section('root'); ?>
<?= $this->include('contents/authentication/layouts/aside/sign-in'); ?>
<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script src="<?= base_url('assets/js/custom/authentication/sign-in/general.js'); ?>"></script>
<?= $this->endSection(); ?>