<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <header>
 *
 * @package WordPress
 * @subpackage Studio Spica
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>

        <div id="page" class="site">

            <?php get_template_part('template-parts/header/header', 'layout'); ?>

            <div id="content" class="site-content">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main container-fluid p-0" role="main">
