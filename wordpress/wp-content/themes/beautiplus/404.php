<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Beautiplus
 */

get_header(); ?>

<div class="container">
    <div class="page_content">
        <section class="site-main" id="sitemain">
            <header class="page-header">
                <h1 class="entry-title"><?php _e( '404 Not Found', 'beautiplus' ); ?></h1>
            </header><!-- .page-header -->
            <div class="page-content">
                <p><?php _e( 'Looks like you have taken a wrong turn..Dont worry... it happens to the best of us.', 'beautiplus' ); ?></p>
               
            </div><!-- .page-content -->
        </section>
        <div class="clear"></div>
    </div>
</div>
<?php get_footer(); ?>