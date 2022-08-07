<div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start"
    class="menu-item menu-lg-down-accordion me-lg-1 <?= (current_url() == site_url() . '/authors') ? 'show here' : ''; ?>">
    <span class="menu-link py-3">
        <span class="menu-title">Author</span>
        <span class="menu-arrow d-lg-none"></span>
    </span>
    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
        <?php $items = 'components/navigation/items/' ?>
        <?= $this->include($items . 'authors'); ?>
        <?= $this->include($items . 'add-author'); ?>
    </div>
</div>