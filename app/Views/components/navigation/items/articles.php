<div class="menu-item <?= (current_url() == site_url() . '/articles') ? 'show here' : ''; ?>">
    <a class="menu-link py-3" href="<?= site_url('articles'); ?>">
        <span class="menu-bullet">
            <span class="bullet bullet-dot"></span>
        </span>
        <span class="menu-title">Articles</span>
    </a>
</div>