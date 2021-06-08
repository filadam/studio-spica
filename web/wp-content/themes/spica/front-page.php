<?php
/**
 * The template for displaying front page components.
 *
 * @package WordPress
 * @subpackage Studio Spica
 */
get_header();

?>

<div class="row m-0">
    <div class="col-xl-8 p-0 sliders">
        <?php get_template_part('template-parts/front-page/sliders'); ?>
    </div>
    <div class="col-xl-4 order-xl-first products">
        <?php get_template_part('template-parts/front-page/products'); ?>
    </div>
</div>

<?php
get_footer();
