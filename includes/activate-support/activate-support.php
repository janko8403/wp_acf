<?php

function activate_support()
{
    add_theme_support('menus');
    add_theme_support('post-thumbnails', array('post', 'page', 'realizations', 'houses'));

    register_nav_menu('top_menu', 'Top menu');
    register_nav_menu('footer_1', 'Footer - O tikrow');
    register_nav_menu('footer_2', 'Footer - Dla pracowników');
    register_nav_menu('footer_3', 'Footer - Dla firm');
    register_nav_menu('mobile_top_menu', 'Mobile menu');

    add_theme_support('title-tag');

    add_image_size('page-logo', 320, 76);
    add_image_size('icon', 80, 514);
    add_image_size('gallery-365', 365, 285);
    add_image_size('slider', 905, 709, false);
    add_image_size('realization', 648, 403);
    add_image_size('gallery-411', 411, 261);
}

add_action('init', 'activate_support');

