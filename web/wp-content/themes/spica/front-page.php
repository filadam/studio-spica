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
    <?php get_template_part('template-parts/front-page/front', 'layout'); ?>
</div>

<?php
get_footer();
