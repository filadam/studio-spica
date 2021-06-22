

<div class="row m-0 py-4 px-1 d-flex container-fluid position-absolute">
    <div class="col d-flex justify-content-start align-items-center">
        <text class="site-logo">SPICA</text>
    </div> 
    <div class="col d-flex justify-content-end align-items-center">
        <?php if (has_nav_menu('primary')) : ?>
            <button class="navbar-toggler d-flex justify-content-center align-items-center" type="button">
                <svg class="navbar-toggler-icon " version="1.1" viewBox="0 0 319.98 319.98" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                    <path d="m266.77 167.9 53.209-7.9207-53.223-7.9113c-79.617-11.843-87.019-19.23-98.852-98.863l-7.9207-53.209-7.9004 53.22c-11.847 79.624-19.237 87.015-98.874 98.855l-53.209 7.9207 53.223 7.9113c79.625 11.829 87.016 19.219 98.852 98.863l7.9207 53.209 7.9004-53.22c11.847-79.624 19.237-87.015 98.874-98.855z"/>
                </svg>
            </button>
        <?php endif; ?>
    </div>
</div> 
<div class="container-fluid header-container m-0 position-fixed py-3">
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
