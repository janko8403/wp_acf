<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php get_template_part('parts/global/head'); ?>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

    <?php get_template_part('parts/analitycs/googletag'); ?>

    <?php get_template_part('parts/analitycs/getresponse'); ?>

    <?php get_template_part('parts/global/preloader'); ?>

    <header class="navbar-top <?php if (!empty($args['class_nav'])) {
                                    echo $args['class_nav'];
                                } ?>">
        <div class="container">
            <div class="row pt-2 pb-0 pb-md-4">

                <div class="col-4 col-lg-2 col-xl-4 d-flex justify-content-start">

                    <?php get_template_part('parts/header/hamburder'); ?>

                    <?php get_template_part('parts/header/logo'); ?>

                </div>

                <div class="col-8 col-lg-10 col-xl-8 d-flex justify-content-end justify-content-lg-between">

                    <?php get_template_part('parts/header/nav'); ?>

                </div>

            </div>
        </div>
    </header>

    <?php get_template_part('parts/header/nav-mobile'); ?>

    <main role="main">