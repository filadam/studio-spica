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
    <?php get_template_part('template-parts/front-page/front', 'video'); ?>
    <?php get_template_part('template-parts/front-page/front', 'about'); ?>
    <?php get_template_part('template-parts/front-page/front', 'projects'); ?>
</div>

<?php
get_footer();
