<?php

defined( 'ABSPATH' ) || die( "Can't access directly" );

get_header(); ?>

<main id="primary" class="site-main">

<?php if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
} ?>

</main><!-- #main -->

<?php get_footer(); ?>
