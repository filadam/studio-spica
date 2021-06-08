<?php
$show_title = ( true === get_theme_mod('display_title_and_tagline', true) );

?>

<div class="container-fluid">
    <div class="row header-container align-items-center">
        <div class="col" align="center">
            <?php if (has_custom_logo() && $show_title) : ?>
                <div class="site-logo"><?php the_custom_logo(); ?></div>
            <?php endif; ?>
        </div>

        <div class="col">
            <?php if (has_nav_menu('primary')) : ?>
                <nav 
                    id="site-navigation" 
                    class="navbar navbar-expand-lg navbar-light justify-content-end" 
                    role="navigation" 
                    aria-label="<?php esc_attr_e('Primary menu', 'Studio Spica'); ?>">
                    <button 
                        class="navbar-toggler" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#primary" 
                        aria-controls="primary" 
                        aria-expanded="false" 
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="primary">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'primary',
                                'container' => 'false',
                                'menu_class' => 'nav navbar-nav ml-auto',
                                'add_li_class' => "nav-item",
                                'walker' => new bootstrap_5_wp_nav_menu_walker(),
                            )
                        );

                        ?>
                    </div>
                </nav><!-- #site-navigation -->
            <?php endif; ?>
        </div>

    </div>
</div>