

<div class="row m-0 py-4 px-1 d-flex container-fluid position-absolute">
    <div class="col d-flex justify-content-start align-items-center">
        <text class="site-logo">SPICA</text>
    </div> 
    <div class="col d-flex justify-content-end align-items-center">
        <?php if (has_nav_menu('primary')) : ?>
            <button class="navbar-toggler d-flex justify-content-center align-items-center" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill navbar-toggler-icon" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
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
