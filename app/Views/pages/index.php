<?= $this->extend('app/index'); ?>

<?= $this->section('style'); ?>
<link href="<?= base_url('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?= base_url('assets/plugins/custom/datatables/datatables.bundle.css'); ?>" rel="stylesheet" type="text/css" />
<?= $this->endSection(); ?>

<?= $this->section('root'); ?>
<?= $this->include('contents/index'); ?>
<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script src="<?= base_url('assets/js/widgets.bundle.js'); ?>"></script>
<script src="<?= base_url('assets/js/custom/widgets.js'); ?>"></script>
<script src="<?= base_url('assets/js/custom/apps/chat/chat.js'); ?>"></script>
<script src="<?= base_url('assets/js/custom/utilities/modals/upgrade-plan.js'); ?>"></script>
<script src="<?= base_url('assets/js/custom/utilities/modals/create-app.js'); ?>"></script>
<script src="<?= base_url('assets/js/custom/utilities/modals/users-search.js'); ?>"></script>
<?= $this->endSection(); ?>