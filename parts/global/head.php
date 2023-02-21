<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="robots" content="index, follow">

    <!--favicon start-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory') ?>/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory') ?>/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory') ?>/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_directory') ?>/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php bloginfo('template_directory') ?>/favicon/safari-pinned-tab.svg" color="#ff4221">
    <meta name="apple-mobile-web-app-title" content="Tikrow">
    <meta name="application-name" content="Tikrow">
    <meta name="msapplication-TileColor" content="#ff4221">
    <meta name="theme-color" content="#ffffff">
    <!--favicon end-->

    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/app.css">

    <?php get_template_part('parts/analitycs/analitycs');?>

    <?php wp_head(); ?>
</head>