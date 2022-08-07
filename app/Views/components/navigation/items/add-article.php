<div class="menu-item <?= (current_url() == site_url() . '/add-article') ? 'show here' : ''; ?>">
    <a class="menu-link py-3" href="<?= site_url('add-article'); ?>">
        <span class="menu-bullet">
            <span class="bullet bullet-dot"></span>
        </span>
        <span class="menu-title">Add Article</span>
    </a>
</div>