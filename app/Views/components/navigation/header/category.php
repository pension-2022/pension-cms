<div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1
    <?php switch (current_url()) {
        case site_url() . '/categories':
        case site_url() . '/add-category':
        case site_url() . '/edit-category':
            echo 'show here';
            break;

        default:
            # code...
            break;
    } ?>
    ">
    <span class="menu-link py-3">
        <span class="menu-title">Categories</span>
        <span class="menu-arrow d-lg-none"></span>
    </span>
    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
        <?php $items = 'components/navigation/items/' ?>
        <?= $this->include($items . 'categories'); ?>
        <?= $this->include($items . 'add-category'); ?>
        <?= $this->include($items . 'edit-category'); ?>
    </div>
</div>