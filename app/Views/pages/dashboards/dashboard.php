<?= $this->extend('layouts/main'); ?>

<?= $this->section('style'); ?>
<link href="<?= base_url(); ?>/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet"
    type="text/css" />
<link href="<?= base_url(); ?>/assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet"
    type="text/css" />
<?= $this->endSection(); ?>


<?= $this->section('root'); ?>
<?= $this->include('contents/dashboards/dashboard'); ?>
<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script src="<?= base_url(); ?>/assets/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
<script src="<?= base_url(); ?>/assets/js/widgets.bundle.js"></script>
<script src="<?= base_url(); ?>/assets/js/custom/widgets.js"></script>
<script src="<?= base_url(); ?>/assets/js/custom/apps/chat/chat.js"></script>
<script src="<?= base_url(); ?>/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="<?= base_url(); ?>/assets/js/custom/utilities/modals/users-search.js"></script>
<?= $this->endSection(); ?>