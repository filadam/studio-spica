<?php
$show_title = ( true === get_theme_mod('display_title_and_tagline', true) );

?>
<div class="col mt-5 d-flex justify-content-center">
    <?php if (has_nav_menu('primary')) : ?>
        <button 
            class="navbar-toggler d-flex justify-content-center" 
            type="button" 
            />
        <span class="navbar-toggler-icon"></span>
    </button>
<?php endif; ?>
</div> 
<div class="container-fluid header-container m-0 position-fixed py-5">
    <div class="row  align-items-start px-2">


    </div>
    <div class="row align-items-end pt-3">
        <div class="col d-flex justify-content-center pt-4">
            <svg viewBox="0 0 2000 150">
            <symbol id="s-text">
                <text text-anchor="middle" x="50%" y="50%" dy=".35em">SPICA</text>
            </symbol>
            <use class="text" xlink:href="#s-text"></use>
            <use class="text" xlink:href="#s-text"></use>
            <use class="text" xlink:href="#s-text"></use>
            <use class="text" xlink:href="#s-text"></use>
            <use class="text" xlink:href="#s-text"></use>
            </svg>
        </div>
    </div> 
    <div class="row align-items-end pt-xl-5">
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