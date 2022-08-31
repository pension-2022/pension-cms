<div class="menu-item <?= (current_url() == site_url() . '/users') ? 'show here' : ''; ?>">
    <a class="menu-link py-3" href="<?= site_url('users'); ?>">
        <span class="menu-bullet">
            <span class="bullet bullet-dot"></span>
        </span>
        <span class="menu-title">Users</span>
    </a>
</div>