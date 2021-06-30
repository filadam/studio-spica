

<div class="row m-0 py-4 px-1 d-flex container-fluid position-absolute">
    <div class="col d-flex justify-content-start align-items-center">
        <text class="site-logo">SPICA</text>
    </div> 
    <div class="col d-flex justify-content-end align-items-center">
        <?php if (has_nav_menu('primary')) : ?>
            <button class="navbar-toggler d-flex justify-content-center align-items-center" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots navbar-toggler-icon" viewBox="0 0 16 16">
                    <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                </svg>
            </button>
        <?php endif; ?>
    </div>
</div> 
<div class="container-fluid header-container m-0 py-3 d-flex align-items-end">
    <div class="row align-items-end">
        <div class="col d-flex justify-content-center align-items-center">
            <nav id="site-navigation" class="nav justify-content-end px-2 header-nav" role="navigation">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'container' => 'false',
                        'menu_class' => 'nav flex-row text-center',
                        'add_li_class' => "nav-item",
                        'walker' => new bootstrap_5_wp_nav_menu_walker(),
                    )
                );

                ?>
            </nav>
        </div>
    </div>
</div>
