<div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1
    <?php switch (current_url()) {
        case site_url() . '/articles':
        case site_url() . '/add-article':
        case site_url() . '/edit-article':
            echo 'show here';
            break;

        default:
            # code...
            break;
    } ?>">
    <span class="menu-link py-3">
        <span class="menu-title">Articles</span>
        <span class="menu-arrow d-lg-none"></span>
    </span>
    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
        <?php $items = 'components/navigation/items/' ?>
        <?= $this->include($items . 'articles'); ?>
        <?= $this->include($items . 'add-article'); ?>
        <?= $this->include($items . 'edit-article'); ?>
    </div>
</div>