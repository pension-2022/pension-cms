<div class="menu-item <?= (current_url() == site_url() . '/add-category') ? 'show here' : ''; ?>">
    <a class="menu-link py-3" href="<?= site_url('add-category'); ?>">
        <span class="menu-bullet">
            <span class="bullet bullet-dot"></span>
        </span>
        <span class="menu-title">Add Category</span>
    </a>
</div>