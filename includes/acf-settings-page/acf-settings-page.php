<?php
function register_acf_options_pages() {

    if( !function_exists('acf_add_options_page') )
        return;

    $option_page = acf_add_options_page(array(
        'page_title'    => __('Głowne Ustawienia'),
        'menu_title'    => __('Głowne Ustawienia'),
        'capability'    => 'edit_posts',
        'redirect'      => true,
        'position'      => '3'
    ));

    acf_add_options_sub_page(array(
		'page_title' 	=> 'General',
		'menu_title' 	=> 'General',
		'parent_slug' 	=> $option_page['menu_slug'],
    ));

    acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer',
		'menu_title' 	=> 'Footer',
		'parent_slug' 	=> $option_page['menu_slug'],
    ));
}
add_action('acf/init', 'register_acf_options_pages');

add_action('acf/init', 'acf_reg_employee');
function acf_reg_employee() {

    if( function_exists('acf_add_options_sub_page') ) {

        $parent = acf_add_options_page(array(
            'page_title'    => __('Regulaminy'),
            'menu_title'    => __('Regulaminy'),
            'redirect'      => true,
            'position'      => '4'
        ));

        $child = acf_add_options_sub_page(array(
            'page_title'  => __('Regulamin dla firm'),
            'menu_title'  => __('Regulamin dla firm'),
            'parent_slug' => $parent['menu_slug'],
        ));

        $child = acf_add_options_sub_page(array(
            'page_title'  => __('Regulamin dla pracownika'),
            'menu_title'  => __('Regulamin dla pracownika'),
            'parent_slug' => $parent['menu_slug'],
        ));
    }
}

add_action('acf/init', 'acf_logotype');
function acf_logotype() {

    if( function_exists('acf_add_options_sub_page') ) {

        $parent = acf_add_options_page(array(
            'page_title'    => __('Logotypy'),
            'menu_title'    => __('Logotypy'),
            'redirect'      => true,
            'position'      => '5'
        ));

        $child = acf_add_options_sub_page(array(
            'page_title'  => __('Dodaj logotypy'),
            'menu_title'  => __('Dodaj logotypy'),
            'parent_slug' => $parent['menu_slug'],
        ));
    }
}

add_action('acf/init', 'acf_faq');
function acf_faq() {

    if( function_exists('acf_add_options_sub_page') ) {

        $parent = acf_add_options_page(array(
            'page_title'    => __('Faq'),
            'menu_title'    => __('Faq'),
            'redirect'      => true,
            'position'      => '5'
        ));

        $child = acf_add_options_sub_page(array(
            'page_title'  => __('Faq dla firm'),
            'menu_title'  => __('Faq dla firm'),
            'parent_slug' => $parent['menu_slug'],
        ));

        $child = acf_add_options_sub_page(array(
            'page_title'  => __('Faq dla pracownika'),
            'menu_title'  => __('Faq dla pracownika'),
            'parent_slug' => $parent['menu_slug'],
        ));
    }
}