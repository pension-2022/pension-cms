<div class="menu-item <?= (current_url() == site_url() . '/sign-up') ? 'show here' : ''; ?>">
    <a class="menu-link py-3" href="<?= site_url('sign-up'); ?>">
        <span class="menu-bullet">
            <span class="bullet bullet-dot"></span>
        </span>
        <span class="menu-title">Add Author</span>
    </a>
</div>