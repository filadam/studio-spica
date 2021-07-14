<?php
/**
 * The template for displaying front page components.
 *
 * @package WordPress
 * @subpackage Studio Spica
 */
get_header();

?>
<?php get_template_part('template-parts/content/loader'); ?>
<div class="row m-0 intro-wrapper">
    <div class="stars-background">
        <div id="stars"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>
    </div>
    <section class="intro m-0 p-0 g-0">
        <?php get_template_part('template-parts/front-page/front', 'video'); ?>
    </section> 
</div>
<div class="row m-0 horizon-wrapper">
        <?php get_template_part('template-parts/front-page/front', 'horizon'); ?>
</div>
<div class="row m-0 p-5">
    <section class="about m-0  g-0">
        <?php  get_template_part('template-parts/front-page/front', 'about'); ?>
    </section> 
</div>

<?php
get_footer();
