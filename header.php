<?php

    if ( "dark" == get_field("navigation_theme")) {
        $navigation_class = "primary--dark";
    }else if ("light" == get_field("navigation_theme")){
        $navigation_class = "primary--light";
    }

 ?><!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <?php wp_head(); ?>
        <title><?php echo wp_title(); ?></title>
    </head>
    <body <?php body_class(); ?> >
        <?php
            $primary_menu = wp_get_nav_menu_items('Primary Menu');
         ?>
        <div class="container-fluid mt-5 mb-5 position-absolute" style="z-index: 99;">
            <div class="container">
                <nav class="primary <?php echo $navigation_class; ?> d-flex">
                    <div class="me-auto">
                        <h1 class="logo">Sirwan Qutbi</h1>
                    </div>
                    <div class="links d-none d-lg-block">
                        <ul id="menu-primary-menu" class="links">
                            <?php foreach ($primary_menu as $item) : ?>
                                <li id="menu-item-<?= $item->ID?>" class="ms-5 menu-item menu-item-<?= $item->ID?>">
                                    <a href="<?= $item->url; ?>" class="link"><?= $item->title; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="d-block d-lg-none">
                        <a class="mobile-menu" href="#">Menu</a>
                        <img src="<?php echo SIRWAN_ROOT_PATH . '/dist/svg/icon-menu-dark.svg' ?>" alt="Menu">
                    </div>
                </nav>
            </div>
        </div>
