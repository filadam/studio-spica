<?php
$show_title = ( true === get_theme_mod('display_title_and_tagline', true) );

?>
<div class="col d-flex justify-content-end">
    <?php if (has_nav_menu('primary')) : ?>
        <button 
            class="navbar-toggler" 
            type="button" 
            />
        <span class="navbar-toggler-icon"></span>
    </button>
<?php endif; ?>
</div> 

<div class="col d-flex justify-content-start">
    <div class="site-logo">SPICA</div>
</div>

<div class="container-fluid header-container m-0 position-fixed py-5">
    <div class="row align-items-end">
        <div class="col d-flex justify-content-center align-items-end">
            <nav 
                id="site-navigation" 
                class="nav justify-content-end px-2 header-nav" 
                role="navigation" 
                />
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'container' => 'false',
                        'menu_class' => 'nav flex-column text-center',
                        'add_li_class' => "nav-item",
                        'walker' => new bootstrap_5_wp_nav_menu_walker(),
                    )
                );

                ?>
            </nav>
        </div>
    </div>
</div>