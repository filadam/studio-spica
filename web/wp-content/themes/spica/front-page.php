<?php
/**
 * The template for displaying front page components.
 *
 * @package WordPress
 * @subpackage Studio Spica
 */
get_header();

?>

<div class="row m-0 x">
    <div class="stars-background">
        <div id="stars"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>
    </div>
    <section class="intro m-0 g-0">
        <?php get_template_part('template-parts/front-page/front', 'video'); ?>
    </section> 
    <section class="about m-0 g-0">
        <?php get_template_part('template-parts/front-page/front', 'about'); ?>
    </section> 

    <?php /* get_template_part('template-parts/front-page/front', 'about'); */ ?> 
    <?php /* get_template_part('template-parts/front-page/front', 'projects'); */ ?>

</div>

<?php
get_footer();
