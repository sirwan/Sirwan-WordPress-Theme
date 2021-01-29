<?php

defined( 'ABSPATH' ) || die( "Can't access directly" );

get_header(); ?>

<?php if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
} ?>

<?php get_footer(); ?>
