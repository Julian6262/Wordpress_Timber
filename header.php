<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
            href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Roboto:wght@300;400;700&display=swap"
            rel="stylesheet">

    <?php wp_head(); ?>

</head>

<body>

<header class="header" style="background-image: url(<?php the_field('header'); ?>);">

    <div class="header__inner">

        <img src="<?php bloginfo('template_url'); ?>/assets/img/home.png" alt="...">

        <div class="header__title">
            <?php the_field('header__title'); ?>
        </div>

        <a class="header__phone" href="tel:+75852772217"><?php the_field('header__phone'); ?></a>

        <div class="header__text">
            <?php the_field('header__text'); ?>
        </div>

        <img class="header__sale" src="<?php the_field('header__sale'); ?>" alt="..">

    </div>

</header>