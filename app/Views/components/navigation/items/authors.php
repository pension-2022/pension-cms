<div class="menu-item <?= (current_url() == site_url() . '/authors') ? 'show here' : ''; ?>">
    <a class="menu-link py-3" href="<?= site_url('authors'); ?>">
        <span class="menu-bullet">
            <span class="bullet bullet-dot"></span>
        </span>
        <span class="menu-title">Authors</span>
    </a>
</div>