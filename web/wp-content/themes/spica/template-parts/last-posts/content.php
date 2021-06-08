<?php
/**
 * Template part for displaying lasts posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="row">

        <div class="col">    
            <?php if (!empty(get_the_post_thumbnail())) : ?>
                <div class="post-thumbnail-container">
                    <?php the_post_thumbnail('last-posts-thumb'); ?>
                </div>
            <?php endif; ?>            
            <div <?php if (!empty(get_the_post_thumbnail())) : ?>class="last-post-details"<?php endif; ?>>
                <div class="date"><?= get_the_date(); ?></div>
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
                <a class="readmore" href="<?php \the_permalink(); ?>" /><?php esc_html_e('Czytaj więcej', 'Studio Spica'); ?></a>
            </div>
        </div>

    </div>
</article><!-- #post-${ID} -->
