<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <title><?php wp_title( '|', true,'right' ); ?><?php bloginfo('name'); ?> - UX Designer locate in Canada</title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="UX/UI Designer and Web Developer, this is the my portfolio website">
    <meta name="author" content="Julia(Jiayue) Chen">
    <link rel="canonical" href="https://jiayuechen.com/" />
    <meta name="robots" content="index, follow">

    <meta property="og:type" content="website" />
    <meta property="og:title" content="Julia Chen" />
    <meta property="og:description" content="This is Julia Chen's  portfolio Website" />
    <meta property="og:image" content="<?php bloginfo( 'template_url' ); ?>/images/logo.png" />
    <meta property="og:url" content="https://jiayuechen.com" />
    <meta property="og:site_name" content="Julia Chen" />
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@jiayue_chen">
    <meta name="twitter:creator" content="@Julia Chen">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- sets pingbacks address for blogging: -->
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <link rel="icon" type="image/png" href="<?php bloginfo( 'template_url' ); ?>/images/logo.png" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Nav & Banner -->
    <div class="main">
        <header id="home-header">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-dark">
                    <a class="navbar-brand" href="<?php echo esc_url(home_url('/'));?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/logo.png" alt="Julia Chen"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- put primary menu location to header bounded with bootstrap 4 -->
                    <?php
                require_once('bs4navwalker.php');

                wp_nav_menu([
                    'menu'            => 'main',
                    'theme_location'  => 'primary-menu',
                    'container'       => 'div',
                    'container_id'    => 'navbarNav',
                    'container_class' => 'collapse navbar-collapse justify-content-end',
                    'menu_id'         => false,
                    'menu_class'      => 'navbar-nav',
                    'depth'           => 2,
                    'fallback_cb'     => 'bs4navwalker::fallback',
                    'walker'          => new bs4navwalker()
                ]);
                ?>
                </nav>
            </div>
        </header>
