<div class="menu-item <?= (current_url() == site_url() . '/categories') ? 'show here' : ''; ?>">
    <a class="menu-link py-3" href="<?= site_url('categories'); ?>">
        <span class="menu-bullet">
            <span class="bullet bullet-dot"></span>
        </span>
        <span class="menu-title">Categories</span>
    </a>
</div>