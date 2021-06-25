<?php
/**
 * Sets up theme defaults and registers support for various WordPress features
 */
require get_template_directory() . '/inc/core/setup.php';

/**
 * Enqueue scripts and styles
 */
require get_template_directory() . '/inc/core/scripts.php';

/**
 * Load widgets
 */
//require get_template_directory() . '/inc/core/widgets.php';

/**
 * Registers a "slider" post type
 */
//require get_template_directory() . '/inc/post-type/register-slider.php';

/**
 * Registers a "product" post type
 */
//require get_template_directory() . '/inc/post-type/register-product.php';

/**
 * Registers a "product" post type
 */
//require get_template_directory() . '/inc/acf-fields.php';

/**
 * Registers a "product" post type
 */
//require get_template_directory() . '/inc/template-tags.php';

/**
 * Register Custom Navigation Walker
 */
function register_navwalker()
{
    require_once get_template_directory() . '/inc/class/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

/**
 * Add class to navigation <li> item
 */
function add_additional_class_on_li($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

/**
 * Adds .active class to active menu item
 */
add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);

function special_nav_class($classes, $item)
{
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'active ';
    }
    return $classes;
}

/**
 * Changes a tags in the single post
 * 
 * @param array $links
 * @return array
 */
function post_tags_link($links)
{
    foreach ($links as $key => $link) {
        $links[$key] = \str_replace('rel="tag"', 'class="btn btn-outline-primary" rel="tag"', $link);
    }

    return $links;
}
add_filter("term_links-post_tag", 'post_tags_link');

/**
 * Changes comments form
 * 
 * @param array $defaults
 * @return array
 */
function change_comment_form($defaults)
{
    $commenter = wp_get_current_commenter();

    $req = get_option('require_name_email');
    $html_req = ( $req ? " required='required'" : '' );
    $html5 = 'html5';

    $fields = array(
        'author' => sprintf(
            '<div class="row"><p class="col comment-form-author">%s %s</p>',
            sprintf(
                '<label for="author">%s%s</label>',
                __('Name'),
                ( $req ? ' <span class="required">*</span>' : '')
            ),
            sprintf(
                '<input class="form-control" id="author" name="author" type="text" value="%s" size="30" maxlength="245"%s />',
                esc_attr($commenter['comment_author']),
                $html_req
            )
        ),
        'email' => sprintf(
            '<p class="col comment-form-email">%s %s</p>',
            sprintf(
                '<label for="email">%s%s</label>',
                __('Email'),
                ( $req ? ' <span class="required">*</span>' : '')
            ),
            sprintf(
                '<input class="form-control" id="email" name="email" %s value="%s" size="30" maxlength="100" aria-describedby="email-notes"%s />',
                ( $html5 ? 'type="email"' : 'type="text"'),
                esc_attr($commenter['comment_author_email']),
                $html_req
            )
        ),
        'url' => sprintf(
            '<p class="col comment-form-url">%s %s</p></div>',
            sprintf(
                '<label for="url">%s</label>',
                __('Website')
            ),
            sprintf(
                '<input class="form-control" id="url" name="url" %s value="%s" size="30" maxlength="200" />',
                ( $html5 ? 'type="url"' : 'type="text"'),
                esc_attr($commenter['comment_author_url'])
            )
        ),
    );

    $commentField = sprintf(
        '<div class="row"><p class="col comment-form-comment">%s %s</p></div>',
        sprintf(
            '<label for="comment">%s</label>',
            _x('Comment', 'noun')
        ),
        '<textarea class="form-control" id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea>'
    );

    $defaults['fields'] = $fields;
    $defaults['comment_field'] = $commentField;
    $defaults['class_submit'] = 'submit btn btn-outline-primary';

    return $defaults;
}
add_filter('comment_form_defaults', 'change_comment_form');

function register_my_menus()
{
    register_nav_menus(
        array(
            'secondary-menu' => __('Secondary Menu'),
        )
    );
}
add_action('init', 'register_my_menus');

add_action('wp_enqueue_scripts', 'add_aos_animation');

function add_aos_animation()
{
    wp_enqueue_style('AOS_animate', 'https://unpkg.com/aos@next/dist/aos.css', false, null);
    wp_enqueue_script('AOS', 'https://unpkg.com/aos@next/dist/aos.js', false, null, true);
}
