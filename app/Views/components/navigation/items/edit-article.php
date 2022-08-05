<div class="menu-item <?= (current_url() == site_url() . '/edit-article') ? 'show here' : ''; ?>">
    <a class="menu-link py-3" href="<?= site_url('edit-article'); ?>">
        <span class="menu-bullet">
            <span class="bullet bullet-dot"></span>
        </span>
        <span class="menu-title">Edit Article</span>
    </a>
</div>